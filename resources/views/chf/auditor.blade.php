<div><h4 style="text-align: center">Particulars of Auditor</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="{{action('Registration\ChfController@storeChfAuditor')}}" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="name_chf_auditors">Auditor Name:</label>
                <input type="text" class="form-control" id="name_chf_auditors" name="name_chf_auditors">
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="phone_chf_aditors">Phone Number.</label>
                <input type="text" class="form-control" id="phone_chf_aditors" name="phone_chf_aditors">
            </div>

        </div>


        <div class="col-md-4">


            <div class="form-group">
                <label for="postal_chf_auditors">Postal Address:</label>
                <input type="text" class="form-control" id="postal_chf_auditors" name="postal_chf_auditors">
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




