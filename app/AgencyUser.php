<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyUser extends Model
{
    public function agencies(){
        return $this->belongsTo('App\Agencies');
    }
}
