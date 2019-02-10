@extends('owner.only-owner')

@section('content')
    <h1>Create Property</h1>

    {!! Form::open(['action' => ['PropertyOwnerController@store'],'method'=>'POST','files'=>true]) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null ,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location','Location') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('long','Longitude') !!}
        {!! Form::text('long',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('latitude','Latitude') !!}
        {!! Form::text('latitude',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Type') !!}
        {!! Form::select('type',["House"=>'House','Apartment'=>'Apartment','Shop'=>'Shop'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::text('status',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('picname','Picture Name') !!}
        {!! Form::text('picname',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pdescription','Picture Description') !!}
        {!! Form::text('pdescription',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','File') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Property',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('layouts.error')

    @stop