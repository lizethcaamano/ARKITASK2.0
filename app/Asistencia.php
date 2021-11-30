<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{

    protected $table = "asistencia";
    protected $primaryKey="IdAsistencia";
    public $timestamps= false;
    public function usuarios(){
        return $this->belongsTo('App\User', 'IdUsuarioFK', 'IdUsuario');
    }

}