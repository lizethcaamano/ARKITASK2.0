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
         
               
                "nombre"=> 'required|regex:/^[a-zA-Z\s]+$/u|max:30',
                "fechae"=> 'required|after_or_equal:fechar',
                "fechar"=> 'required',
                // "tipopro"=> 'required',
                // "grupo" => 'required',
                // "catalogo" => 'required'

    
            
    
        ];
    }
public function messages()
{  

return [ 
'nombre.required' => 'El nombre del proyecto es obligatorio',
'fechae.required' => 'La fecha de entrega es obligatoria',
'fechae.after_or_equal' =>'La fecha de entrega no puede ser anterior a la fecha de realización',
'fechar.required' => 'La fecha de Realizacion es obligatoria',
'nombre.regex' => 'Solo se permiten letras',
// 'tipopro.required' => 'El tipo de proyecto es obligatorio',
// 'grupo.required' => 'El grupo es obligatorio',
// 'catalogo.required' => 'El catalogo es obligatorio'
 ];
}
}
