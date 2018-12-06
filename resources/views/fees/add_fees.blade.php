@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop
@section('content')
    <div class="row" style="margin-top: -30px">
        <div class="col-md-12 flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <!-- end .flash-message -->

        <form action="" method="post">
            {{ csrf_field() }}
            <br>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first_name" style="font-size: 16px">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" >
                </div>

                <div class="form-group">
                    <label for="middle_name" style="font-size: 16px">Middle Name:</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name">
                </div>

                <div class="form-group">
                    <label for="middle_name" style="font-size: 16px">Middle Name:</label>
                    <textarea class="form-control" name="fees_description" cols="40" rows="5"></textarea>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <label for="first_name" style="font-size: 16px">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" >
                </div>

                <div class="form-group">
                    <label for="middle_name" style="font-size: 16px">Middle Name:</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name">
                </div>
                <button type="submit" class="btn btn-primary" id="save-create">Submit</button>


            </div>

        </form>
    </div>
@stop

@section('css')
    <style>

        h4{
            background-color: #3C8DBC;
            height: 25px;
            color: white;
            border-radius: 1px;
        }
        label{
            font-weight: normal;
        }
    </style>

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>


    </script>
@stop




