<div><h4 style="text-align: center">General Details</h4></div>
<hr>
    <div class="row" style="margin-left: 10px; margin-top: 10px;">
        <form action="{{action('Registration\ChfController@storeChfDistrict')}}" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">

                <div class="form-group">
                    <label for="chf_district_name">Jina la Wilaya/Manispaa:</label>
                    <input type="text" class="form-control" id="chf_district_name" name="chf_district_name">
                </div>

                <div class="form-group">
                    <label for="chf_district_posta">Postal:</label>
                    <input type="text" class="form-control" id="chf_district_posta" name="chf_district_posta">
                </div>

                <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            </div>

            <div class="col-md-4">


                <div class="form-group">
                    <label for="chf_district_simu">Phone Nmber:</label>
                    <input type="text" class="form-control" id="chf_district_simu" name="chf_district_simu" >
                </div>

            </div>


            <div class="col-md-4">

                <div class="form-group">
                    <label for="chf_district_fax">Fax</label>
                    <input type="text" class="form-control" id="chf_district_fax" name="chf_district_fax">
                </div>


                <div class="form-group">
                    <label for="chf_district_email">Email:</label>
                    <input type="email" class="form-control" id="chf_district_email" name="chf_district_email">
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




