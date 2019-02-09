@extends('agency.only-agency')

@section('content')

    <div class="col-md-4">

    <h1>Create Owner</h1>


    {!! Form::open(['action' => 'AgencyOwnerController@store','method'=>'POST']) !!}
    @csrf

        <div class="form-group">
            {!! Form::label('firstname','First Name') !!}
            {!! Form::text('firstname',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastname','Last Name') !!}
            {!! Form::text('lastname',null,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

        <div class="form-group">
            {!! Form::label('gander','Gender') !!}
            {!! Form::select('gender',array(1=>'Male',0=>'Female'),1,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('profession','Profession') !!}
            {!! Form::text('profession',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('phone','Phone') !!}
            {!! Form::text('phone',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address','address') !!}
            {!! Form::text('address',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('avatar','avatar') !!}
            {!! Form::text('avatar',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status','Status') !!}
            {!! Form::text('status',null,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('online','Online') !!}
        {!! Form::select('online',array(1=>'Online',0=>'Offline'),0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Owner',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('layouts.error')

    </div>

    <div class="col-md-8">
        <h1>All Owner</h1>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                @if($user->role_user->role->name=='Owner')
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->profile_user->profile->first_name}}</td>
                    <td>{{$user->profile_user->profile->last_name}}</td>
                    <td><a href="{{route('agency.owners.edit',$user->id)}}">{{$user->email}}</a></td>
                    <td><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-success">Update/Delete</button></a></td>

                </tr>
                @endif

            @endforeach

            </tbody>
        </table>


    </div>

    @stop