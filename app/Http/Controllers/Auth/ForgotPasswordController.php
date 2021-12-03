<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfirmarCorreoRequest;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Http\Request;
//Paquetes utilitarios para la caracteristica
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
//correo personalizado
use App\Mail\ResetPasswordMail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    /**
     * Mostrar el formulario de envio por correo del link de seguridad
     * method : GET
    */



    public function emailform(){
        return view('auth.email');
    }

    /**
     * Enviar el link de seguridad al correo anterior
     * method: POST
     */
    public function submitlink(ConfirmarCorreoRequest $r){

        //1. Generar código aleatorio

        $token = Str::random(64);
        //var_dump($token);
        //2. Resgitrar en la tabla password_resets. Una entrada con el email, código y fecha
        DB::table('password_resets')->insert(
            [
                "email"=> $r->input("email"),
                "token"=> $token,
                "created_at"=>Carbon::now()
            ]
        );
        //3. Enviar al email al destino
        Mail::to($r->input("email"))->send(new ResetPasswordMail($token));
        return redirect('recuperar-password')->with('mirar_correo', 'El correo ha sido enviado, revisa tu bandeja de entrada');
    }

    /**
     * Mostrar formulario de reseteo de password
     * method GET
     */

     public function resetform($token){
        //var_dump($token);
        return view('auth.reset')
        ->with('token', $token);
     }

     /**
      * Resetea password (modifica/update)
      *method POST
      */
      public function resetpassword(ResetPasswordRequest $r){
        //1. Obtener el registro correspondiente al token e email ingresados en la tabla password_resets: where
        $pass_reset = DB::table('password_resets')->
                        where([
                            'email' => $r->input('email') ,
                            'token' => $r->input('token')
                        ])->first();
                    if( $pass_reset == null){
                        die("token invalido");
                    }
        //2. De estar el registar, proceder a la actualización del password al usuario correspondiente
        $user = User::where('email', $r->input('email'))->first();
        $user->password = Hash::make($r->input('password'));
        $user->save();

        echo "Se ha actualizado su password exitosamente";
        //3. Eliminar el registro del token utilizado en la tabla password_resets

      }

    use SendsPasswordResetEmails;
}
