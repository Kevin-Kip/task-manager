<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFormRequest extends FormRequest
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
        return [
            'project' => 'required|numeric',
            'name' => 'required|max:100',
            'description' => 'nullable|max:1000'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'project.required' => 'Please select a project',
            'name.required' => 'Please provide a name',
            'name.max' => 'Name cannot exceed 100 characters',
            'description.max' => 'Description cannot exceed 1000 characters',
        ];
    }
}
