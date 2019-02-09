<?php

namespace App\Http\Controllers;

use App\Agencies;
use App\AgencyUser;
use App\Http\Middleware\Agency;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();
        return view('agency.create',compact('user'));
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
            'slug' => 'required',
            'description' => 'required',
            'address' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $input=$request->all();
        $agency=Agencies::create($input);
        $user_id=Auth::user();
        AgencyUser::create(['user_id'=>$user_id->id,'agencies_id'=>$agency->id]);
        return redirect('/agency');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agency=Auth::user()->agency_user->agencies;
        return view('agency.edit' ,compact('agency'));
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
        $agency=Agencies::findOrFail($id);
        $agency->update($request->all());
        return redirect('/agency');
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
