<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ZipController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TinyMCE WYSIWYG HTML Editor
Route::get('/editor', [EditorController::class, 'editor']);

// Image CRUD
Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::post('/add-student', [StudentController::class, 'storeStudent'])->name('student.store');
Route::get('/all-students', [StudentController::class, 'students']);
Route::get('/edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('/update-student', [StudentController::class, 'updateStudent'])->name('student.update');
Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);

// Contact Form
Route::get('/contact-us', [ContactController::class, 'contact']);
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

// Helpers
Route::get('/get-name', [TestController::class, 'getFirstLastName']);

// Autocomplete Search
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/autocomplete', [ProductController::class, 'autocomplete'])->name('autocomplete');

// Create Zip File and Download
Route::get('/zip', [ZipController::class, 'zipFile']);

// Yajra DataTables
Route::get('/employee', [EmployeeController::class, 'index']);
