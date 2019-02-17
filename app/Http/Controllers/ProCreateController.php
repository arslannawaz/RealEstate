<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProCreateController extends Controller
{

    public function createProperty($id){

        $p_id=$id;
        return view('agency.property.create',compact('p_id'));

    }

}
