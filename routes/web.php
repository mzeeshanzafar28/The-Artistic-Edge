<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAuth;
use App\Http\Controllers\artistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\exhibitionController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtworkReactionController;
use App\Http\Controllers\ArtworkCommentController;

Route::get('/',[UserController::class, 'main']);

Route::get('about', [UserController::class, 'about'])->name('about');
Route::get('home', [UserController::class, 'home'])->name('home');
Route::get('Blog', [UserController::class, 'Blog'])->name('Blog');
Route::get('exhibitions', [UserController::class, 'exhibitions'])->name('exhibitions');

Route::get('artist/{id}', [artistController::class, 'show'])->name('artist.show'); // Custom show route


Route::middleware([UserAuth::class])->group(function () {
    Route::get('contactus', [UserController::class, 'contactus'])->name('contactus');
    Route::post('message/store', [UserController::class, 'storemessage'])->name('message.store');
    Route::get('message/index', [UserController::class, 'showmessage'])->name('message.index');
    Route::get('main', [UserController::class, 'main'])->name('main');

    // Artist Routes
    Route::resource('artist', artistController::class)->except(['show']); // Exclude show to avoid conflict
    Route::get('artistPage', [artistController::class, 'create'])->name('artistPage');
    Route::post('artist/store', [artistController::class, 'store'])->name('artist.store');
    Route::delete('artist/image/{imageId}', [artistController::class, 'deleteImage'])->name('artist.image.delete');
    Route::get('artistList', [artistController::class, 'index'])->name('artistList');

    // Exhibitions
    Route::get('exhibition/create', [exhibitionController::class, 'create'])->name('exhibition.create');
    Route::post('exhibition/store', [exhibitionController::class, 'store'])->name('exhibition.store');
    Route::get('exhibition/index', [exhibitionController::class, 'index'])->name('exhibition.index');
    Route::delete('exhibition/{id}', [exhibitionController::class, 'destroy'])->name('exhibition.destroy');


    // Admin
    Route::get('homepage', [mainController::class, 'homepage'])->name('homepage');
    Route::get('adminlogin', [mainController::class, 'adminlogin'])->name('adminlogin');
    Route::post('adminlog', [mainController::class, 'adminlog'])->name('adminlog');

    //Likes, Dislikes, Comments
    Route::post('/artworks/{artwork}/reaction', [ArtworkReactionController::class, 'store'])->middleware('auth');
    Route::post('/artworks/{artwork}/comment', [ArtworkCommentController::class, 'store'])->middleware('auth');
    Route::get('/artworks/{artwork}/comments', [ArtworkCommentController::class, 'index']);

});

// Login
Route::get('login', [LoginController::class, 'loginpage'])->name('loginpage');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('signuppage', [LoginController::class, 'signuppage'])->name('signuppage');
Route::post('signup', [LoginController::class, 'signup'])->name('signup');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
Route::get('exhibition/{id}', [exhibitionController::class, 'showexhibition'])->name('exhibition.show');
