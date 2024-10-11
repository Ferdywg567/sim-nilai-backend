<?php

namespace App\Http\Controllers;

use App\Models\P5Dimension;
use App\Models\P5DimensionSubElement;
use App\Models\P5DimensionSubElementPhase;
use Illuminate\Http\Request;

class P5DimensionController extends BaseController
{
    function getDimensions()
    {

        $dimensions = P5Dimension::with('elements.subs.phases')->get();

        return $this->sendResponse($dimensions->toArray(), "List Dimensi P5 $this->found_msg");
    }

    function getPhases(Request $request)
    {
        $phases = P5DimensionSubElementPhase::with('subElement.element.dimension');
        // ->where('phase', $request->phase)

        if ($request->notIn) {
            $phases->whereNotIn('id', $request->notIn);
        }

        if ($request->dimension_id) {
            $phases->whereHas('subElement.element', function ($q) use ($request) {
                $q->where('dimension_id', $request->dimension_id);
            });
        }

        return $this->sendResponse($phases->get()->toArray(), "List Target Capaian Profil $this->found_msg");
    }

    function getSubElements(Request $request)
    {
        $phases = P5DimensionSubElement::with('element.dimension');

        if ($request->notIn) {
            $phases->whereNotIn('id', $request->notIn);
        }

        return $this->sendResponse($phases->get()->toArray(), "List Sub Element P5 $this->found_msg");
    }
}
