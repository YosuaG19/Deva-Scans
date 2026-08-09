<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use App\Models\Genres;
use App\Models\Panels;
use App\Models\Status;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CreatorController extends Controller
{
    public function view(){
        /** @var \App\Models\User $user */
        $user = Auth::user();    
        $created = $user->creator()->latest()->paginate(10);

        return view('creator.creator', compact(['created']));
    }

    public function manage(Comics $comic){
        $genres = Genres::get();
        $status = Status::get();

        // dd($comic->genres);
        
        return view('creator.manage', compact(['genres', 'status', 'comic']));
    }

    public function addComic(Request $request){
        // dd($request->all());
        $user = Auth::user();
        $type = Types::where('name', 'Created')->first();
        $status = Status::where('name', 'Ongoing')->first();
        $cover =[
            'cover-1',
            'cover-2',
            'cover-3',
            'cover-4',
            'cover-5',
            'cover-6',
            'cover-7',
            'cover-8'
        ];

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'day' => 'required|string|in:sun,mon,tue,wed,thu,fri,sat,random'
        ]);

        $comic = Comics::create([
            'title' => $validated['title'],
            'author' => $user->name,
            'artist' => $validated['artist'],
            'desc' => $validated['description'],
            'creator_id' => $user->id,
            'upt_day' => $validated['day'],
            'slug' => str()->slug($validated['title']),
            'type_id' => $type->id,
            'status_id' => $status->id,
            'cover_path' => $cover[array_rand($cover)]
        ]);

        $selectedGenres = $request->input('genres', []);
        $selectedGenres = $selectedGenres[0];
        $selectedGenres = json_decode($selectedGenres, true);
        // dd($selectedGenres);

        foreach ($selectedGenres as $genreName) {
            $genre = Genres::where('name', $genreName)->first();
            if ($genre) {
                $comic->genres()->attach($genre->id);
            }
        }

        dd($comic->genres);

        return redirect()->route('creator.view');
    }

    public function addChapter(Request $request, Comics $comic){
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'panels' => 'required|array'
        ]);

        $numbering = $comic->chapters()->count() + 1;

        $chapter = $comic->chapters()->create([
            'title' => $validated['title'] ?? null,
            'numbering' => $numbering,
            'comic_id' => $comic->id
        ]);

        $i = 1;
        foreach ($validated['panels'] as $panel) {
            $chapter->panels()->create([
                'img_path' => $panel,
                'page_number' => $i,
                'chapter_id' => $chapter->id
            ]);
            $i++;
        }

        return Redirect()->route('creator.view');
    }

    public function addView(){
        $genres = Genres::get();
        $status = Status::get();
        
        return view('creator.add', compact(['genres', 'status']));
    }

    public function editCreation(Request $request, Comics $comic){
        // dd($request->all());
        $user = Auth::user();

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'day' => 'required|string|in:sun,mon,tue,wed,thu,fri,sat,random'
        ]);

        $selectedGenres = $request->input('genres', []);
        $selectedGenres = $selectedGenres[0];
        $selectedGenres = json_decode($selectedGenres, true);

        $comic->genres()->sync([]);
        foreach ($selectedGenres as $genreName) {
            $genre = Genres::where('name', $genreName)->first();
            if ($genre) {
                $comic->genres()->attach($genre->id);
            }
        }

        $comic->update([
            'title' => $validated['title'],
            'artist' => $validated['artist'],
            'desc' => $validated['description'],
            'upt_day' => $validated['day'],
        ]);

        $comic->save();

        // dd($comic);

        return redirect()->route('creator.manage', $comic);
    }

    public function delComic(Comics $comic){
        $comic->delete();
        return Redirect()->route('creator.view');
    }
}
