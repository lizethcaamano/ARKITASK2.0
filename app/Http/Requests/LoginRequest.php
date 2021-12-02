<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

                "email" => 'required|exists:Usuario,email|email',
                "password"=>'required|min:6'
        ];
    }
public function messages()
{

return [ 'NumeroDocumento.required' => 'Este campo es obligatorio',
'password.required' => 'La contraseña es obligatoria',
'email.required' => 'El correo es obligatorio',
'email.exists' => 'El correo no está registrado',
'email.email' => 'Ingrese un correo valido'
];
}
}
