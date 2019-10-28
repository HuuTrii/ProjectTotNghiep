<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detailimport extends Model
{
    protected $primaryKey = 'id_detail_import';
    protected $fillable = [
        'id_import','id_pro','quantity', 
    ];

    public function import(){
        return $this->belongsTo('App\Models\Billimport', 'id_import', 'id_import');
    }
    public function products(){
        return $this->belongsTo('App\Models\Product', 'id_pro', 'id_pro');
    }
}
