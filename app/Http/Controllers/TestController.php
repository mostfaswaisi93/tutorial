<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function addStudent()
    {
        $students = [
            ['name' => 'Ali', 'email' => 'ali@a.com', 'phone' => '0595817016'],
            ['name' => 'Ahmad', 'email' => 'ahamd@a.com', 'phone' => '0599792378']
        ];
        Student::insert($students);
        return "Students are added";
    }

    public function addPost()
    {
        $posts = [
            ['title' => 'first post title', 'body' => 'first post description'],
            ['title' => 'second post title', 'body' => 'second post description']
        ];
        Post::insert($posts);
        return "Posts are created";
    }

    public function getStudents(){
        $students = Student::all();
        return $students;
    }

    public function getPosts(){
        $posts = Post::all();
        return $posts;
    }

}
