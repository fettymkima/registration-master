@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <hr>
    <div class="clearfix"></div>
@stop

@section('content')

    <div class="col-md-8">

        <table class="table table-striped table-bordered table-condensed" id="roleTable">
            <tr><td colspan="12">Profile Details</td></tr>
            <tr>
                <th>#</th>
                <th> Profile Name</th>
                <th>Assign Role</th>
            </tr>
            <tbody>
            <?php $i =1?>
            @foreach($profiles as $profile)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$profile['profile_name'] }}</td>
                    <td>
                        <a href="{{url('roleProfile/assign/role', $profile['id'])}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                </tr>
                <?php $i++;?>
            @endforeach
            </tbody>
        </table>
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