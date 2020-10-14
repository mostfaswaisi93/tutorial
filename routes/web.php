<?php

use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Livewire Components
Route::get('/post', Post::class);
Route::get('/user', User::class);
