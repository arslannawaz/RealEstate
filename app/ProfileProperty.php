<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileProperty extends Model
{

    protected $fillable = [
        'properties_id', 'profile_id'
    ];

    public function properties(){
        return $this->belongsTo('App\Properties');
    }

}
