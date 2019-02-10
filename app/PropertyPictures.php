<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPictures extends Model
{
    protected $fillable = [
        'name', 'slug','description','src','url','active','properties_id'
    ];
}
