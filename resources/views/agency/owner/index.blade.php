@extends('agency.only-agency')

@section('content')
    <h1>All Owner</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            @if($user->role_user->role->name=='Owner')
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img width="60" src="{{URL::to('/images/',$user->profile_user->profile->avatar)}}"></td>
                    <td>{{$user->profile_user->profile->first_name}}</td>
                    <td>{{$user->profile_user->profile->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-success">Info</button></a></td>
                    <td><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-danger">Edit</button></a></td>
                </tr>
            @endif

        @endforeach

        </tbody>
    </table>

    @stop