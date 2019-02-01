<div><h4 style="text-align: center">General Details</h4></div>
<hr>
    <div class="row" style="margin-left: 10px; margin-top: 10px;">
        <form action="{{url('chf')}}" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">



                <div class="form-group">
                    <label for="chf_name">Scheme Name:</label>
                    <input type="text" class="form-control" id="chf_name" name="chf_name">
                </div>

                <div class="form-group">
                    <label for="chf_city">City:</label>
                    <input type="text" class="form-control" id="chf_city" name="chf_city" >
                </div>
                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="chf_postal">Postal No.:</label>
                    <input type="text" class="form-control" id="chf_postal" name="chf_postal">
                </div>

                <div class="form-group">
                    <label for="chf_plot">Plot No:</label>
                    <input type="text" class="form-control" id="chf_plot" name="chf_plot" >
                </div>

            </div>


            <div class="col-md-4">

                <div class="form-group">
                    <label for="chf_phone">Phone Number:</label>
                    <input type="text" class="form-control" id="chf_phone" name="chf_phone">
                </div>


                <div class="form-group">
                    <label for="chf_act">Sheria inayoanzisha mfuko:</label>
                    <input type="text" class="form-control" id="chf_act" name="chf_act">
                </div>


                <div class="form-group">
                    <label for="chf_contribution">Kiwango cha Uchangiaji:</label>
                    <input type="text" class="form-control" id="chf_contribution" name="chf_contribution">
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

        $(document).ready(function (e) {

            var tab  = $("#tab-selected").val();

            $('#myTab li:nth-child('+tab+') a').tab('show');


        });

    </script>
@stop




