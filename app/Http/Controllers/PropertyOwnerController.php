<?php

namespace App\Http\Controllers;

use App\Profile;
use App\ProfileProperty;
use App\Properties;
use App\PropertyPictures;
use App\PropertyTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('owner.property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'long' => 'required',
            'latitude' => 'required',
            'type' => 'required',
            'status' => 'required',
            'picname' => 'required',
            'pdescription' => 'required',
            'file' => 'required',

        ]);

        $propertytype=PropertyTypes::create([
            'name'=>$request->type,
            'slug'=>'slug'
        ]);

        $pt=$propertytype->id;

       // $user = User::findOrFail();
        $property=Properties::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'location'=>$request->location,
            'long'=>$request->long,
            'latitude'=>$request->latitude,
            'status'=>$request->status,
            'property_types_id' => $pt
        ]);

        $p_id=$property->id;

        if($file=$request->file('file')){
            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo=PropertyPictures::create([
                'src'=>$name,
                'name'=>$request->picname,
                'description'=>$request->pdescription,
                'slug'=>'image',
                'url'=>$name,
                'active'=>'1',
                'properties_id'=>$p_id
            ]);
        }

        $profile_id=Auth::user()->profile_user->profile->id;

        ProfileProperty::create(['properties_id'=>$p_id,
            'profile_id'=>$profile_id
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$profiles = Profile::whereId($id)->get();
        return view('owner.property.index',compact('profiles'));*/

        $profiles = Profile::findOrFail($id);
        $profile_properties=$profiles->profile_properties;
        return view('owner.property.index',compact('profile_properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property=Properties::findOrFail($id);
        return view('owner.property.edit',compact('property'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
