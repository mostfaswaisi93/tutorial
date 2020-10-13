<?php

use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// TinyMCE WYSIWYG HTML Editor
Route::get('/editor', [EditorController::class, 'editor']);
