<?php

namespace App\Http\Controllers;

use App\Profile;
use App\ProfileProperty;
use App\Properties;
use App\PropertyPictures;
use App\PropertyTypes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Psy\sh;

class AgencyPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        /*$profiles=Profile::all();
        foreach ($profiles as $profile) {
            if ($profile->status == Auth::user()->id) {
                $pro_propertyy = $profile->profile_properties;
            }
            return view('agency.property.index', compact('pro_propertyy'));
        }*/

        /*$profiles=Profile::all();
        foreach ($profiles as $profile)
            if($profile->status==Auth::user()->id){
                $pro_propertyy= $profile->profile_properties;
                foreach ($pro_propertyy as $pro_property){
                     echo $pro_property->properties;
                }*/
/*              return view('agency.property.index',compact('pro'))*/

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
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
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

        $profile_id=$request->pid;

        ProfileProperty::create(['properties_id'=>$p_id,
            'profile_id'=>$profile_id
        ]);

        return $this->show($profile_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$property=Properties::findOrFail($id);
        return view('agency.property.show',compact('property'));*/
        $profiles = Profile::findOrFail($id);
        $profile_propertyy=$profiles->profile_properties;
        return view('agency.property.index',compact('profile_propertyy','profiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        /*$profile_property=ProfileProperty::where('properties_id',$id)->first();
        return $profile_property->profile_id;*/
        $property=Properties::findOrFail($id);
        return view('agency.property.edit',compact('property'));

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

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
            'long' => 'required',
            'latitude' => 'required',
            'type' => 'required',
            'status' => 'required',
            'picname' => 'required',
            'pdescription' => 'required'
        ]);

        if($file=$request->file('file')){

            $this->validate($request, [
                'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg'
            ]);

            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);

            $property=Properties::findOrFail($id);
            $p_type = $property->property_types_id;

            PropertyTypes::findOrFail($p_type)->update([
                'name'=>$request->type,
            ]);

            Properties::findOrFail($id)->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'location'=>$request->location,
                'long'=>$request->long,
                'latitude'=>$request->latitude,
                'status'=>$request->status,
            ]);

            $pic=$property->property_pictures->id;

            PropertyPictures::findOrFail($pic)->update([
                'src'=>$name,
                'name'=>$request->picname,
                'description'=>$request->pdescription,
                'url'=>$name,
            ]);

            $pppid =$property->profile_property->profile_id;
            return $this->show($pppid);

        }
        else{
            $property=Properties::findOrFail($id);
            $p_type = $property->property_types_id;

            PropertyTypes::findOrFail($p_type)->update([
                'name'=>$request->type,
            ]);

            Properties::findOrFail($id)->update([
                'name'=>$request->name,
                'description'=>$request->description,
                'location'=>$request->location,
                'long'=>$request->long,
                'latitude'=>$request->latitude,
                'status'=>$request->status,
            ]);

            $pic=$property->property_pictures->id;

            PropertyPictures::findOrFail($pic)->update([
                'name'=>$request->picname,
                'description'=>$request->pdescription,

            ]);

            $ppid =$property->profile_property->profile_id;
            return $this->show($ppid);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property=Properties::findOrFail($id);

        $ppid =$property->profile_property->profile_id;

        $p_type = $property->property_types_id;
        $pic=$property->property_pictures->id;

        PropertyPictures::findOrFail($pic)->delete();

        $property->delete();

        PropertyTypes::findOrFail($p_type)->delete();

        ProfileProperty::where('properties_id',$id)->delete();

        return $this->show($ppid);

    }
}
