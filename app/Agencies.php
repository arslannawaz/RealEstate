<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    protected $fillable = [
        'name', 'email', 'slug','description','location','address','phone'
    ];
}
