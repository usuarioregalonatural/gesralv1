<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatProduct extends Model
{
    protected $fillable =['cod_categoria','des_categoria'];

    public function scopeName($query, $des_categoria){
        if($des_categoria)
            return $query->orWhere('des_categoria', 'LIKE',"%$des_categoria%");
    }

}
