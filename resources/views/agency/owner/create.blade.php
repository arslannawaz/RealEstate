@extends('agency.only-agency')

@section('content')

    <h1>Create Owner</h1>


    {!! Form::open(['action' => 'AgencyOwnerController@store','method'=>'POST','files'=>true]) !!}
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
            {!! Form::label('status','Status') !!}
            {!! Form::text('status',null,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('online','Online') !!}
        {!! Form::select('online',array(1=>'Online',0=>'Offline'),0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avatar','Avatar') !!}
        {!! Form::file('avatar',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Owner',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('layouts.error')

    @stop