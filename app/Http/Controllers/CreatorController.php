<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function view(){
        return view('creator.creator');
    }

    public function manage(){
        return view('creator.manage');
    }

    public function addView(){
        return view('creator.add');
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
