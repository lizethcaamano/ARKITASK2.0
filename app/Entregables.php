<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entregables extends Model
{
    protected $table = "archivosolucion";
    protected $primaryKey = "IdArchivo";
    public $timestamps = false;
}
