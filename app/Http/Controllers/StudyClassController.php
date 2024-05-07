<?php

namespace App\Http\Controllers;

use App\Models\StudyClass;
use Illuminate\Http\Request;

class StudyClassController extends BaseController
{
    function index()
    {
        $classes = StudyClass::with('students')->get();
        return $this->sendResponse($classes->toArray(), "List Kelas $this->found_msg");
    }
}
