<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmarCorreoRequest extends FormRequest
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
            "email" => "required|email|exists:Users,email"
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Este campo es obligatorio',
            'email.email' => 'Ingrese un correo valido',
            'email.exists' => 'El correo no esta registrado'
        ];
    }
}
