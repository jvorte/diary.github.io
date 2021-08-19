<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UploadsController;
use App\Http\Controllers\ContactsController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    
    Route::any('/post/{post}',[PostsController::class,'post'])->name('post');  

    Route::any('/newpost',[PostsController::class,'newpost'])->name('newpost');
    
    Route::get('/delete/{post}',[PostsController::class,'delete'])->name('delete');

    Route::any('newcomment/{post}',[CommentsController::class,'new_comment'])->name('newcomment');
});

  

Auth::routes();
Route::get('/', [PostsController::class, 'index'])->name('home');

Route::get('/home', [PostsController::class, 'index'])->name('home');

Route::get('/about', [PostsController::class, 'about'])->name('about');

Route::get('/news',[PostsController::class,'news'])->name('news');

Route::get('/posts',[PostsController::class,'posts'])->name('posts');

Route::any('/contact',[ContactsController::class,'contact'])->name('contact');

Route::any('/edit/{post}',[PostsController::class,'edit'])->name('edit');

Route::any('search/',[PostsController::class,'search'])->name('search');



Route::get('/upload',[UploadsController::class,'index'])->name('upload');

Route::post('/upload',[UploadsController::class,'upload'])->name('upload');









