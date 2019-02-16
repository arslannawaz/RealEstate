@extends('agency.dashboard')

@section('content-head')
    <h1>Add Owner</h1>
@stop

@section('content')

    {{--{!! Form::open(['action' => 'AgencyOwnerController@store','method'=>'POST','files'=>true]) !!}
    @csrf

        <div class="form-group">
            {!! Form::label('firstname','First Name') !!}
            {!! Form::text('firstname',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastname','Last Name') !!}
            {!! Form::text('lastname',null,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

        <div class="form-group">
            {!! Form::label('gander','Gender') !!}
            {!! Form::select('gender',array(1=>'Male',0=>'Female'),1,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('profession','Profession') !!}
            {!! Form::text('profession',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('phone','Phone') !!}
            {!! Form::text('phone',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address','address') !!}
            {!! Form::text('address',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status','Status') !!}
            {!! Form::text('status',null,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('online','Online') !!}
        {!! Form::select('online',array(1=>'Online',0=>'Offline'),0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avatar','Avatar') !!}
        {!! Form::file('avatar',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Owner',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}--}}



    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Owner Info</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                {!! Form::open(['action' => 'AgencyOwnerController@store','method'=>'POST','files'=>true,'class'=>'form-horizontal form-label-left']) !!}
                @csrf

                    <div class="item form-group">
                        {!! Form::label('firstname','First Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('firstname',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                        </div>
                    </div>

                <div class="item form-group">
                    {!! Form::label('lastname','Last Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('lastname',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('email','Email',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('email',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('password','Password',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::password('password',['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('gender','Gender',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::select('gender',array(1=>'Male',0=>'Female'),1,['class'=>'form-control col-md-7 col-xs-12']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('phone','Phone',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('phone',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('address','Address',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('address',null,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                    </div>
                </div>

                <div class="item form-group">
                    {!! Form::label('avatar','Avatar',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::file('avatar',null,['class'=>'form-control col-md-7 col-xs-12']) !!}
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

    <div class="col-md-4">
    </div>

    <div class="col-md-4">
        @include('layouts.error')
    </div>

    @stop