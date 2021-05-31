<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImageController;

use App\Http\Controllers\StudentController;

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



// CRUD

Route::get('/add-post',[PostController::class,'addPost']);

Route::post('/create-post',[PostController::class,'createPost'])->name('post.create');

Route::get('/',[PostController::class,'getPost'])->name('post.getpost');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');


