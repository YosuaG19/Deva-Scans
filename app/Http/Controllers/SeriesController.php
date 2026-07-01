<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function detail(){
        return view('series.series');
    }

    public function chapter($id){
        return view('series.chapter', compact('id'));
    }
}
