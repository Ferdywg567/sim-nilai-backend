<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\SubjectLearningObjective;
use Illuminate\Http\Request;

class SubjectLearningObjectiveController extends BaseController
{
    function index(Subject $subject) {
        return $this->sendResponse($subject->objectives->toArray(), "List Tujuan Pembelajaran $this->found_msg");
    }
    function store(Request $request, Subject $subject) {
        $objective = $subject->objectives()->create($request->input());
        return $this->sendResponse($objective->toArray(), "Tujuan Pembelajaran $this->created_msg");
    }
    function udpate(Request $request, Subject $subject, SubjectLearningObjective $objective) {
        $objective->update($request->input());
        return $this->sendResponse($objective->toArray(), "Tujuan Pembelajaran $this->edited_msg");
    }

    function destroy(SubjectLearningObjective $objective) {
        $objective->delete();

        return $this->sendSuccess("Data Tujuan Pembelajaran $this->deleted_msg");
    }
}
