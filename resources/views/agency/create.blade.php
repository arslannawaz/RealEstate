@extends('agency.dashboard')

@section('content')
    @if($user->agency_user)
        <h1>Information Added</h1>
    @else
        <h1>Add Info</h1>

    {!! Form::open(['action' => 'AgencyController@store','method'=>'POST']) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null ,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug',$user->role_user->role->name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address','Address') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location','Location') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Phone') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Info',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}


    @include('layouts.error')

    @endif

@stop