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
            <form action="{{url('role')}}" method="post">
                {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group">
                    <label for="role_name">Rolename:</label>
                    <input type="text" class="form-control" id="role_name" name="role_name" >
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
    </form>

            <div class="col-md-8">

                <table class="table table-striped table-bordered table-condensed" id="roleTable">
                    <tr><td colspan="12">Role Details</td></tr>
                    <tr>
                        <th>#</th>
                        <th> Role Name</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tbody>
                    <?php $i =1?>
                    @foreach($role as $roles)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{ $roles['role_name'] }}</td>
                            <td style="display: none">{{ $roles['id'] }}</td>
                            <td>{{ substr($roles['created_at'],0,10)}}</td>
                            <td><a href="#" class="glyphicon glyphicon-pencil edit" data-toggle="modal" data-target="#edit">
                                </a>
                            </td>
                            <td>
                                <form action="{{action('Admin\RoleController@destroy', $roles['id'])}}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-link">
                                        <span onClick="return confirm('Are you absolutely sure you want to delete user?')" class="glyphicon glyphicon-trash"></span>
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
                    <form action="{{url('role/update')}}" method="post">

                    {{ csrf_field() }}
                        <input type="hidden" class="form-control role_name role_id"  name="role_id" >

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="role_name">RoleName:</label>
                                    <input type="text" class="form-control role_name" id="role_name" name="role_name" >
                                </div>
                            </div>
                        </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
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
                $(document).ready(function()
                {
                    // code to read selected table row cell data (values).
                    $("#roleTable").on('click','.edit',function(){
                        // get the current row
                        var currentRow=$(this).closest("tr");

                        var roleName=currentRow.find("td:eq(1)").html(); // get current row 1st table cell TD value
                        var roleId=currentRow.find("td:eq(2)").html(); // get current row 1st table cell TD value

                        $(".role_name").val(roleName);
                        $(".role_id").val(roleId);



                    });
                });
            </script>

@stop