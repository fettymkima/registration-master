<div><h4 style="text-align: center">Management</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="{{action('Registration\ManagerController@storeManagementParticular')}}" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_date_incorporation">Date Of Incorporation:</label>
                <input type="text" class="form-control" id="manager_date_incorporation" name="manager_date_incorporation">
            </div>

            <div class="form-group">
                <label for="manager_tin">Income Tax PIN No.:</label>
                <input type="text" class="form-control" id="manager_tin" name="manager_tin">
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="manager_cert_incorporation">Incorporation Certificate. No.:</label>
                <input type="text" class="form-control" id="manager_cert_incorporation" name="manager_cert_incorporation" >
            </div>

            <div class="form-group">
                <label for="manager_ref_no_income">Income Tax Reference No.:</label>
                <input type="text" class="form-control" id="manager_ref_no_income" name="manager_ref_no_income">
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




