<?php

namespace App\Http\Controllers;

use App\Profile;
use App\ProfileUser;
use App\RoleUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AgencyOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Vorks";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('agency.owner.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'online' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'profession' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'avatar' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $user = User::create($input);
        RoleUser::create(['user_id' => $user->id, 'role_id' => '2']);


        $profile = new Profile();
        $profile->first_name = $input['firstname'];
        $profile->last_name = $input['lastname'];
        $profile->gender = $input['gender'];
        $profile->profession = $input['profession'];
        $profile->address = $input['address'];
        $profile->phone = $input['phone'];
        $profile->avatar = $input['avatar'];
        $profile->status = $input['status'];
        $profile->email = $input['email'];

        $profile->save();

        ProfileUser::create(['user_id' => $user->id, 'profile_id' => $profile->id]);

        return redirect('agency/owners/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('agency.owner.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Profile::findOrFail($id)->update([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'gender' => $request->gender,
            'profession' => $request->profession,
            'phone' => $request->phone,
            'address' => $request->address,
            'avatar' => $request->avatar,
            'status' => $request->status
        ]);

        return redirect('agency/owners/create');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user=User::findOrFail($id)->profile_user;
        $p_id = $user->profile->id;
        Profile::findOrFail($p_id)->delete();

        $user=User::findOrFail($id)->profile_user;
        $pu_id = $user->id;
        ProfileUser::findOrFail($pu_id)->delete();

        User::findOrFail($id)->delete();

        /*$user->profile_user()->profile()->delete();
        $user->delete();*/
        return redirect('agency/owners/create');

    }

}
