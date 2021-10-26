<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table = "catalogo";
    protected $primaryKey="IdCatalogo";
    public $timestamps= false;

    public function Proyecto(){

        return $this -> HasMany('App\Proyecto','IdCatalogoFK');
    }

    public function Imagen(){

        return $this -> HasMany('App\Imagen','IdCatalogoFK');
    }

}
