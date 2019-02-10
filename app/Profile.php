<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'gender','profession','email','phone','status','address','avatar'
    ];

    public function profile_property(){
        return $this->hasOne('App\ProfileProperty');
    }

    public function profile_properties(){
        return $this->hasMany('App\ProfileProperty');
    }

}
