<?php

namespace App\Http\Controllers;

use App\Models\P5Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    function index()
    {
        $students = Student::with('studyClass')->get();

        return $this->sendResponse($students->toArray(), "List Siswa $this->found_msg");
    }
}
