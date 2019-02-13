@extends('agency.only-agency')

@section('content')
    <h1>Properties</h1>


    @foreach($properties as $property)

        <div class="col-md-3">
            <a href="{{route('agency.property.show',$property->id)}}"><img width="200" height="150" src="{{URL::to('/images/',$property->property_pictures->src)}}"></a>
            <br><br>
            <a href="{{route('agency.property.show',$property->id)}}"><button class="btn btn-primary col-md-11">View Details</button></a>
            <form action="{{ url('agency/property', $property->id)}}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger col-md-11" type="submit" name="submit" value="Delete">
            </form>
        </div>

    @endforeach


@stop