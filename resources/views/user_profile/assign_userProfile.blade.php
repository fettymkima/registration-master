@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4>{{ Breadcrumbs::render('assign/profile') }} </h4>

@stop

@section('content')

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    <div class="row">

        <div class="col-md-6">

            <h4><span>Asign Profile(s) to <strong>{{$username}}</strong></span></h4>

            <form action="{{url('userProfile')}}" method="post">
                {{ csrf_field() }}

                {{--user id--}}

                <input type="hidden" value="{{$id}}" name="user_id">
                <table class="table table-striped table-condensed table-bordered">
                    <tr>
                        <th>#</th>
                        <th><P>rofile Name</P></th>
                        <th>Assign</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach($profiles as $profile)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$profile['profile_name']}}</td>
                            <td><input type="checkbox" class="checkbox" value="{{$profile['id']}}" name="profile_name[]"></td>

                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </table>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        <div class="col-md-6">

            <h4>Asigned Profiles</h4>

            <table class="table table-striped table-bordered table-condensed">

                <tr>
                    <th>#</th>
                    <th>Profile Name</th>
                    <th>Actions</th>

                </tr>
                <?php $i=1; ?>
                @foreach($assigned_profiles as $profile)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$profile->profile_name}}</td>
                    <td>
                        <form action="{{action('Admin\UserProfileController@destroy',$profile->id)}}" method="post">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden"  value="DELETE">
                            <button type="submit" class="btn btn-link">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                    <?php $i++; ?>
                    @endforeach
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
    <script>

        $(document).ready( function (e) {


        });
    </script>
@stop