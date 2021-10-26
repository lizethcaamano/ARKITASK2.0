<?php

namespace App;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    protected $table ="TipoProyecto";
    protected $primaryKey ="IdTipoProyecto";
    public $timestamps = false;

    public function Proyecto(){

        return $this -> hasmany('App\Proyecto','IdTipoProyectoFk');
    }

}
