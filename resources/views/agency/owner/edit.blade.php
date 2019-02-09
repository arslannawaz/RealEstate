@extends('agency.only-agency')

@section('content')
    <h1>Edit Owner</h1>

    {!! Form::open(['action' => ['AgencyOwnerController@update',$user->profile_user->profile->id],'method'=>'PATCH']) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('firstname','First Name') !!}
        {!! Form::text('firstname',$user->profile_user->profile->first_name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname','Last Name') !!}
        {!! Form::text('lastname',$user->profile_user->profile->last_name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('gander','Gender') !!}
        {!! Form::select('gender',array(1=>'Male',0=>'Female'),$user->profile_user->profile->gender,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('profession','Profession') !!}
        {!! Form::text('profession',$user->profile_user->profile->profession,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Phone') !!}
        {!! Form::text('phone',$user->profile_user->profile->phone,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address','address') !!}
        {!! Form::text('address',$user->profile_user->profile->address,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avatar','avatar') !!}
        {!! Form::text('avatar',$user->profile_user->profile->avatar,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status','Status') !!}
        {!! Form::text('status',$user->profile_user->profile->status,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Owner',['class'=>'btn btn-primary col-md-6']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['action' => ['AgencyOwnerController@destroy',$user->id],'method'=>'DELETE']) !!}
    @csrf
    <div class="form-group">

        {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-6']) !!}

    </div>

    {!! Form::close() !!}


    @include('layouts.error')


@stop