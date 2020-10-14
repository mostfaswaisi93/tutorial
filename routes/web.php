<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Accessors And Mutators
Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::get('/students', [StudentController::class, 'getStudents']);
