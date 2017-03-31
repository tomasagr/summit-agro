<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AwardsRequest extends FormRequest
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
            'points' => 'required|integer',
            'name' => 'required',
            'stock' => 'required|integer',
            'image' => 'image'
        ];
    }

    public function messages()
    {
        return [
            'points.required' => 'El campo puntos es requerido',
            'points.integer' => 'El campo debe ser numerico',
            'name.required' => 'El campo nombre es requerido',
            'stock.required' => 'El campo stock es requerido',
            'stock.integer' => 'El campo stock debe ser numerico',
            'image.image' => 'El campo foto debe ser una imagen'
        ];
    }
}
