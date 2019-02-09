@extends('agency.only-agency')

@section('content')

    @if(!($agency))
        <h1>Add Info First</h1>
        @else
    <h1>Edit Info</h1>

    {!! Form::open(['action' => ['AgencyController@update',$agency->id],'method'=>'PATCH']) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',$agency->name ,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug',$agency->slug,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::text('description',$agency->description,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address','Address') !!}
        {!! Form::text('address',$agency->address,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location','Location') !!}
        {!! Form::text('location',$agency->location,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Phone') !!}
        {!! Form::text('phone',$agency->phone,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',$agency->email,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}


    @include('layouts.error')

    @endif

@stop