<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $fillable = [ 'nombre','monto','fecha','descripcion' ];
}
