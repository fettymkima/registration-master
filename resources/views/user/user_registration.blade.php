@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4>{{ Breadcrumbs::render('register') }} </h4>

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
            <form action="{{url('user')}}" method="post">
                {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>

    </div>
            </form>


            <div class="col-md-8">


                <table class="table table-striped user_table">
                    <tr><td colspan="12">User Details</td></tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered Date</th>
                        <th>Actions</th>
                    </tr>
                    <tbody>

                    <?php $i =1; ?>
                    @foreach($userData as $user)
                        <tr class="user">
                            <td>{{$i}}</td>
                            <td class="name">{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{ substr($user->created_at,0,10)}}</td>
                            <td style="display: none">{{ $user->id}}</td>

                            <td><a href="#" data-toggle="modal" data-target="#edit" class="edit" >
                                    <span class="glyphicon glyphicon-edit"></span></a></td>
                            <td>
                                <form action="{{action('Admin\UserController@destroy',$user->id)}}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden"  value="DELETE">
                                    <button type="submit" class="btn btn-link">
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


    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-8">

                            <form action="{{url('user/update')}}" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" class="form-control user_id" name="user_id" >

                                <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control username" id="username"  name="username" >
                            </div>

                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control email" id="email" name="email">
                            </div>

                        </div>

                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    <div class="modal-footer">

                    </div>
                </div>
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

                    $(".user_table").on('click', '.edit', function () {

                        var currentRow=$(this).closest("tr");

                        var username =currentRow.find("td:eq(1)").text();
                        var email =  currentRow.find("td:eq(2)").text();
                        var userId =  currentRow.find("td:eq(4)").text();

                        $(".username").val(username);
                        $(".email").val(email);
                        $(".user_id").val(userId);

                        console.log(email);
                        console.log(username);

                    });


                });
            </script>
@stop