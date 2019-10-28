<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id_role';
    protected $fillable = ['role'];

    public function user(){
        return $this->hasMany('App\Models\User', 'id_role', 'id_role');
    }
}
