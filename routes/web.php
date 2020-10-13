<?php

use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Eloquent Relationship - One to One
Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/get-phone/{id}', [UserController::class, 'fetchPhoneByUser']);

// Eloquent Relationship - One to Many
Route::get('/add-post', [PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [PostController::class, 'addComment']);
Route::get('/get-comments/{id}', [PostController::class, 'getCommentsByPost']);

// Eloquent Relationship - Many to Many
Route::get('/add-roles', [RoleController::class, 'addRole']);
Route::get('/add-users', [RoleController::class, 'addUser']);
Route::get('/get-roles/{id}', [RoleController::class, 'getRolesByUser']);
Route::get('/get-users/{id}', [RoleController::class, 'getUsersByRole']);

// Export Data in Excel and CSV
Route::get('/add-employees', [EmployeeController::class, 'addEmployee']);
Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);
Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV']);

// Export Data in PDF
Route::get('/get-all-employees', [EmpController::class, 'getAllEmployees']);
Route::get('/download-pdf', [EmpController::class, 'downloadPDF']);
