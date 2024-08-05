<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtudiantRequest extends FormRequest
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
            'nomEtu' => 'required|string|max:50',
            'prenomEtu' => 'required|string|max:50',
            'dateNaiss' => 'required|date',
            'sexe' => 'required|string|max:20',
            'email' => 'required|string|max:100',
            'localite' => 'nullable|string|max:50',
            'tel' => 'required|string|max:25'
        ];
    }
}
