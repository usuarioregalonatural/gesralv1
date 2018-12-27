<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable =['cod_proveedor','nombre','direccion', 'telefono','email','web'];

    public function scopeName($query, $nombre){
        if($nombre)
            return $query->orWhere('nombre', 'LIKE',"%$nombre%");
    }

}
