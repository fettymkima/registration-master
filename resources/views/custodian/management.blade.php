<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>Top Management</h4>

</div>
<hr>
<div class="row">

    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="username">Date Of Incorporation:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="postal">Income Tax PIN No:</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="surname">Incorporation Certificate. No:</label>
                <input type="text" class="form-control" id="surname" name="surname">
            </div>

            <div class="form-group">
                <label for="postal">Income Tax Reference No:</label>
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




