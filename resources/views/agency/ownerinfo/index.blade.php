@extends('agency.dashboard')

@section('content-head')
    <h1>Owner Info</h1>
    @stop

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">

                <div class="btn-group">
                    <a href="{{route('agency.property.show',$profile->id)}}"><button type="button" class="btn btn-light">All Properties</button></a>
                    <a><button type="button" class="btn btn-light">Permission</button></a>
                </div>

                <div>

                    <div>
                        @yield('properties')

                    </div>
                    <div>
                        @yield('permission')

                    </div>
                </div>


        </div>
    </div>
    </div>












    @stop