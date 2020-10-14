<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
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

// Delete Multiple Record Using Checkbox
Route::delete('/selected-students', [StudentController::class, 'deleteCheckedStudents'])->name('student.deleteSelected');

// Client Side Form Validation
Route::get('/register', [AuthController::class, 'index']);
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('auth.registersubmit');

// Infinite Scroll Pagination
Route::get('/posts', [PostController::class, 'index']);

// HighCharts
Route::get('/chart', [ChartController::class, 'index']);

// Bar Charts
Route::get('/bar-chart', [ChartController::class, 'barChart']);

// Multiple Database Connection
Route::get('/add-student', [TestController::class, 'addStudent']);
Route::get('/add-post', [TestController::class, 'addPost']);
Route::get('/students', [TestController::class, 'getStudents']);
Route::get('/posts', [TestController::class, 'getPosts']);

// Multi Step Form
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'formSubmit'])->name('form.formsubmit');
