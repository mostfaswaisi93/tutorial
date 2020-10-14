<?php

use App\Http\Livewire\Action;
use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\Product;
use App\Http\Livewire\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Livewire Components
Route::get('/post', Post::class);
Route::get('/user', User::class);

// Livewire Route and Property Binding
Route::get('/home/{name?}', Home::class);
Route::get('/form', Form::class);

// Livewire Action
Route::get('/action', Action::class);

// Livewire Life Cycle Hook
Route::get('/product', Product::class);
