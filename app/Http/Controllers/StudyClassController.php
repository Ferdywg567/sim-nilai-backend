<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\StudyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyClassController extends BaseController
{
    function index()
    {
        $classes = StudyClass::with('students')->get();
        return $this->sendResponse($classes->toArray(), "List Kelas $this->found_msg");
    }

    
}
