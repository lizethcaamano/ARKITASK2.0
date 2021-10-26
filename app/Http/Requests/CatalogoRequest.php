<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogoRequest extends FormRequest
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
            "participantes"=> 'required|regex:/^[a-zA-Z\s]+$/u|min:10|max:100',
            "empresa"=> 'required|regex:/^[a-zA-Z\s]+$/u|min:6',
            "area"=> 'required|min:4'
        ];
    }

    public function messages(){
        return[
            'participantes.required'=>'Este campo es obligatorio',
            'participantes.regex' => 'Solo se permiten letras',
        'participantes.min' => 'Minimo se permiten 10 caracteres',
        'empresa.required' => 'Este campo es obligatorio',
        'empresa.regex' => 'Solo se permiten letras',
        'empresa.min' => 'Minimo se permiten 6 caracteres',
        'area.required' => 'Este campo es obligatorio',
        'area.min'=>'Minimo se permiten 4 caracteres'
        ];
        
    }
}
