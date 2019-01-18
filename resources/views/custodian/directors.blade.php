<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>Board Of Directors</h4>

</div>
<hr>
<hr>
    <div class="row">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="username">Director (Full Name):</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="postal">Nationality:</label>
                    <input type="text" class="form-control" id="postal" name="email">
                </div>




            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="phone_no">Permanent Address:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >
                </div>

                <div class="form-group">
                    <label for="surname">Occupation:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>

            </div>


            <div class="col-md-4">
                <div class="form-group">
                    <label for="postal">Date of Appointment:</label>
                    <input type="text" class="form-control" id="postal" name="postal">
                </div>

                <div class="form-group">
                    <label for="residence">No. of Shares held</label>
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




