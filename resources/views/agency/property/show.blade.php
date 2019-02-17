@extends('agency.dashboard')

@section('content-head')
    <h1>Property Detail</h1>
    @stop

@section('content')

        {{--<div class="row">

            <div class="col-md-12">
                <a href="{{route('agency.property.edit',$property->id)}}"><img width="100%" src="{{URL::to('/images/',$property->property_pictures->src)}}"></a>
            </div>

        </div>
    <a href="{{route('agency.property.edit',$property->id)}}"><button class="btn btn-primary col-md-12">Edit Information</button></a>

    <div class="col-md-4" style="background-color: lightgray; color: black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>ID: {{$property->id}}</h4>
        <h4>Name: {{$property->name}}</h4>
        <h4>Location: {{$property->location}}</h4>
        <h4>Longitude: {{$property->long}}</h4>
        <h4>Latitude: {{$property->latitude}}</h4>
        <h4>Status: {{$property->status}}</h4>
        <h4>Type: {{$property->property_types->name}}</h4>
    </div>

    <div class="col-md-8">
        <h4>Description: {{$property->description}}</h4>
    </div>

    <br><br>--}}


        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">

                        <div class="col-md-8 col-lg-8 col-sm-7">
                            <img width="100%" src="{{URL::to('/images/',$property->property_pictures->src)}}">

                            <blockquote class="blockquote">
                                <h2>{{$property->description}}</h2>

                            </blockquote>
                        </div>

                        <div class="col-md-4 col-lg-4 col-sm-5">
                            <h4>Name: {{$property->name}}</h4>
                            <h4>Location: {{$property->location}}</h4>
                            <h4>Longitude: {{$property->long}}</h4>
                            <h4>Latitude: {{$property->latitude}}</h4>
                            <h4>Status: {{$property->status}}</h4>
                            <h4>Type: {{$property->property_types->name}}</h4>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
            </div>
        </div>





@stop
