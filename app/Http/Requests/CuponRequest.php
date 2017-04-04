<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => 'required',
            'points' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'code.required' => 'El campo codigo es requerido',
            'points.required' => 'El campo puntos es requerido'
        ];
    }
}
