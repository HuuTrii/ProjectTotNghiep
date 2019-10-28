<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';
    protected $primaryKey = 'id_unit';
    protected $fillable = ['name_unit','acronym'];

    public function product_unit(){
        return $this->hasMany('App\Models\Product', 'id_unit', 'id_unit');
    }
}
