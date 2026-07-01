<?php

use App\Http\Controllers;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home.view');

Route::get('/browse', [BrowseController::class, 'view'])->name('browse.view');

Route::prefix('profile')->name('profile.')->group(function(){
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::post('/edit/usr', [ProfileController::class, 'updateUsername'])->name('uptUser');
    Route::post('/edit/pass', [ProfileController::class, 'updatePass'])->name('uptPass');
    Route::post('/edit/del', [ProfileController::class, 'delete'])->name('accDel');
    Route::get('/', [ProfileController::class, 'view'])->name('index');
});

Route::prefix('creator')->name('creator.')->group(function(){
    Route::get('/manage', [CreatorController::class, 'manage'])->name('manage');
    Route::get('/add', [CreatorController::class, 'addView'])->name('addView');
    Route::get('/', [CreatorController::class, 'view'])->name('view');
});

Route::prefix('series')->name('series.')->group(function(){
    Route::get('/{chapter}', [SeriesController::class, 'chapter'])->name('chapter');
    Route::get('/', [SeriesController::class, 'detail'])->name('detail');
});

Route::get('/sign-up', function(){
    return view('auth.sign-up');
})->name('sign-up.view');

Route::get('/subscription', function(){
    return view('subscriptions');
})->name('subscriptions.view');

Route::view('/sign-in', 'auth.sign-in')->name('sign-in.view');

Route::view('/forgot-pw', 'auth.forgot-pw')->name('forgot-pw.view');

// Route::get()