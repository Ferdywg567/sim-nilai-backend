<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class P5EvaluationController extends BaseController
{
    function storeGrades(Request $request) {
        $rules = [
            'user_id'       => ['required', 'exists:users,id'],
            'subelement_id' => ['required', 'exists:p5_dimension_sub_elements,id'],
            'student_ids'   => ['required', 'array', 'min:1'],
            'predicates'    => ['required', 'array', 'min:1'],
            'student_ids.*' => ['required', 'string'],
            'predicates.*'  => ['required', 'string'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return $this->sendError('Maaf, Input Tidak sesuai Ketentuan', $validator->errors()->getMessages());
        }
    }


}
