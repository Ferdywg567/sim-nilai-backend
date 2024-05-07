<?php

namespace App\Http\Requests;

use App\Models\P5Project;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class P5ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules =  [
            'name'        => ['required', 'string'],
            'code'        => ['required', 'string'],
            'phase'       => ['required', 'string'],
            'description' => ['required', 'string'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $project_id = $this->route()->parameter('p5_project_id');

            $project = P5Project::find($project_id);

            $rules['name'][] = Rule::unique('p5_projects')->ignore($project);
            $rules['code'][] = Rule::unique('p5_projects')->ignore($project);
        }

        return $rules;

    }
}
