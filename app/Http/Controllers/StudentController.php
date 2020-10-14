<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
        $student = new Student();
        $student->name = 'Mustapha Al-Swaisi';
        $student->email = 'MOSTFASWAISI93@gmail.com';
        $student->phone = '0595817016';
        $student->save();
        return "Record Inserted!";
    }

    public function getStudents()
    {
        return Student::all();
    }
}
