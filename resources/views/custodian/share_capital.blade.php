
<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>SHARE CAPITAL</h4>

</div>
<hr>
    <div class="row">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="username">Authorized Capital:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="postal">Paid-up Capital:</label>
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




