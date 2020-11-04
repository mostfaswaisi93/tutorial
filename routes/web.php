<?php

use App\Http\Controllers\PlacesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Related Fields 
Route::get('/places', [PlacesController::class, 'index'])->name('places_index');
Route::post('/places/create', [PlacesController::class, 'store'])->name('form_store');

Route::get('/get_cities', [PlacesController::class, 'get_cities'])->name('get_cities');
Route::get('/get_districts', [PlacesController::class, 'get_districts'])->name('get_districts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
