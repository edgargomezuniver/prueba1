<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
  protected $fillable = [ 'nombre','descripcion','fecha','monto' ];
}
