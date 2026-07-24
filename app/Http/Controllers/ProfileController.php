<?php

namespace App\Http\Controllers;

use App\Models\Bookmarks;
use App\Models\Chapters;
use App\Models\Comics;
use App\Models\Comments;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function view(){
        $user = Auth::user();
        $bookmark = Auth::user()->bookmarkedComics()->latest()->paginate(12);
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
        Auth::user()
            ->bookmarkedComics()
            ->toggle($comic->id);

        // return back();
    }



    public function addCommentComic(Request $request, Comics $comic){
        $validated = $request->validate([
            'comment' => ['required', 'max:200']
        ]);    
        $user = Auth::user();
        // dd($comic, $comic->id);
        $comic->comments()->create([
            'user_id' => $user->id,
            'content' => $validated['comment'],
            // 'commentable_id' => $comic->id
        ]);

        return back();
    }

    public function addCommentChapter(Request $request, Comics $comic, Chapters $chapter){
        $validated = $request->validate([
            'comment' => ['required', 'max:200']
        ]);    
        $user = Auth::user();
        // dd($chapter, $chapter->id);
        $chapter->comments()->create([
            'user_id' => $user->id,
            'content' => $validated['comment'],
            // 'commentable_id' => $chapter->id
        ]);

        return back();
    }

    public function addReaction(){

    }
}
