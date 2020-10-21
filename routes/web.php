<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/youtube', [CrudController::class, 'getVideo']);
Route::get('/customers', [CustomerController::class, 'list']);
