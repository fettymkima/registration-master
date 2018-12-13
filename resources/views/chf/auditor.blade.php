<div><h4 style="text-align: center">Particulars of Auditor</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">



            <div class="form-group">
                <label for="username">Auditor Name:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="postal">Phone Number.</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>

        </div>


        <div class="col-md-4">


            <div class="form-group">
                <label for="postal">Postal Address:</label>
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




