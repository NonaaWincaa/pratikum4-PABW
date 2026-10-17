<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'wincarlin',
                'major' => 'sikc',
                'age' => 19,
                'courses' => ['worship leader', 'dance', 'gitaris'],
            ],
            [
                'name' => 'aldo',
                'major' => 'IF',
                'age' => 21,
                'courses' => ['polisi', 'bassis', 'singer'],
            ],
        ];

        return view('students.index', compact('students'));
    }
}