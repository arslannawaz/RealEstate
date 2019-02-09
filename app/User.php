<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','online'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role_user(){
        return $this->hasOne('App\RoleUser');
    }

    public function role_users(){
        return $this->hasMany('App\RoleUser');
    }

    public function agency_user(){
        return $this->hasOne('App\AgencyUser');
    }

    public function profile_user(){
        return $this->hasOne('App\ProfileUser');
    }


    public  function isAgency(){
        if($this->role_user->role->name == "Agency"){
            return view('agency.index');
        }
        return false;
    }

    public  function isOwner(){
        if($this->role_user->role->name== "Owner"){
            return view('owner.index');
        }
        return false;
    }

}
