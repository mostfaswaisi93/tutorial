<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function editor()
    {
        return View('editor');
    }
}
