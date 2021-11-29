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
            // "codigo" => 'required|max:16|min:6|unique:grupotrabajo,CodigoGrupo',
            "inicio" => 'required',
            "desactivacion" =>'required|after_or_equal:inicio',
            // "codigoe" => 'required'

            
        ];
    }

public function messages()
{
    return [
        // 'codigo.required' => 'El codigo del Proyecto es Obligatorio',
        'codigo.min' => 'Minimo 6 caracteres',
        'inicio.required' => 'Este campo es requerido',
        'desactivacion.required' => 'Este campo es requerido',
        'desactivacion.after_or_equal' =>'La fecha de desactivación no puede ser anterior a la fecha de inicio',
        // 'codigo.unique' => 'El codigo ya existe',
        // 'codigoe.required' => 'Este campo es requerido'

    ];
}


}
