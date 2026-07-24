<?php

use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('home.')->group(function(){
    Route::get('/updates', [HomeController::class, 'updates'])->name('update');
    Route::get('/', [HomeController::class, 'homeView'])->name('view');
});

Route::middleware('auth')->group(function(){
    Route::prefix('profile')->name('profile.')->group(function(){
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::post('/edit/usr', [ProfileController::class, 'updateUsername'])->name('uptUser');
        Route::post('/edit/pass', [ProfileController::class, 'updatePass'])->name('uptPass');
        Route::post('/edit/pp', [ProfileController::class, 'updateProfile'])->name('uptPP');
        Route::post('/edit/del', [AuthController::class, 'delete_acc'])->name('accDel');
        Route::get('/sign_out', [AuthController::class, 'sign_out'])->name('sign_out');
        Route::get('/', [ProfileController::class, 'view'])->name('index');
    });
    // Route::post('/comment');
    // Route::post('/reaction');
});

Route::prefix('/browse')->name('browse.')->group(function(){
    Route::post('/{comic:slug}/bookmark', [ProfileController::class, 'addBookmark'])->middleware('auth')->name('bookmark');
    Route::get('/', [BrowseController::class, 'view'])->name('view');
});


Route::prefix('creator')->name('creator.')->group(function(){
    Route::get('/manage', [CreatorController::class, 'manage'])->name('manage');
    Route::get('/add', [CreatorController::class, 'addView'])->name('addView');
    Route::get('/', [CreatorController::class, 'view'])->name('view');
});

Route::prefix('series')->name('series.')->group(function(){
    Route::post('/{comic:slug}/bookmark', [ProfileController::class, 'addBookmark'])->middleware('auth')->name('bookmark');
    Route::post('/{comic:slug}/comment', [ProfileController::class, 'addCommentComic'])->middleware('auth')->name('addCommentCommic');
    Route::get('/{comic:slug}', [SeriesController::class, 'detail'])->name('detail');
    Route::post('/{comic:slug}/{chapter}/comment', [ProfileController::class, 'addCommentChapter'])->middleware('auth')->name('addCommentChapter');
    Route::get('/{comic:slug}/{chapter}', [SeriesController::class, 'chapter'])->name('chapter');
});

Route::prefix('auth')->name('auth.')->group(function(){
    Route::get('/sign_in', [AuthController::class, 'sign_in'])->name('sign_in');
    Route::post('/sign_in', [AuthController::class, 'validating_acc'])->name('acc_sign_in');
    Route::get('/sign_up', [AuthController::class, 'sign_up'])->name('sign_up');
    Route::post('/sign_up', [AuthController::class, 'create_acc'])->name('acc_sign_up');
});


Route::get('/subscription', function(){
    return view('subscriptions');
})->name('subscriptions.view');


// routes/web.php

use App\Http\Controllers\LanguageController;

Route::post('/language', [LanguageController::class, 'change'])
    ->name('language.change');

// Route::get()