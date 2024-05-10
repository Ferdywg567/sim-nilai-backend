<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class P5EvaluationController extends BaseController
{
    function storeProjectAchievements(Request $request) {
        $rules = [
            'student_ids' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return $this->sendError('Maaf, Input Tidak sesuai Ketentuan', $validator->errors()->getMessages());
        }
    }
}
