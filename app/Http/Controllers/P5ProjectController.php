<?php

namespace App\Http\Controllers;

use App\Http\Requests\P5ProjectRequest;
use App\Models\P5Dimension;
use App\Models\P5DimensionSubElement;
use App\Models\P5DimensionSubElementPhase;
use App\Models\P5Project;

class P5ProjectController extends BaseController
{
    function index()
    {
        $projects = P5Project::with('theme', 'phases.subElement.element.dimension')->get();

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

    function addTargetsFromSubelement(P5Project $p5_project, P5DimensionSubElement $subelement)
    {
        $phases = $subelement->phases;
        $p5_project = $p5_project->load('phases');

        foreach ($phases as $phase) {
            if (!$p5_project->phases->contains($phase)) {
                $p5_project->phases()->attach($phase);
            }
        }

        return $this->sendResponse($p5_project->load('phases')->toArray(), "List Target Capaian Profil $this->added_msg");
    }

    function deletetarget(P5Project $p5_project, P5DimensionSubElementPhase $phase)
    {
        $p5_project->phases()->detach($phase);

        return $this->sendResponse($p5_project->load('phases')->toArray(), "Target Capaian Profil $this->deleted_msg");
    }
    function deleteTargetsBySubelement(P5Project $p5_project, P5DimensionSubElement $subelement)
    {
        $phases = $subelement->phases;
        $p5_project->phases()->detach($phases);

        return $this->sendResponse($p5_project->load('phases')->toArray(), "List Target Capaian Profil $this->deleted_msg");
    }
}
