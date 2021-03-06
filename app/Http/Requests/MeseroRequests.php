<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeseroRequests extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'telefono' => 'required|numeric',
            'correo' => 'required|email',
            'direccion' => 'required'
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
