@section('content_header')

    <link href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" type="text/css" rel="stylesheet">

@stop
<div><h4 style="text-align: center">Particulars of Proposed Board of Trustees</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>

            <div class="form-group">
                <label for="last_name">Lastname Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>

            <div class="form-group">
                <label for="road">Nationality:</label>
                <input type="text" class="form-control" id="road" name="road" >
            </div>

        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="city">City.</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>

            <div class="form-group">
                <label for="postal">Postal No.</label>
                <input type="text" class="form-control" id="postal" name="postal">
            </div>

            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="occupation" name="occupation" >
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="start_date">Date of Appointment:</label>
                <input autocomplete="off" type="text" class="form-control appointment_date" id="datepicker" name="appointment_date" >
            </div>

            <div class="form-group">
                <label for="represent_as">Represent as:</label>
                <input type="text" class="form-control" id="represent_as" name="represent_as">
            </div>


            <button type="submit" class="btn btn-primary" id="save-create">Submit</button>

        </div>

    </form>
</div>

@section('css')
    <style>

    </style>

@stop

@section('css')

@stop

@section('js')
    <script>

        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>


@stop




