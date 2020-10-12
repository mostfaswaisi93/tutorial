<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
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
Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.updatesubmit');
Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');

// Join Clauses
Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('post.innerjoin');
Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('post.leftjoin');
Route::get('/right-join', [PostController::class, 'rightJoinClause'])->name('post.rightjoin');

// Blade Template Layout
Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// File Upload
Route::get('/upload', [UploadController::class, 'uploadForm']);
Route::post('/upload', [UploadController::class, 'uploadFile'])->name('upload.uploadfile');
