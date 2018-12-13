<div><h4 style="text-align: center">General Details</h4></div>
<hr>
    <div class="row" style="margin-left: 10px; margin-top: 10px;">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">



                <div class="form-group">
                    <label for="username">Scheme Name:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="phone_no">City:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >
                </div>
                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="postal">Postal No.:</label>
                    <input type="text" class="form-control" id="postal" name="email">
                </div>

                <div class="form-group">
                    <label for="scheme_name">Plot No:</label>
                    <input type="text" class="form-control" id="scheme_name" name="scheme_name" >
                </div>

            </div>


            <div class="col-md-4">

                <div class="form-group">
                    <label for="scheme_type">Phone Number:</label>
                    <input type="text" class="form-control" id="scheme_type" name="scheme_type">
                </div>


                <div class="form-group">
                    <label for="surname">Sheria inayoanzisha mfuko:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>


                <div class="form-group">
                    <label for="postal">Kiwango cha Uchangiaji:</label>
                    <input type="text" class="form-control" id="postal" name="postal">
                </div>

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




