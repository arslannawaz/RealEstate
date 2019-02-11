@extends('agency.only-agency')

@section('content')
    <h1>Edit Property</h1>

    {!! Form::open(['action' => ['AgencyPropertyController@update',$property->id],'method'=>'PATCH','files'=>true]) !!}
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
        {!! Form::submit('Update Property',['class'=>'btn btn-primary col-md-6']) !!}
    </div>

    {!! Form::close() !!}

    {{--{!! Form::open(['action' => ['AgencyPropertyController@destroy',$property->id],'method'=>'DELETE']) !!}
    @csrf

    <div class="form-group">
        {!! Form::submit('Delete Property',['class'=>'btn btn-danger col-md-6']) !!}
    </div>

    {!! Form::close() !!}--}}

    <form action="{{ url('agency/property', $property->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-danger col-md-6" type="submit" name="submit" value="Delete Property">
    </form>

    @include('layouts.error')

@stop