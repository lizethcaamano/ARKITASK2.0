<?php

namespace App\Http\Requests;
use Carbon\Carbon;

use Illuminate\Foundation\Http\FormRequest;

class encargadoProyectoRequest extends FormRequest
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
            "fechaInicio" => 'required|after_or_equal:g',
            "fechaFinal" => 'required|after_or_equal:fechaInicio',
            "observaciones" => 'required|max:20|min:10'
        ];
    }

    public function messages(){
        return[
        'fechaInicio.required' => 'La fecha de inicio es obligatoria',
        'fechaFinal.required' => 'La fecha final es obligatoria',
        'fechaFinal.after_or_equal' => 'La fecha final no puede ser anterior a la fecha de inicio',
        'observaciones.required' => 'Las observaciones son obligatorias'
        ];
    }
}
