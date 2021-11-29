<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GrupoTrabajo extends Model
{
    protected $table ="grupotrabajo";
    protected $primaryKey ="IdGrupo";
    public $timestamps = false;

public function Proyecto(){
    return $this -> HasMany('App\Proyecto','IdGrupoFK');
}



 public function Actividades(){
     return $this -> belongsToMany('App\Actividades','SeguimientoProyecto','IdGrupoFK','IdActividadesFK','IdGrupo','IdActividad','IdSeguimiento');
 }

}
