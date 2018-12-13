<div><h4 style="text-align: center">Management</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="username">Date Of Incorporation:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="postal">Income Tax PIN No.:</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="phone_no">Incorporation Certificate. No.:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" >
            </div>

            <div class="form-group">
                <label for="fax">Income Tax Reference No.:</label>
                <input type="text" class="form-control" id="fax" name="fax">
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




