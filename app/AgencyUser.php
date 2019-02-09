<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyUser extends Model
{

    protected $fillable = [
        'user_id', 'agencies_id'
    ];

    public function agencies(){
        return $this->belongsTo('App\Agencies');
    }
}
