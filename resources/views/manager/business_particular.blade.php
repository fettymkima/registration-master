<div><h4 style="text-align: center">Bussiness Particulars</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_main_objective">State Briefly the main objective of the manager:</label>
                <textarea type="text" class="form-control" id="manager_main_objective" name="manager_main_objective"></textarea>
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_date_annual_meeting">Date of last Annual General Meeting:</label>
                <input type="text" class="form-control" id="manager_date_annual_meeting" name="manager_date_annual_meeting">
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_social_securities">List the Social Security.</label>
                <input type="text" class="form-control" id="manager_social_securities" name="manager_social_securities" >
            </div>

            <button type="submit" class="btn btn-success" id="save-create">Add</button>
            <button type="submit" class="btn btn-primary" id="save-create">Next</button>


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




