<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view(){
        $bookmark = Comics::orderBy('created_at')->take(8)->get();
        $history = Comics::orderBy('rating_avg')->take(5)->get();

        return view('profile.profile', compact('bookmark', 'history'));
    }

    public function edit(){
        return view('profile.profile-info');
    }

    public function updateUsername(Request $request){
        
        return back()->withInput();
    }

    public function updatePass(Request $request){

        return back();
    }

    public function delete(){
        return view('home');
    }
}
