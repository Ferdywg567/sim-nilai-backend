<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\P5Dimension;
use App\Models\P5DimensionElement;
use App\Models\P5DimensionSubElement;
use App\Models\P5DimensionSubElementPhase;
use App\Models\P5Group;
use App\Models\P5Project;
use App\Models\Teaching;
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

    function getTaughtClasses()
    {
        $teachings = Teaching::with('studyClass.students', 'subject', 'guru')->where('guru_id', Auth::user()->guruDetail->id)->get();

        return $this->sendResponse($teachings->toArray(), "List Ajaran $this->found_msg");
    }

    function getP5Groups()
    {
        $groups = P5Group::with(['latestProject', 'students'])->where('guru_id', Auth::user()->guruDetail->id)->get();

        $groups_arr = [];

        foreach ($groups as $group) {
            $project    = $group->latestProject[0]->load('phases');
            $phase_ids  = $project->phases->pluck('id')->toArray();
            $dimensions = P5Dimension::with('elements.subs')->whereHas('elements.subs.phases', function ($q) use ($phase_ids) {
                $q->whereIn('p5_dimension_sub_element_phases.id', $phase_ids);
            })->get();

            $group_temp = $group->toArray();

            $group_temp['dimensions'] = $dimensions;

            $groups_arr[] = $group_temp;
            // $group->put('dimensions', $dimensions);
        }

        return $this->sendResponse($groups_arr, "List Kelompok P5 $this->found_msg");
    }
}
