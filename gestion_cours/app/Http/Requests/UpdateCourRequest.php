<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourRequest extends FormRequest
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
            'libelCour' => 'required|string|max:50|unique:cours,libelCour',
            'description' => 'nullable|string',
            'professeur' => 'required|string|max:50',
            'heures' => 'required|integer',
            'credit' => 'required|integer|min:1'
        ];
    }
}
