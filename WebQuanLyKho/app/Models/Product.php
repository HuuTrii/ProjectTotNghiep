<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_pro';
    protected $fillable = [
        'id_cata','code_pro','id_promotion', 'id_unit', 'id_vendor','id_detail_import','name_pro','images','price','quantity',
    ];

    public function catalog(){
        return $this->belongsTo('App\Models\Catalog', 'id_cata', 'id_cata');
    }
    public function promotion(){
        return $this->belongsTo('App\Models\Promotion', 'id_promotion', 'id_promotion');
    }
    public function unit(){
        return $this->belongsTo('App\Models\Unit', 'id_unit', 'id_unit');
    }
    public function vendor(){
        return $this->belongsTo('App\Models\Vendor', 'id_vendor', 'id_vendor');
    }
    public function detail_import(){
        return $this->belongsTo('App\Models\Detailimport', 'id_detail_import', 'id_detail_import');
    }
}
