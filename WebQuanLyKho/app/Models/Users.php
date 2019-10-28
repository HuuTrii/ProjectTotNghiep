<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'firstname','lastname','username', 'email_user', 'password','phone_number','id_role'
    ];

    public function role(){
        return $this->belongsTo('App\Models\Role', 'id_role', 'id_role');
    }
}
