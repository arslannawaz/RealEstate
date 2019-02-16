@extends('agency.dashboard')

@section('content-head')
    <h1>Edit Info</h1>

    @stop

@section('content')

    {{--{!! Form::open(['action' => ['AgencyController@update',$agency->id],'method'=>'PATCH']) !!}
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

    --}}{{--<div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',$agency->email,['class'=>'form-control']) !!}
    </div>--}}{{--

    <div class="form-group">
        {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}--}}

    <div class="x_content">

        {!! Form::open(['action' => ['AgencyController@update',$agency->id],'method'=>'PATCH','files'=>true,'class'=>'form-horizontal form-label-left']) !!}
        @csrf
        <div class="item form-group">
            {!! Form::label('name','Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('name',$agency->name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('slug','Slug',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('slug',$agency->slug,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('description','Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('description',$agency->description,['class'=>'form-control col-md-7 col-xs-12']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('address','Address',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('address',$agency->address,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('location','Phone',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('phone',$agency->phone,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('location','Location',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('location',$agency->location,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>


        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                {!! Form::submit('Update',['class'=>'btn btn-success']) !!}
            </div>
        </div>

        {!! Form::close() !!}


    </div>


    @include('layouts.error')


@stop