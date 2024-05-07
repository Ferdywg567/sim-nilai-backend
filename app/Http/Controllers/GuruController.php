<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends BaseController
{
    function index()
    {
        $gurus = Guru::all();

        return $this->sendResponse($gurus->toArray(), "List Guru $this->found_msg");
    }
    function show(Guru $guru)
    {
        return $this->sendResponse($guru->toArray(), "Data Guru $this->found_msg");
    }

    function getProfile()
    {
        return $this->sendResponse(Auth::user()->guruDetail->toArray(), "Data Guru $this->found_msg");
    }
}
