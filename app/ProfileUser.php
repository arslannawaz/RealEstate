<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{

    protected $fillable = [
        'user_id', 'profile_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function profile(){
        return $this->belongsTo('App\Profile');
    }
}
