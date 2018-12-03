@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4>{{ Breadcrumbs::render('roleProfile') }} </h4>

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

        <div class="col-md-8">

            <table class="table table-striped table-condensed">
                <tr><td colspan="12">User Details</td></tr>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Assign Profile</th>
                </tr>
                <tbody>

                <?php $i =1; ?>
                @foreach($userData as $user)
                    <tr class="user">
                        <td>{{$i}}</td>
                        <td class="name">{{$user->name}}</td>
                        <td>
                            <a href="{{url('userProfile/assign/profile',['id'=>$user->id])}}"  class="edit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>

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
    <script>

        $(document).ready( function (e) {


        });
    </script>
@stop