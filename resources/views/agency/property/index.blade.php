@extends('agency.only-agency')

@section('content')
<h1>All Properties</h1>

    @foreach($properties as $property)

        <div class="col-md-3">
            <a href="{{route('agency.property.show',$property->id)}}"><img width="200" src="{{URL::to('/images/',$property->property_pictures->src)}}"></a>
            <h3>{{$property->location}}</h3>
        </div>

    @endforeach


    @stop
