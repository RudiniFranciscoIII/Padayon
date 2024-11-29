<?php

namespace App\Controllers;

use App\Models\StudentsModel;

class Students extends BaseController
{
    public function add()
    {
        $data = [];

        // Check if the form is submitted
        if ($this->request->getMethod() === 'post') {
            $studentsModel = new StudentsModel();

            // Retrieve form data
            $newStudent = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'course' => $this->request->getPost('course'),
            ];

            // Insert into database
            if ($studentsModel->insert($newStudent)) {
                return redirect()->to('student')->with('success', 'Student added successfully.');
            }

            $data['error'] = 'Failed to add the student.';
        }

        return view('include\navbar', $data)
            . view('student_login_view')
            . view('include\footer');
    }
}
