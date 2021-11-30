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
         
<<<<<<< HEAD
                // "email"=> 'required|email',
                "password"=>'required|min:8'    
=======
                
                "password"=>'required|min:6'    
>>>>>>> 87840d3af5e7ed022ebf21845bb5fea63d6ff7d2
        ];
    }
public function messages()
{  

return [ 'NumeroDocumento.required' => 'Este campo es obligatorio',
'password.required' => 'Este campo es obligatorio',
'NumeroDocumento.numeric' => 'Solo se aceptan numeros'];
}
}