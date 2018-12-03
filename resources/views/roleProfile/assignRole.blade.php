@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h4>{{Breadcrumbs::render('assign/role')}}</h4>
    <hr>
    <div class="clearfix"></div>
@stop

@section('content')
    <div class="row">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->
        <div class="col-md-6">
            <h4>Assign Role(s) to <strong>{{$profilename}}</strong></h4>
            <form action="{{url('roleProfile')}}" method="post">

                {{--role id--}}
                <input type="hidden" value="{{$id}}" name="profile_id">
                {{ csrf_field() }}
                <table class="table table-striped table-bordered table-condensed" id="roleTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Role name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i =1?>
                    @foreach($roles as $role)
                        <tr>
                            <td> {{$i}}</td>
                            <td> {{$role['role_name']}}</td>
                            <td><input type="checkbox" class="checkbox" name="role_name[]" value="{{$role['id']}}"></td>

                        </tr>

                        <?php $i++;?>
                    @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

        <div class="col-md-6">
            <h4>Assigned Roles</h4>

                <table class="table table-striped table-bordered table-condensed">
                    <tr><td colspan="12">Role Profile Details</td></tr>
                    <tr>
                        <td>#</td>
                        <td>Role Name</td>
                        <td>Action</td>
                    </tr>
                    <tbody>
                    <?php $i =1?>
                    @foreach($assignedRoles as $assignedRole)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$assignedRole->role_name }}</td>
                            <td>
                                <form action="{{action('Admin\RoleProfileController@destroy', $assignedRole->id)}}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button onClick="return confirm('Are you absolutely sure you want to delete user?')"  type="submit" class="btn btn-link">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++;?>
                    @endforeach
                    </tbody>
                </table>

        </div>
    </div>
@stop
@section('css')
    <style>
        .content-wrapper {
            background-color:white;
        }
    </style>

@stop

@section('js')
@stop