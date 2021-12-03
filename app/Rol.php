<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table ="Rol";
    protected $primaryKey ="IdRol";
    public $timestamps = false;

    public function usuarios(){
        return $this ->belongsToMany('App\User','AsignarRol','IdRolFK','IdUsuarioFK');
    }
}
