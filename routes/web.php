<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

// HTTP Client
Route::get('/posts', [ClientController::class, 'getAllPosts'])->name('posts.getallposts');
Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getpostbyid');
Route::get('/add-post', [ClientController::class, 'addPost'])->name('posts.addpost');
Route::get('/update-post', [ClientController::class, 'updatePost'])->name('posts.updatepost');
Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletepost');

// HTTP Requests and Html Form
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

// Http Session
Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.set');
Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.remove');

// Start with Database - Database Query Builder and CRUD Operation
Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getallpost');
Route::get('/add-post', [PostController::class, 'addPost'])->name('post.addpost');
Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.addsubmit');
