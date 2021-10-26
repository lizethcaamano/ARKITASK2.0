<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsistenciaRequest extends FormRequest
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
            'fechaingreso' => 'required',
            'fechasalida' => 'required|after_or_equal:fechaingreso',
            'horasalida' => 'required|after_or_equal:horaingreso',
            'horaingreso' => 'required',
            'empleado' => 'required'
            

        ];
    }

    public function messages(){
        return[

'fechaingreso.required' => 'Este Campo es requerido',
'fechasalida.required'  => 'Este campo es requerido',
'horaingreso.required' => 'Este Campo es requerido',
'horasalida.required'  => 'Este campo es requerido',
'empleado.required' => 'Este campo es requerido',
'fechasalida.after_or_equal' => 'La fechade salida no puede ser anterior a la fecha de ingreso',
'horasalida.after_or_equal' => 'La hora final no puede ser menor a la hora de inicio'

        ];
    }
}
