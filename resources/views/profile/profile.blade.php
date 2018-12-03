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
            <form action="{{url('profile')}}" method="post">
                {{ csrf_field() }}
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profile_name">Profile Name:</label>
                    <input type="text" class="form-control" id="profile_name" name="profile_name" >
                </div>



                <button type="submit" class="btn btn-primary">Save</button>

    </div>
            </form>


            <div class="col-md-8">


                <table class="table table-striped table-condensed profile_table">
                    <tr><td colspan="12">User Details</td></tr>
                    <tr>
                        <th>#</th>
                        <th>Prifile Name</th>

                        <th>Actions</th>
                    </tr>
                    <tbody>

                    <?php $i =1; ?>
                    @foreach($profileData as $profile)
                        <tr class="user">
                            <td>{{$i}}</td>
                            <td class="name">{{$profile['profile_name']}}</td>

                            <td style="display: none">{{ $profile['id']}}</td>

                            <td><a href="#" data-toggle="modal" data-target="#edit" class="edit" >
                                    <span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td>
                                <form action="{{action('Admin\ProfileController@destroy',$profile['id'])}}" method="post">
                                    {{ csrf_field() }}
                                    <input name="_method" type="hidden"  value="DELETE">
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-link">
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

                            <form action="{{url('profile/update')}}" method="post">
                                {{ csrf_field() }}

                                <input type="hidden" class="form-control profile_id" name="profile_id" >

                                <div class="form-group">
                                <label for="profile">Profle Name:</label>
                                <input type="text" class="form-control profile_name" id="profile"  name="profile_name" >
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

                    $(".profile_table").on('click', '.edit', function () {

                        var currentRow=$(this).closest("tr");

                        var profile_id =currentRow.find("td:eq(0)").text();

                        var profile =currentRow.find("td:eq(1)").text();

                        $(".profile_name").val(profile);
                        $(".profile_id").val(profile_id);


                    });


                });
            </script>
@stop