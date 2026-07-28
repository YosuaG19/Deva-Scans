<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use App\Models\Genres;
use App\Models\Panels;
use App\Models\Status;
use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function view(){
        // $comics = Comics::whereIn('type_id', );

        return view('creator.creator');
    }

    public function manage(){
        $genres = Genres::get();
        $status = Status::get();
        // $comics
        
        return view('creator.manage', compact(['genres', 'status']));
    }

    // public function addChapter(Request $request){
    //     foreach ($request->file('panels') as $image) {

    //         $path = $image->store('panels', 'public');

    //         Panels::create([
    //             'chapter_id' => $chapter->id,
    //             'image' => $path,
    //         ]);
    //     }        
    // }

    public function addView(){
        $genres = Genres::get();
        $status = Status::get();
        
        return view('creator.add', compact(['genres', 'status']));
    }

    public function addComic(){
        return;
    }

    public function editCreation(){
        return;
    }

    public function delCreation(){
        return;
    }
}
