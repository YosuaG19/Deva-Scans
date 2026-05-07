<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home.view');

Route::get('/browse', function(){
    return view('browse');
})->name('browse.view');

Route::get('/profile', function(){
    return view('profile');
})->name('profile.view');

Route::get('/creator', function(){
    return view('creator');
})->name('creator.view');