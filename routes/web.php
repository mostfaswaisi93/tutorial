<?php

use App\Http\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Livewire With Database
Route::get('/user', User::class);
