<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
