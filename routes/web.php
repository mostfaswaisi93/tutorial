<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Eloquent Relationship - One to One
Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

// Eloquent Relationship - One to Many
Route::get('/add-post', [PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [PostController::class, 'addComment']);
Route::get('/get-comments/{id}', [PostController::class, 'getCommentsByPost']);

// Eloquent Relationship - Many to Many
Route::get('/add-roles', [RoleController::class, 'addRole']);
Route::get('/add-users', [RoleController::class, 'addUser']);
Route::get('/get-roles/{id}', [RoleController::class, 'getRolesByUser']);
Route::get('/get-users/{id}', [RoleController::class, 'getUsersByRole']);

