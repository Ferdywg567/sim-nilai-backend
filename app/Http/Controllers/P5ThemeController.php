<?php

namespace App\Http\Controllers;

use App\Models\P5Theme;
use Illuminate\Http\Request;

class P5ThemeController extends BaseController
{
    function index()
    {
        $themes = P5Theme::all();
        return $this->sendResponse($themes->toArray(), "List Tema P5 $this->found_msg");
    }
}
