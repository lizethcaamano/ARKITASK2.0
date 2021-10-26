<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table ="Imagen";
    protected $primaryKey ="IdImagen";
    public $timestamps = false;
}
