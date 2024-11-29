<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function index()
    {
        // Correctly referencing the view inside the "student" folder
        return view('student/student_view');
    }
}
