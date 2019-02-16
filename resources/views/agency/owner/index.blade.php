@extends('agency.dashboard')

@section('content-head')
    <h1>All Owner</h1>
@stop

@section('content')
    {{--<table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            @if($user->role_user->role->name=='Owner')
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img width="60" src="{{URL::to('/images/',$user->profile_user->profile->avatar)}}"></td>
                    <td>{{$user->profile_user->profile->first_name}}</td>
                    <td>{{$user->profile_user->profile->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-info">Info</button></a></td>
                    <td><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                    <td>

                    <form action="{{ url('agency/owners', $user->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                    </form>
                    </td>

                </tr>
            @endif

        @endforeach

        </tbody>
    </table>--}}


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Picture</th>
                            <th class="column-title">First Name</th>
                            <th class="column-title">Last Name</th>
                            <th class="column-title">Email</th>
                            <th colspan="2" class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            @if($user->role_user->role->name=='Owner' && $user->profile_user->profile->status==\Illuminate\Support\Facades\Auth::user()->id )
                        <tr class="even pointer">
                            <td class=" ">{{$user->id}}</td>
                            <td class=" "><img width="60" src="{{URL::to('/images/',$user->profile_user->profile->avatar)}}"></td>
                            <td class=" ">{{$user->profile_user->profile->first_name}}</td>
                            <td class=" ">{{$user->profile_user->profile->last_name}}</td>
                            <td class=" ">{{$user->email}}</td>
                            <td class=" last"><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-success">Edit</button></a></td>

                            <td>
                                <form action="{{ url('agency/owners', $user->id) }}" method="post" class="delete" onsubmit="return confirm('Do you really want to delete?')">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                                </form>
                            </td>

                        </tr>

                            @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


    @stop