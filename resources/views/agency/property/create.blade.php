@extends('agency.dashboard')

@section('content-head')
    <h1>Create Property</h1>
    @stop

@section('content')

    {{--{!! Form::open(['action' => ['AgencyPropertyController@store'],'method'=>'POST','files'=>true]) !!}
    @csrf

    {!! Form::text('pid',$p_id ,['class'=>'form-control hidden']) !!}

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null ,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location','Location') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('long','Longitude') !!}
        {!! Form::text('long',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('latitude','Latitude') !!}
        {!! Form::text('latitude',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Type') !!}
        {!! Form::select('type',["House"=>'House','Apartment'=>'Apartment','Shop'=>'Shop'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::text('status',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('picname','Picture Name') !!}
        {!! Form::text('picname',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pdescription','Picture Description') !!}
        {!! Form::text('pdescription',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','File') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Property',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}--}}


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">

                {!! Form::open(['action' => 'AgencyPropertyController@store','method'=>'POST','files'=>true,'class'=>'form-horizontal form-label-left']) !!}
                @csrf

                {!! Form::text('pid',$p_id ,['class'=>'form-control hidden']) !!}

                <div class="item form-group">
                    {!! Form::label('name','Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('description','Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('description',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('location','Location',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('location',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('long','Longitude',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('long',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('latitude','Latitude',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('latitude',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('type','Type',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::select('type',["House"=>'House','Apartment'=>'Apartment','Shop'=>'Shop'],null,['class'=>'form-control col-md-7 col-xs-12']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    <div class="item form-group">
                        {!! Form::label('status','Status',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('status',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('picname','Picture Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('picname',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('pdescription','Picture Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('pdescription',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
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
                    <div class="col-md-6 col-md-offset-3">
                        {!! Form::submit('Create Property',['class'=>'btn btn-success']) !!}
                    </div>
                </div>

                {!! Form::close() !!}


            </div>
        </div>
    </div>
    </div>



    <div class="col-md-4"></div>

    <div class="col-md-4">
        @include('layouts.error')
    </div>

@stop
