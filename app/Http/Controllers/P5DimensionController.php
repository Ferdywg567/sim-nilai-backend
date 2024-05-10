<?php

namespace App\Http\Controllers;

use App\Models\P5Dimension;

class P5DimensionController extends BaseController
{
    function getDimensions()
    {

        $dimensions = P5Dimension::with('elements.subs.phases')->get();

        return $this->sendResponse($dimensions->toArray(), "List Dimensi P5 $this->found_msg");
    }
}
