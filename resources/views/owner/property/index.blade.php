@extends('owner.only-owner')

@section('content')
    <h1>All Properties</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Property Name</th>
            <th>Description</th>
            <th>Location</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Status</th>
            <th>Type</th>
            <th>Picture</th>

        </tr>
        </thead>
        <tbody>

        {{--@foreach($profiles as $profile)
                <tr>
                    --}}{{--<td>{{$profile->profile_property->properties->property_types}}</td>
                    <td>{{$profile->profile_property->properties->property_pictures}}</td>--}}{{--
                    <td>{{$profile->profile_properties}}</td>
                </tr>
        @endforeach--}}

        @foreach($profile_propertyy as $profile_property)
            <tr>
                {{--<td>{{$profile->profile_property->properties->property_types}}</td>
                <td>{{$profile->profile_property->properties->property_pictures}}</td>--}}
                <td>{{$profile_property->properties->id}}</td>
                <td>{{$profile_property->properties->name}}</td>
                <td>{{$profile_property->properties->description}}</td>
                <td>{{$profile_property->properties->location}}</td>
                <td>{{$profile_property->properties->long}}</td>
                <td>{{$profile_property->properties->latitude}}</td>
                <td>{{$profile_property->properties->status}}</td>
                <td>{{$profile_property->properties->property_types->name}}</td>

{{--
                <td>{{$profile_property->properties->property_pictures->src}}</td>
--}}

                <td><img width="75" src="{{URL::to('/images/',$profile_property->properties->property_pictures->src)}}"></td>





            </tr>

            @endforeach

        </tbody>
    </table>




@stop