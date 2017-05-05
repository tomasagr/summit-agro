<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        return  [
          "first_name" => 'required',
          "last_name" => 'required',
          "dni" => 'required',
          "cuit" => 'required',
          "phone" => 'required',
          "agronomy" => 'required',
          "agronomy_type" => 'required',
        ];
    }

    public function messages()
    {
        return [
          "first_name.required" => 'El campo nombre es requerido',
          "last_name.required" => 'El campo apellido es requerido',
          "dni.required" => 'El campo dni es requerido',
          "cuit.required" => 'El campo cuit es requerido',
          "phone.required" => 'El campo telefono es requerido',
          "address.required" => 'El campo dirección es requerido',
          "email.required" => 'El campo email es requerido',
          "password.required" => 'El campo contraseña es requerido',
          "agronomy.required" => 'El campo agronomia es requerido',
          "agronomy_type.required" => 'El campo tipo es requerido',
        ];
    }
}
