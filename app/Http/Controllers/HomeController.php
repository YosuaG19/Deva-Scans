<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView(){
        $comics_banner = Comics::take(20)->get();
        $comics_rec = Comics::orderBy('rating_avg', 'desc')->take(5)->get();


        $updates = Comics::orderBy('created_at', 'desc')
            ->get()
            ->groupBy('upt_day')
            ->map(fn ($comics) => $comics->take(6));          

        return view('home', compact('comics_banner', 'comics_rec', 'updates'));
    }
}
