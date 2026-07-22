<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView(){
        $comics_banner = Comics::take(20)->get();
        $comics_upt = Comics::orderBy('created_at', 'desc')->take(5)->get();
        $comics_rec = Comics::orderBy('rating_avg', 'desc')->take(5)->get();


        // $updates = Comics::all()->groupBy(function ($comic) {
        //     return ($comic->upt_day);
        // });

        $updates = Comics::all()->groupBy('upt_day');

        // dd($updates->keys());
        

        return view('home', compact('comics_banner', 'comics_upt', 'comics_rec', 'updates'));
    }
}
