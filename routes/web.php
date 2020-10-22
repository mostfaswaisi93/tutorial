<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/youtube', [CrudController::class, 'getVideo']);
Route::get('/customers', [CustomerController::class, 'list']);

// Questionnaire Survey App
Route::get('/questionnaires/create', [QuestionnaireController::class, 'create']);
Route::post('/questionnaires', [QuestionnaireController::class, 'store']);
Route::get('/questionnaires/{questionnaire}', [QuestionnaireController::class, 'show']);

Route::get('/questionnaires/{questionnaire}/questions/create', [QuestionController::class, 'create']);
Route::post('/questionnaires/{questionnaire}/questions', [QuestionController::class, 'store']);
Route::delete('/questionnaires/{questionnaire}/questions/{question}', [QuestionController::class, 'destroy']);

Route::get('/surveys/{questionnaire}-{slug}', [SurveyController::class, 'show']);
Route::post('/surveys/{questionnaire}-{slug}', [SurveyController::class, 'store']);
