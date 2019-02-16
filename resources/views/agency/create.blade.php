@extends('agency.dashboard')

@section('content')
    @if($user->agency_user)
        <h1>Information Added</h1>
    @else
        <h1>Add Info</h1>

   {{-- {!! Form::open(['action' => 'AgencyController@store','method'=>'POST']) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null ,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug','Slug') !!}
        {!! Form::text('slug',$user->role_user->role->name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address','Address') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location','Location') !!}
        {!! Form::text('location',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Phone') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',$user->email,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Info',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}--}}



        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Agency Info</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    {!! Form::open(['action' => 'AgencyController@store','method'=>'POST','class'=>'form-horizontal form-label-left']) !!}
                    @csrf

                    <div class="item form-group">
                        {!! Form::label('name','Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('slug','Slug',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('slug',$user->role_user->role->name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('description','Description',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('description',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('address','Address',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('address',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('location','Location',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('location',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('phone','Phone',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('phone',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                    <div class="item form-group">
                        {!! Form::label('email','Email',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('email',$user->email,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            {!! Form::submit('Create Owner',['class'=>'btn btn-success']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>


    @include('layouts.error')

    @endif

@stop