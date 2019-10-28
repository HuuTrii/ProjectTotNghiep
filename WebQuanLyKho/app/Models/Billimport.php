<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billimport extends Model
{
    protected $primaryKey = 'id_import';
    protected $fillable = [
        'id_user','date_import','total', 
    ];

    public function user_import(){
        return $this->belongsTo('App\Models\Users', 'id_user', 'id_user');
    }
}
