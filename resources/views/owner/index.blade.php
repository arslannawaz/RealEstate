@extends('owner.layout.dashboard')


@section('content-head')
    <h1>Owner</h1>
    @stop

@section('content')

   {{-- <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>{{$user->id}}</td>
            <td>{{$user->profile_user->profile->first_name}}</td>
            <td>{{$user->profile_user->profile->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->profile_user->profile->phone}}</td>
            <td>{{$user->profile_user->profile->address}}</td>
        </tr>

        </tbody>
    </table>--}}


   <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
           <div class="x_title">
               <div class="clearfix"></div>
           </div>

           <div class="x_content">
               <div class="table-responsive">
                   <table class="table table-striped jambo_table bulk_action">
                       <thead>
                       <tr class="headings">
                           <th class="column-title">ID</th>
                           <th class="column-title">First Name</th>
                           <th class="column-title">Last Name</th>
                           <th class="column-title">Email</th>
                           <th class="column-title">Phone</th>

{{--
                           <th colspan="2" class="column-title no-link last"><span class="nobr">Action</span></th>
--}}
                           <th class="bulk-actions" colspan="7">
                               <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                           </th>
                       </tr>
                       </thead>

                       <tbody>
                               <tr class="even pointer">
                                   <td class=" ">{{$user->id}}</td>
                                   <td class=" ">{{$user->profile_user->profile->first_name}}</td>
                                   <td class=" ">{{$user->profile_user->profile->last_name}}</td>
                                   <td class=" ">{{$user->email}}</td>
                                   <td class=" ">{{$user->profile_user->profile->phone}}</td>

                                   {{--
                                                                      <td class=" last"><a href="{{route('agency.owners.edit',$user->id)}}"><button class="btn btn-success">Edit</button></a></td>
                                   --}}
                               </tr>

                       </tbody>
                   </table>
               </div>


           </div>
       </div>
   </div>

@stop