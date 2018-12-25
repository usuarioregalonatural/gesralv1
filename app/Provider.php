<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable =['cod_proveedor','nombre','direccion', 'telefono','email','web'];

}
