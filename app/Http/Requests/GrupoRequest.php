<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Kernel;

class GrupoRequest extends FormRequest
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
            "codigo" => 'required|max:15|min:6',
            "inicio" => 'required',
            "desactivacion" =>'required|after_or_equal:inicio',
            
        ];
    }

public function messages()
{
    return [
        'codigo.required' => 'El codigo del Proyecto es Obligatorio',
        'codigo.min' => 'Solo se aceptan minimo 6 caracteres',
        'inicio.required' => 'Este campo es requerido',
        'desactivacion.required' => 'Este campo es requerido',
        'desactivacion.after_or_equal' =>'La fecha de desactivación no puede ser anterior a la fecha de inicio'

    ];
}


}
