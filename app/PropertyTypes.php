<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyTypes extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];
}
