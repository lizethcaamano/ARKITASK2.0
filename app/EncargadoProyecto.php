<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoProyecto extends Model
{

    protected $table ="encargadoproyecto";
    protected $primaryKey = "IdEncargado";
    public $timestamps = false;

    public function EncargadoProyecto(){
        return $this->belongsTo('App\Proyecto', 'IdProyectoFK', 'IdProyecto');
    }

}
