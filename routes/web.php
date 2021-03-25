<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post\VideoController;
use App\Http\Controllers\Post\BlogController;
use App\Http\Controllers\Controller;

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

Route::get('/', [PostController::class, 'index']);

Route::post('/upload/post', [PostController::class, 'store'])->name('upload.post');
Route::get('/albums', [Controller::class, 'album'])->name('albums');
// post video
Route::get('/videos', [VideoController::class, 'video'])->name('videos');
Route::post('/upload/video', [VideoController::class, 'store'])->name('upload.post.withvideo');
// Blog
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/create/blog', [BlogController::class, 'create'])->name('create-blog');
Route::post('/blog/store', [BlogController::class, 'store'])->name('store.blog');
// Pages
Route::get('/about-us', [Controller::class, 'aboutUs'])->name('about-us');
Route::get('/privacy-policy', [Controller::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-condition', [Controller::class, 'termsCondition'])->name('terms-condition');
