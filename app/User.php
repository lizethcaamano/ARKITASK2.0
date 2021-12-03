<?php

namespace App;
use App\GrupoTrabajo;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table ="usuario";
    protected $primaryKey ="IdUsuario";
    public $timestamps = false;

       // relacion de uno a muchos
public function asistencia(){

    return $this-> HasMany('App\Asistencia', 'IdUsuarioFK');
}


public function proyecto(){
return $this -> HasMany('App\Proyecto','IdUsuarioFK');
}

 public function  GrupoTrabajo(){
     return $this ->belongsToMany('App\GrupoTrabajo','SeguimientoProyecto','IdUsuarioFK','IdGrupoFK','IdUsuario','IdGrupo','IdSeguimiento');

  }

  public function  Rol(){
    return $this ->belongsToMany('App\Rol','asignarrol','IdUsuarioFK','IdRolFK');

 }

public function Actividades() {

    return $this ->hasManyThrough('App\Actividades','App\SeguimientoProyecto','IdUsuarioFK','IdSeguimientoFK','IdUsuario','IdSeguimiento');
}
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
