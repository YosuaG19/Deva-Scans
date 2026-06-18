<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view(){
        
        return view('profile.profile');
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
