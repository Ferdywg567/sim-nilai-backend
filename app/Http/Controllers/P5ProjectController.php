<?php

namespace App\Http\Controllers;

use App\Http\Requests\P5ProjectRequest;
use App\Models\P5Dimension;
use App\Models\P5Project;

class P5ProjectController extends BaseController
{
    function index()
    {
        $projects = P5Project::all();

        return $this->sendResponse($projects->toArray(), "List Proyek P5 $this->found_msg");
    }

    function store(P5ProjectRequest $request)
    {
        $p5_project = P5Project::create($request->all());

        return $this->sendResponse($p5_project->toArray(), "Data Proyek P5 $this->created_msg");
    }
    function show(P5Project $p5_project)
    {
        return $this->sendResponse($p5_project->toArray(), "Data Proyek P5 $this->found_msg");
    }
    function update(P5ProjectRequest $request, P5Project $p5_project)
    {
        $p5_project->update($request->all());

        return $this->sendResponse($p5_project->toArray(), "Data Proyek P5 $this->edited_msg");
    }

    function destroy(P5Project $p5_project)
    {
        $p5_project->delete();

        return $this->sendSuccess("Data Proyek P5 $this->deleted_msg");
    }

    function getProfileAchievementsOptions($phase) {
        $dimensions = P5Dimension::with('elements.subs.phases')->get();

        return $this->sendResponse($dimensions->toArray(), "List Capaian Profil Proyek P5 $this->found_msg");
    }
}
