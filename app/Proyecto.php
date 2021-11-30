<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table ="proyecto";
    protected $primaryKey ="IdProyecto";
    public $timestamps = false;

    public function usuarios(){
        return $this ->belongsToMany('App\User','EncargadoProyecto','IdProyectoFK','IdUsuarioFK','IdProyecto','IdUsuario','IdEncargado');
    }

    public function Actividades(){
        return $this -> hasMany('App\Actividades','IdProyectoFK');
    }

    public function TipoProyecto(){
        return $this->belongsTo('App\TipoProyecto', 'IdTipoProyectoFK', 'IdTipoProyecto');
    }

    public function grupo(){
        return $this->belongsTo('App\GrupoTrabajo', 'IdGrupoFK', 'IdGrupo');
    }

    public function catalogo(){
        return $this->belongsTo('App\Catalogo', 'IdCatalogoFK', 'IdCatalogo');
    }
}
