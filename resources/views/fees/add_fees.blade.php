@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')


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
        {{--<form action="" method="post">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="col-md-4">--}}
                {{--<div class="form-group">--}}
                    {{--<label for="username">Username:</label>--}}
                    {{--<input type="text" class="form-control" id="username" name="username" >--}}
                {{--</div>--}}

                {{--<div class="form-group">--}}
                    {{--<label for="email">Email address:</label>--}}
                    {{--<input type="email" class="form-control" id="email" name="email">--}}
                {{--</div>--}}

                {{--<button type="submit" class="btn btn-primary">Save</button>--}}

            {{--</div>--}}
        {{--</form>--}}

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


            </script>
@stop