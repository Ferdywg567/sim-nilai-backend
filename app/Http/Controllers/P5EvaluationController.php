<?php

namespace App\Http\Controllers;

use App\Models\P5PredicateOption;
use App\Models\P5ProjectAchievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class P5EvaluationController extends BaseController
{
    function storeGrades()
    {
        header('Access-Control-Allow-Origin: *');
        header('access-control-allow-credentials: true');
        header('Access-Control-Allow-Headers: *');
        header('Access-Control-Allow-Methods: *');
        // dd('tset');
        echo 'test'; die;
        // dd($request);
        // $rules = [
        //     'form'              => ['required', 'array'],
        //     'form.project_id'   => ['required', 'exists:p5_projects,id'],
        //     'form.student_id'   => ['required', 'exists:students,id'],
        //     'form.predicate_id' => ['required', 'exists:p5_predicate_options,id'],
        //     'form.note'         => ['required', 'string'],
        // ];

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return $this->sendError('Maaf, Input Tidak sesuai Ketentuan', $validator->errors()->getMessages());
        // }

        $form = $request->form;

        foreach ($form as $grade) {
            P5ProjectAchievement::updateOrCreate([
                'student_id'    => $form->student_id,
                'p5_project_id' => $form->project_id,
            ], $grade);
        }
    }

    function getPredicateOptions()
    {
        $options = P5PredicateOption::all();

        return $this->sendResponse($options->toArray(), "List Opsi Predikat $this->found_msg");
    }
}
