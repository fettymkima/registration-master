
<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>General Details</h4>

</div>
<hr>
    <div class="row">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="username">Administrator Name:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="postal">Town:</label>
                    <input type="text" class="form-control" id="postal" name="email">
                </div>

                <div class="form-group">
                    <label for="phone_no">Road:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >
                </div>

                <div class="form-group">
                    <label for="fax">House No:</label>
                    <input type="text" class="form-control" id="fax" name="fax">
                </div>
                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="surname">Postal No:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>

                <div class="form-group">
                    <label for="postal">Phone No:</label>
                    <input type="text" class="form-control" id="postal" name="postal">
                </div>

                <div class="form-group">
                    <label for="residence">Fax</label>
                    <input type="text" class="form-control" id="residence" name="residence">
                </div>

                <div class="form-group">
                    <label for="postal">Email:</label>
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




