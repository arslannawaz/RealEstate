@extends('agency.dashboard')

@section('content-head')
    <h1>Edit Property</h1>
    @stop
@section('content')

    {{--{!! Form::open(['action' => ['AgencyPropertyController@update',$property->id],'method'=>'PATCH','files'=>true]) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',$property->name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::text('description',$property->description,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location','Location') !!}
        {!! Form::text('location',$property->location,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('long','Longitude') !!}
        {!! Form::text('long',$property->long,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('latitude','Latitude') !!}
        {!! Form::text('latitude',$property->latitude,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Type') !!}
        {!! Form::select('type',["House"=>'House','Apartment'=>'Apartment','Shop'=>'Shop'],$property->property_types->name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::text('status',$property->status,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('picname','Picture Name') !!}
        {!! Form::text('picname',$property->property_pictures->name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pdescription','Picture Description') !!}
        {!! Form::text('pdescription',$property->property_pictures->description,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','File') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Property',['class'=>'btn btn-primary col-md-12']) !!}
    </div>

    {!! Form::close() !!}--}}

    {{--{!! Form::open(['action' => ['AgencyPropertyController@destroy',$property->id],'method'=>'DELETE']) !!}
    @csrf

    <div class="form-group">
        {!! Form::submit('Delete Property',['class'=>'btn btn-danger col-md-6']) !!}
    </div>

    {!! Form::close() !!}--}}

    {{--<form action="{{ url('agency/property', $property->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-danger col-md-6" type="submit" name="submit" value="Delete Property">
    </form>--}}


    <div class="x_content">

        {!! Form::open(['action' => ['AgencyPropertyController@update',$property->id],'method'=>'PATCH','files'=>true,'class'=>'form-horizontal form-label-left']) !!}
        @csrf
        <div class="item form-group">
            {!! Form::label('name','Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('name',$property->name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('description','Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('description',$property->description,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('location','Location',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('location',$property->location,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('long','Longitude',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('long',$property->long,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('latitude','Latitude',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('latitude',$property->latitude,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('house','House',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::select('type',["House"=>'House','Apartment'=>'Apartment','Shop'=>'Shop'],$property->property_types->name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('status','Status',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('status',$property->status,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('picname','Picture Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('picname',$property->property_pictures->name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('pdescription','Picture Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::text('pdescription',$property->property_pictures->description,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
            </div>
        </div>

        <div class="item form-group">
            {!! Form::label('file','File',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
            <div class="col-md-6 col-sm-6 col-xs-12">
                {!! Form::file('file',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
            </div>
        </div>

        <div class="ln_solid"></div>

        <div class="form-group">
            <div class="col-md-12 col-md-offset-3">
                {!! Form::submit('Update Property',['class'=>'btn btn-success col-md-6']) !!}
            </div>
        </div>
        {!! Form::close() !!}

        <div class="col-md-12 col-md-offset-3">
        <form action="{{ url('agency/property', $property->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input class="btn btn-danger col-md-6" type="submit" name="submit" value="Delete Property">
        </form>
        </div>


    </div>

    <div class="col-md-4">
    </div>

    <div class="col-md-4">
        @include('layouts.error')
    </div>

@stop