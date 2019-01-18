<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>General Details</h4>

</div>
<hr>
    <div class="row">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="username">Executive (Full Name):</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="postal">Designation:</label>
                    <input type="text" class="form-control" id="postal" name="email">
                </div>


            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="phone_no">Permanent Address:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >
                </div>

                <div class="form-group">
                    <label for="surname">Nationality:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>


            </div>

            <div class="col-md-4">

                <div style="width: 100%; height:57px" class="form-group"  >

                    <div style="width: 50%; float: left;">
                    <label style="width: 100%;">Date of appointment</label> <br>
                    <input type="text" style="width: 100%;" class="form-control">
                    </div>
                    <div style="width: 45%; float: left; margin-left: 5%;">
                        <label style="width: 100%;">Years  of expirience</label> <br>
                        <input type="text" style="width: 100%;"  class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="residence">Academic and Professional Qualifications</label>
                    <input type="text" class="form-control" id="residence" name="residence">
                </div>

                <button  type="button" class="btn btn-success">Add +</button>

                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

        </form>
    </div>

@section('css')
    <style>

    </style>

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('css')
    <style>

    </style>
@stop

@section('js')
    <script>

    </script>
@stop




