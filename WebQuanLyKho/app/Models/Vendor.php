<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $primaryKey = 'id_vendor';
    protected $fillable = ['name_vendor','phone_number','email','adress'];

    public function product_vendor(){
        return $this->hasMany('App\Models\Product', 'id_vendor', 'id_vendor');
    }
}
