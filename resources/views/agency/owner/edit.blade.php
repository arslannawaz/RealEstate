@extends('agency.dashboard')

@section('content-head')
    <h1>Edit Owner</h1>
    @stop

@section('content')

    <div class="col-md-4">
        <img width="250" src="{{URL::to('/images/',$user->profile_user->profile->avatar)}}">
    </div>

    <div class="col-md-8">

                <div class="x_content">

                    {!! Form::open(['action' => ['AgencyOwnerController@update',$user->profile_user->profile->id],'method'=>'PATCH','files'=>true,'class'=>'form-horizontal form-label-left']) !!}
                @csrf
                                    <div class="item form-group">
                                        {!! Form::label('firstname','First Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::text('firstname',$user->profile_user->profile->first_name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        {!! Form::label('lastname','Last Name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::text('lastname',$user->profile_user->profile->last_name,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        {!! Form::label('gender','Gender',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::select('gender',array(1=>'Male',0=>'Female'),$user->profile_user->profile->gender,['class'=>'form-control col-md-7 col-xs-12']) !!}
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        {!! Form::label('profession','Profession',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::text('profession',$user->profile_user->profile->profession,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        {!! Form::label('phone','Phone',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::text('phone',$user->profile_user->profile->phone,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        {!! Form::label('address','Address',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {!! Form::text('address',$user->profile_user->profile->address,['class'=>'form-control col-md-7 col-xs-12','required']) !!}
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
                                            {!! Form::submit('Update Owner',['class'=>'btn btn-success']) !!}
                                        </div>
                                    </div>

                                    {!! Form::close() !!}


                                </div>



                    {{--{!! Form::open(['action' => ['AgencyOwnerController@destroy',$user->id],'method'=>'DELETE']) !!}
                    @csrf
                    <div class="form-group">

                        {!! Form::submit('Delete Owner',['class'=>'btn btn-danger col-sm-6']) !!}

                    </div>

                    {!! Form::close() !!}--}}

        {{--<form action="{{ url('agency/owners', $user->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input class="btn btn-danger col-md-6" type="submit" name="submit" value="Delete Owner">
        </form>--}}

    @include('layouts.error')
    </div>

@stop
