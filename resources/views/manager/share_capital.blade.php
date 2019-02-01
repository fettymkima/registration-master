<div><h4 style="text-align: center">Share Capital</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_share_autho">Total Authorized Capital:</label>
                <input type="text" class="form-control" id="manager_share_autho" name="manager_share_autho">
            </div>
            <button type="submit" class="btn btn-primary" id="save-create">Next</button>
        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_share_paid">Total Paid-up Capital</label>
                <input type="text" class="form-control" id="manager_share_paid" name="manager_share_paid" >
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




