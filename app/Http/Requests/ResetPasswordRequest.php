<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            "email"  => "required|email|exists:users,email",
            "password"  => "required|min:8|confirmed"
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El email es obligatorio',
            'email.email' => 'Ingrese un correo valido',
            'email.exists' => 'El correo no está registrado',
            'password.required' => 'El password es obligatorio',
            'password.min' => 'Debe tener minimo 8 caracteres',
            'password.confirmed' => 'El password no coincide'
        ];
    }
}
