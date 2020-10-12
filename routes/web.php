<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Eloquent - CRUD Operation
Route::get('/students', [StudentController::class, 'fetchStudents']);

Route::get('/add-post', [PostController::class, 'addPost'])->name('post.addpost');
Route::post('/create-post', [PostController::class, 'createPost'])->name('post.create');
Route::get('/posts', [PostController::class, 'getPosts'])->name('post.getposts');
Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.getbyid');
Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('post.delete');
Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');
Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');
