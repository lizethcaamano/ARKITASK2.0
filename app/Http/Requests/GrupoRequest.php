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
<<<<<<< HEAD
            "codigo" => 'required|max:16|min:6|unique:grupotrabajo,CodigoGrupo',
            "inicio" => 'required',
            "desactivacion" =>'required|after_or_equal:inicio',
            "codigoe" => 'required'
=======
            // "codigo" => 'required|max:16|min:6|unique:grupotrabajo,CodigoGrupo',
            "inicio" => 'required',
            "desactivacion" =>'required|after_or_equal:inicio',
            // "codigoe" => 'required'
>>>>>>> 87840d3af5e7ed022ebf21845bb5fea63d6ff7d2

            
        ];
    }

public function messages()
{
    return [
<<<<<<< HEAD
        'codigo.required' => 'El codigo del Proyecto es Obligatorio',
=======
        // 'codigo.required' => 'El codigo del Proyecto es Obligatorio',
>>>>>>> 87840d3af5e7ed022ebf21845bb5fea63d6ff7d2
        'codigo.min' => 'Minimo 6 caracteres',
        'inicio.required' => 'Este campo es requerido',
        'desactivacion.required' => 'Este campo es requerido',
        'desactivacion.after_or_equal' =>'La fecha de desactivación no puede ser anterior a la fecha de inicio',
<<<<<<< HEAD
        'codigo.unique' => 'El codigo ya existe',
        'codigoe.required' => 'Este campo es requerido'
=======
        // 'codigo.unique' => 'El codigo ya existe',
        // 'codigoe.required' => 'Este campo es requerido'
>>>>>>> 87840d3af5e7ed022ebf21845bb5fea63d6ff7d2

    ];
}


}
