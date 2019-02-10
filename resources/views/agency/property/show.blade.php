@extends('agency.only-agency')

@section('content')
    <h1>Property Detail</h1>

        <div class="col-md-4">
            <a href="{{route('agency.property.edit',$property->id)}}"><img width="100%" src="{{URL::to('/images/',$property->property_pictures->src)}}"></a>
        </div>

        <div class="col-md-8" style="background-color: lightgrey; color: black">
             <h4 >ID: {{$property->id}}</h4>
              <h4>Name: {{$property->name}}</h4>
               <h4>Description: {{$property->description}}</h4>
               <h4>Location: {{$property->location}}</h4>
               <h4>Longitude: {{$property->long}}</h4>
               <h4>Latitude: {{$property->latitude}}</h4>
               <h4>Status: {{$property->status}}</h4>
               <h4>Type: {{$property->property_types->name}}</h4>

        </div>

@stop
