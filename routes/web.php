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

Route::get('/series-detail', function(){
    return view('series-detail');
})->name('series.detail');

Route::get('/sign-up', function(){
    return view('sign-up');
})->name('sign-up.view');

Route::view('/sign-in', '.sign-in')->name('sign-in.view');

Route::view('/forgot-pw', 'forgot-pw')->name('forgot-pw.view');