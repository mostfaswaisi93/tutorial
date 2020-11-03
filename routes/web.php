<?php

use App\Http\Livewire\Students;
use App\Http\Livewire\Uploads;
use App\Http\Livewire\User;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Livewire With Database
Route::get('/user', User::class);

// Livewire Pagination
Route::get('/users', Users::class);

// Livewire CRUD
Route::get('/students', Students::class);

// Livewire File Upload 
Route::get('/uploads', Uploads::class);
