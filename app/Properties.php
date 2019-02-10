<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'name', 'description','location','long','latitude','status','property_types_id'
    ];

    public function property_types(){
        return $this->belongsTo('App\PropertyTypes');
    }

    public function property_pictures(){
        return $this->hasOne('App\PropertyPictures');
    }

}
