<div><h4 style="text-align: center">General Details</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="{{url('manager')}}" method="post" >
        {{ csrf_field() }}

        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_name">Manager's Name:</label>
                <input type="text" class="form-control" id="manager_name" name="manager_name">
                @if ($errors->has('manager_name'))

                    <span class="text-danger">{{ $errors->first('manager_name') }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="manager_postal">Postal No.:</label>
                <input type="text" class="form-control" id="manager_postal" name="manager_postal">
                @if ($errors->has('manager_postal'))

                    <span class="text-danger">{{ $errors->first('manager_postal') }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="manager_phone">Phone No.:</label>
                <input type="text" class="form-control" id="manager_phone" name="manager_phone" >
                @if ($errors->has('manager_phone'))

                    <span class="text-danger">{{ $errors->first('manager_phone') }}</span>

                @endif
            </div>


            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">



            <div class="form-group">
                <label for="manager_fax">Fax:</label>
                <input type="text" class="form-control" id="manager_fax" name="manager_fax">
                @if ($errors->has('manager_fax'))

                    <span class="text-danger">{{ $errors->first('manager_fax') }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="manager_email">E-mail:</label>
                <input type="email" class="form-control" id="manager_email" name="manager_email">
                @if ($errors->has('manager_email'))

                    <span class="text-danger">{{ $errors->first('manager_email') }}</span>

                @endif
            </div>


        </div>


        <div class="col-md-4">

            <div class="form-group">
                <label for="manager_town">Town:</label>
                <input type="text" class="form-control" id="manager_town" name="manager_town">
                @if ($errors->has('manager_town'))

                    <span class="text-danger">{{ $errors->first('manager_town') }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="manager_road">Road:</label>
                <input type="text" class="form-control" id="manager_road" name="manager_road">
                @if ($errors->has('manager_road'))

                    <span class="text-danger">{{ $errors->first('manager_road') }}</span>

                @endif
            </div>


        <div class="form-group">
            <label for="manager_house_no">House No:</label>
            <input type="text" class="form-control" id="manager_house_no" name="manager_house_no" >
            @if ($errors->has('manager_house_no'))

                <span class="text-danger">{{ $errors->first('manager_house_no') }}</span>

            @endif
        </div>

        </div>
    </form>
</div>

@section('css')
    <style>

    </style>

    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>

        $(document).ready(function (e) {

            var tab  = $("#tab-selected").val();

            $('#myTab li:nth-child('+tab+') a').tab('show');


        });

    </script>
@stop

@section('js')
    <script>

    </script>
@stop




