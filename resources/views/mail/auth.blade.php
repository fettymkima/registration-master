@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h4>{{Breadcrumbs::render('role/create')}}</h4>
    <hr>
    <div class="clearfix"></div>
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
            <form action="{{url('auth/create-password',$token)}}" method="post">
                {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password: <span id="mismatch-password-msg" class="label label-warning"></span></label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" >
                </div>

                <button type="submit" class="btn btn-primary" id="password-confirm">Save</button>
            </div>
    </form>

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

                $(function () {


                    $('#password-confirm').prop("disabled",true);

                    $("#cpassword").keyup(function (e) {

                        var password =  $("#password").val();
                        var cpassword =  $("#cpassword").val();

                        console.log(password);
                        console.log("c pass  "+cpassword);


                        if(password==cpassword){

                            $("#password-confirm").prop("disabled",false);
                            $("#mismatch-password-msg").html('');

                        }
                        else {

                            $("#password-confirm").prop("disabled",true);

                            $("#mismatch-password-msg").html('');
                            $("#mismatch-password-msg").append("Password does not match");

                        }



                    });

                });

            </script>



@stop