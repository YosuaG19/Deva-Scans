<?php

use App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home.view');

Route::get('/browse', function(){
    return view('browse');
})->name('browse.view');

Route::prefix('profile')->name('profile.')->group(function(){
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::post('/edit/usr', [ProfileController::class, 'updateUsername'])->name('uptUser');
    Route::post('/edit/pass', [ProfileController::class, 'updatePass'])->name('uptPass');
    Route::post('/edit/del', [ProfileController::class, 'delete'])->name('accDel');
    Route::get('/', [ProfileController::class, 'view'])->name('index');
});

Route::get('/creator', function(){
    return view('creator');
})->name('creator.view');

Route::get('/series-detail', function(){
    return view('series-detail');
})->name('series.detail');

Route::get('/sign-up', function(){
    return view('auth.sign-up');
})->name('sign-up.view');

Route::get('/subscription', function(){
    return view('subscriptions');
})->name('subscriptions.view');

Route::view('/sign-in', 'auth.sign-in')->name('sign-in.view');

Route::view('/forgot-pw', 'auth.forgot-pw')->name('forgot-pw.view');

// Route::get()