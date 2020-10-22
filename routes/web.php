<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionnaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/youtube', [CrudController::class, 'getVideo']);
Route::get('/customers', [CustomerController::class, 'list']);

// Questionnaire Survey App
Route::get('/questionnaire', [QuestionnaireController::class, 'index']);

Route::get('/questionnaires/create', [QuestionnaireController::class, 'create']);
Route::post('/questionnaires', [QuestionnaireController::class, 'store']);
Route::get('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'show']);