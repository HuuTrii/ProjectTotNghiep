<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected $primaryKey = 'id_promotion';
    protected $fillable = ['code_promotion','sale','from_date','to_date'];
    public function product_promotion(){
        return $this->hasMany('App\Models\Product', 'id_promotion', 'id_promotion');
}
}

