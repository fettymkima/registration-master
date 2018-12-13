<div><h4 style="text-align: center">General Details</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="username">Manager's Name:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="postal">Postal No.:</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>

            <div class="form-group">
                <label for="phone_no">Phone No.:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" >
            </div>


            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">



            <div class="form-group">
                <label for="fax">Fax:</label>
                <input type="text" class="form-control" id="fax" name="fax">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>


        </div>


        <div class="col-md-4">

            <div class="form-group">
                <label for="town">Town:</label>
                <input type="text" class="form-control" id="town" name="town">
            </div>

            <div class="form-group">
                <label for="road">Road:</label>
                <input type="text" class="form-control" id="road" name="road">
            </div>


        <div class="form-group">
            <label for="scheme_name">House No:</label>
            <input type="text" class="form-control" id="scheme_name" name="scheme_name" >
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




