<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student\Student as Model;

class Student extends Controller
{
    public function index()
    {
        $students = Model::Paginate(10);

        return view('admin.student.index', compact('students'));
    }

    public function create()
    {

    }
}
