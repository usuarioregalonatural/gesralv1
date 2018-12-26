<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =['cod_cliente','nombre','direccion', 'telefono','email','poblacion','cod_postal', 'provincia','pais'];

}
