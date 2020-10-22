<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PayOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/youtube', [CrudController::class, 'getVideo']);
Route::get('/customers', [CustomerController::class, 'list']);

// Service Container
Route::get('/pay', [PayOrderController::class, 'store']);
