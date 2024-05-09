<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class P5GroupRequest extends FormRequest
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
        $rules = [
            'name'    => ['required', 'string'],
            'grade'   => ['required', 'string'],
            'phase'   => ['required', 'string'],
            'guru_id' => ['required', 'exists:gurus,id'],
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $project = $this->route('p5_group');

            $rules['name'][] = Rule::unique('p5_groups')->ignore($project);
        }

        return $rules;
    }
}
