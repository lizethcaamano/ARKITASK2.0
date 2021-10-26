<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
         
                "codigo"=> 'required|exists:proyecto,CodigoProyecto|max:20',
                "nombre"=> 'required|exists:proyecto,NombreProyecto|regex:/^[a-zA-Z\s]+$/u|max:25',
                "fechae"=> 'required|after_or_equal:fechar',
                "fechar"=> 'required'
    
            
    
        ];
    }
public function messages()
{  

return [ 'codigo.required' => 'El codigo del proyecto  es Obligatorio',
'codigo.exists' => 'El codigo ya existe',
'nombre.required' => 'El nombre del proyecto es obligatorio',
'fechae.required' => 'La fecha de entrega es obligatoria',
'fechae.after_or_equal' =>'La fecha de entrega no puede ser anterior a la fecha de realización',
'fechar.required' => 'La fecha de Realizacion es obligatoria',
'nombre.regex' => 'Solo se permiten letras' ];
}
}
