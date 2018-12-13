<div><h4 style="text-align: center">General Details</h4></div>
<hr>
    <div class="row" style="margin-left: 10px; margin-top: 10px;">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="username">Jina la Wilaya/Manispaa:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="postal">Postal:</label>
                    <input type="text" class="form-control" id="postal" name="email">
                </div>

                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

            <div class="col-md-4">


                <div class="form-group">
                    <label for="scheme_name">Phone Nmber:</label>
                    <input type="text" class="form-control" id="scheme_name" name="scheme_name" >
                </div>

            </div>


            <div class="col-md-4">

                <div class="form-group">
                    <label for="scheme_type">Fax</label>
                    <input type="text" class="form-control" id="scheme_type" name="scheme_type">
                </div>


                <div class="form-group">
                    <label for="surname">Email:</label>
                    <input type="text" class="form-control" id="surname" name="surname">
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




