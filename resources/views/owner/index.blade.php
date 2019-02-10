@extends('owner.only-owner')


@section('content')

    <h1>Owner</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->profile_user->profile->first_name}}</td>
            <td>{{$user->profile_user->profile->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->profile_user->profile->phone}}</td>
            <td>{{$user->profile_user->profile->address}}</td>
        </tr>

        </tbody>
    </table>

@stop