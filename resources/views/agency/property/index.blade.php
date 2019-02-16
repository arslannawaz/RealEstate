@extends('agency.dashboard')

@section('content-head')
<h1>All Properties</h1>
@stop

@section('content')

    {{--@foreach($properties as $property)
        <div class="col-md-3">
            <a href="{{route('agency.property.show',$property->id)}}"><img width="200" height="150" src="{{URL::to('/images/',$property->property_pictures->src)}}"></a>

            <a href="{{route('agency.property.show',$property->id)}}"><button class="btn btn-primary col-md-11">View Details</button></a>
            <form action="{{ url('agency/property', $property->id)}}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input class="btn btn-danger col-md-11" type="submit" name="submit" value="Delete">
            </form>
        </div>
    @endforeach--}}



    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Properties Gallery</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="row">

                        @foreach($pro_propertyy as $pro_property)

                            <div class="col-md-55">
                            <div class="thumbnail">
                                <div class="image view view-first">
                                    <img width="200" height="150" src="{{URL::to('/images/',$pro_property->properties->property_pictures->src)}}">
                                    <div class="mask">
                                        <p>Action</p>
                                        <div class="tools tools-bottom">
                                            <a href="{{route('agency.property.show',$pro_property->properties->id)}}"><i class="fa fa-link"></i></a>
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <p>{{$pro_property->properties->description}}</p>
                                </div>
                            </div>
                        </div>

                                @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    @stop
