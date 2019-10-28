<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';
    protected $primaryKey = 'id_cata';
    protected $fillable = ['name_cata'];

    public function product_catalog(){
        return $this->hasMany('App\Models\Product', 'id_cata', 'id_cata');
    }
}