<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Comments;
use App\Models\Ratings;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function view(){
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $bookmark = $user->bookmarkedComics()->latest()->paginate(12);
        
        // dd($bookmark);
        $history = Comics::orderBy('rating_avg')->take(5)->get();
        
        return view('profile.profile', compact('bookmark', 'history', 'user'));
        }
        
    public function edit(){
        $user = Auth::user();

        // dd($pp_list);

        return view('profile.profile-info', compact('user'));
    }

    public function updateUsername(Request $request){
        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')->ignore(Auth::id())]
        ]);

        $updated_value = [];
        /** @var \App\Models\User $user */
        $user = Auth::user();
        
        if ($validate['name'] != $user->name){
            $updated_value['name'] = $validate['name'];
        }
        if ($validate['email'] != $user->email){
            $updated_value['email'] = $validate['email'];
        }

        if (!empty($updated_value)){
            $user->update($updated_value);

            return redirect()->route('profile.index');
        }

        return back()->withInput();
    }

    public function updatePass(Request $request){
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', Password::min(8),'confirmed']
        ]);

        if (!Hash::check($validated['current_password'], $user->password)){
            return back()->withErrors([
                'current_password' => 'The password is incorrect.',
            ]);
        }

        if ($validated['current_password'] == $validated['password']){    
            return back()->withErrors([
                'password' => 'Password cannot be same with the previous.',
            ]);
        }
            
        $user->update([
            'password' => $validated['password']
        ]);
        return redirect()->route('profile.index');
    }

    public function updateProfile(Request $request){
        /** @var \App\Models\User $user */    
        $user = Auth::user();
        $pp_list = [
          'profile-pic-1',
          'profile-pic-2',
          'profile-pic-3'
        ];

        $validated = $request->validate([
            'pp_path' => ['required'],
        ]);

        if (! in_array($validated['pp_path'], $pp_list, true)) {
            abort(400, 'Invalid profile picture.');
        }

        $user->update([
            'pp_path' => $validated['pp_path']
        ]);

        return back()->with('success', 'Profile picture updated.');
    }

    public function addBookmark(Comics $comic){
        /** @var \App\Models\User $user */    
        $user = Auth::user();

        $user->bookmarkedComics()->toggle($comic->id);

        return back();
    }



    public function addCommentComic(Request $request, Comics $comic){
        $validated = $request->validate([
            'comment' => ['required', 'max:200']
        ]);    
        $user = Auth::user();
        $comment = $comic->comments()->create([
            'user_id' => $user->id,
            'content' => $validated['comment'],
            'upvote' => 0,
            'downvote' => 0
        ]);

        $comment->load('user');

        return response()->json([
            'success' => true,
            'html' => view('components.series.comment-card', [
                'comment' => $comment,
            ])->render(),
        ]);
    }

    public function addCommentChapter(Request $request, Comics $comic, Chapters $chapter){
        $validated = $request->validate([
            'comment' => ['required', 'max:200']
        ]);    
        $user = Auth::user();
        $comment = $chapter->comments()->create([
            'user_id' => $user->id,
            'content' => $validated['comment'],
            'upvote' => 0,
            'downvote' => 0
        ]);

        $comment->load('user');
        
        return response()->json([
            'success' => true,
            'html' => view('components.series.comment-card', [
                'comment' => $comment,
            ])->render(),
        ]);
    }

    public function addReactionComic(Request $request, Comics $comic){
        $validated = $request->validate([
            'reaction' => ['required'],
        ]);
        $user = Auth::user();
        $reaction = $comic->reactions()
            ->where('user_id', $user->id)
            ->first();

        if (!$reaction) {
            $comic->reactions()->create([
                'user_id' => $user->id,
                'type' => $validated['reaction']
            ]);
        } elseif ($reaction->type === $validated['reaction']) {
            $reaction->delete();
            $validated['reaction'] = null;
        } else {
            $reaction->update([
                'type' => $validated['reaction'],
            ]);
        }

        $counts = $comic->reactions()
            ->selectRaw('type, COUNT(*) as total')
            ->groupBy('type')
            ->pluck('total', 'type');

        return response()->json([
            'success' => true,
            'reaction' => $validated['reaction'],
            'counts' => $counts,
        ]);
    }

    public function addReactionChapter(Request $request, Comics $comic, Chapters $chapter){
        $validated = $request->validate([
            'reaction' => ['required'],
        ]);

        $user = Auth::user();
        $reaction = $chapter->reactions()
            ->where('user_id', $user->id)
            ->first();

        if (!$reaction) {
            $chapter->reactions()->create([
                'user_id' => $user->id,
                'type' => $validated['reaction']
            ]);
        } elseif ($reaction->type === $validated['reaction']) {
            $reaction->delete();
        } else {
            $reaction->update([
                'type' => $validated['reaction'],
            ]);
        }

        $counts = $chapter->reactions()
            ->selectRaw('type, COUNT(*) as total')
            ->groupBy('type')
            ->pluck('total', 'type');

        return response()->json([
            'success' => true,
            'reaction' => $validated['reaction'],
            'counts' => $counts,
        ]);
    }

    public function addRating(Request $request, Comics $comic){
        $user = Auth::user();
        $validated = $request->validate([
            'rate' => 'required|integer|min:1|max:10',
        ]);

        $rating = $comic->ratings()
            ->where('user_id', $user->id)->first();
        
        $update = $rating ? true : false;
        if (!$rating){
            $rating = Ratings::create([
                'comic_id' => $comic->id,
                'user_id' => $user->id,
                'rate' => $validated['rate']
            ]);
            $update = true;
        }else if ($rating->rate == $validated['rate']){
            $rating->delete();  
            $update = false;
        }else{
            $rating->update([
                'rate' => $validated['rate']
            ]);
        }

        $comic->refresh();

        $avg = round($comic->ratings()->avg('rate') ?? 0, 1);
        $count = $comic->ratings()->count();

        $comic->update([
            'rating_avg' => $avg,
            'rating_count' => $count,
        ]);

        return response()->json([
            'success' => true,
            'action' => $update,
            'average' => $avg,
            'count' => $count,
            'rate' => (int) $rating->rate,
        ]);
    }
}
