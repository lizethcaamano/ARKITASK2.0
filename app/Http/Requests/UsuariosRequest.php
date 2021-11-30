<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'nombre' => 'required|regex:/^[a-zA-Z\s]+$/u|min:3|max:20',
            'apellido' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'correo' => 'required|unique:usuario,email|email|min:12|max:40',
            'numerodocumento' => 'required|unique:usuario,NumeroDocumento|numeric|min:10',
            'fechanacimiento' => 'required',
            'imagen' => 'required',
            'telefono' => 'required|min:10|unique:usuario,Telefono|regex:/^[0-9a]+$/u'


            // 'enombre' => 'required|regex:/^[a-zA-Z\s]+$/u|min:3|max:20',
            // 'eapellido' => 'required|regex:/^[a-zA-Z\s]+$/u|min:3|max:20',
            // 'ecorreo' => 'required|email|min:12|max:40',
            // 'enumerodocumento' => 'required|numeric|min:10',
            // 'efechanacimiento' => 'required',
            // 'eimagen' => 'required',
            // 'etelefono' => 'min:10|required|regex:/^[0-9a]+$/u',
        
        
        ];
    }
        public function messages(){
            return
            [
                'nombre.required' => 'Este campo es obligatorio',
                'nombre.regex' => 'Solo se permiten letras',
                'nombre.min' => 'Minimo 3 caracteres',

                'apellido.min' => 'Minimo 3 caracteres',
                'apellido.regex' => 'Solo se permiten letras',
                'apellido.required' => 'Este campo es obligatorio',

                'correo.min' => 'Solo se permiten minimo 12 caracteres',
                'correo.required' => 'Este campo es obligatorio',
                'correo.email' => 'Por favor ingrese una dirección de correo @ valido',
                'correo.unique' => 'Este correo ya existe',

                'numerodocumento.unique' => 'Este número de documento ya existe',
                'numerodocumento.required' => 'Este campo es obligatorio',
                'numerodocumento.numeric' => 'Solo se permiten números',
                'numerodocumento.min' => 'Minimo 10 caracteres',

                'fechanacimiento.required' => 'Este campo es obligatorio',
                

                'imagen.required' => 'Este campo es obligatorio',

                
               
                'telefono.required' => 'Este campo es obligatorio',
                'telefono.unique' => 'Este telefono ya existe',
                'telefono.regex' => 'Solo se permiten numeros',
               'telefono.min' => 'Minimo 10 caracteres'


            //    'enombre.required' => 'Este campo es obligatorio',
            //    'enombre.regex' => 'Solo se permiten letras',
            //    'enombre.min' => 'Minimo 3 caracteres',

            //    'eapellido.min' => 'Minimo 3 caracteres',
            //    'eapellido.regex' => 'Solo se permiten letras',
            //    'eapellido.required' => 'Este campo es obligatorio',

            //    'ecorreo.min' => 'Solo se permiten minimo 12 caracteres',
            //    'ecorreo.required' => 'Este campo es obligatorio',
            //    'ecorreo.email' => 'Por favor ingrese una dirección de correo @ valido',
            //    'ecorreo.unique' => 'Este correo ya existe',

            //    'enumerodocumento.unique' => 'Este número de documento ya existe',
            //    'enumerodocumento.required' => 'Este campo es obligatorio',
            //    'enumerodocumento.numeric' => 'Solo se permiten números',
            //    'enumerodocumento.min' => 'Minimo 10 caracteres',

            //    'efechanacimiento.required' => 'Este campo es obligatorio',
           

            //    'eimagen.required' => 'Este campo es obligatorio',

               
              
            //    'etelefono.required' => 'Este campo es obligatorio',
            //    'etelefono.unique' => 'Este telefono ya existe',
            //    'etelefono.regex' => 'Solo se permiten numeros',
            //   'etelefono.min' => 'Minimo 10 caracteres',
            ];

        
    }
}
