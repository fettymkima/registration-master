@section('content_header')

    <link href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" type="text/css" rel="stylesheet">

@stop
<div><h4 style="text-align: center">Particulars of Proposed Board of Trustees</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label style="width: 100%;">First Name:</label> <br>
                    <input type="text" style="width: 100%;" class="form-control">
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label style="width: 100%;">Lastname Name:.</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="road">Nationality:</label>
                <input type="text" class="form-control" id="road" name="road" >
            </div>
        </div>

        <div class="col-md-4">

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label style="width: 100%;">City.</label> <br>
                    <input type="text" style="width: 100%;" class="form-control">
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label style="width: 100%;">Postal No.</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control">
                </div>
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
            <button type="submit" class="btn btn-success" id="save-create">Add +</button>


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




