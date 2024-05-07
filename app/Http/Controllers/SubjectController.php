<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends BaseController
{
    function index()
    {
        $subjects = Subject::with('competencies')->get();
        return $this->sendResponse($subjects->toArray(), "List Mata Pelajaran $this->found_msg");
    }
}
