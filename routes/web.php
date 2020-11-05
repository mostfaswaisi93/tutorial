<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce.index');
Route::any('/ecommerce/list', [EcommerceController::class, 'index_list'])->name('ecommerce.index_list');
Route::get('/ecommerce/create', [EcommerceController::class, 'create'])->name('ecommerce.create');
Route::post('/ecommerce/create', [EcommerceController::class, 'store'])->name('ecommerce.store');
Route::get('/ecommerce/{id}/edit', [EcommerceController::class, 'edit'])->name('ecommerce.edit');
Route::patch('/ecommerce/{id}/edit', [EcommerceController::class, 'update'])->name('ecommerce.update');
Route::delete('/ecommerce/{id}', [EcommerceController::class, 'destroy'])->name('ecommerce.destroy');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
