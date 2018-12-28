<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcatProduct extends Model
{
    protected $fillable=['cod_subcategoria','categoria_id','des_subcategoria'];
    public function scopeName($query, $des_subcategoria){
        if($des_subcategoria)
            return $query->orWhere('des_subcategoria', 'LIKE',"%$des_subcategoria%");
    }


    //
}
