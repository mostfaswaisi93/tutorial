<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Insert Record Using Ajax
Route::get('/students', [StudentController::class, 'index']);
Route::post('/add-student', [StudentController::class, 'addStudent'])->name('student.add');

// Update Record Using Ajax
Route::get('/students/{id}', [StudentController::class, 'getStudentById']);
Route::put('/student', [StudentController::class, 'updateStudent'])->name('student.update');

// Delete Record Using Ajax
Route::delete('/students/{id}', [StudentController::class, 'deleteStudent']);
