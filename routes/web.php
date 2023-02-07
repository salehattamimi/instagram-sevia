<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['XssSanitization']], function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::post('/post/create', [PostController::class, 'create'])->name('post');
        Route::post('/post/sore', [PostController::class, 'store'])->name('post.store');
        Route::post('/post/comment/', [PostController::class, 'comment_page'])->name('post.comment');
        Route::post('/post/comment/store', [PostController::class, 'comment_store'])->name('comment.store');

    });
});