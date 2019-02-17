<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Properties;
use Illuminate\Http\Request;

class ProCreateController extends Controller
{

    public function createProperty($id){
        $p_id=$id;
        return view('agency.property.create',compact('p_id'));
    }

    public function showProperty($id){


        $property=Properties::findOrFail($id);
        return view('agency.property.show',compact('property'));

    }



}
