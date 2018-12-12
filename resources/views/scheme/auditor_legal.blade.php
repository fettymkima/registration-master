<div><h4 style="text-align: center">Particulars of Auditor and Legal Advisor</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">
            <h5>Legal Advisor</h5>
            <div class="form-group">
                <label for="username">Name of Firm/Institution:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="postal">Tax Identification No.(TIN):</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>

            <div class="form-group">
                <label for="phone_no">City Address:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" >
            </div>

            <div class="form-group">
                <label for="fax">Postal Address:</label>
                <input type="text" class="form-control" id="fax" name="fax">
            </div>

            <div class="form-group">
                <label for="email">Telephone No.:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="no_members">Fax No.:</label>
                <input type="text" class="form-control" id="no_members" name="no_members">
            </div>

        </div>

        <div class="col-md-4">
            <h5>legal Advisor</h5>

            <div class="form-group">
                <label for="no_workforce">Affiliated Professional Body:</label>
                <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <div class="form-group">
                <label for="no_workforce">Date of Appointment</label>
                <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <h5>Auditor</h5>
            <div class="form-group">
                <label for="username">Name of Firm/Institution:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="postal">Tax Identification No.(TIN):</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>

            <div class="form-group">
                <label for="phone_no">City Address:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" >
            </div>


        </div>

        <div class="col-md-4">
            <h5>Auditor</h5>

            <div class="form-group">
                <label for="fax">Postal Address:</label>
                <input type="text" class="form-control" id="fax" name="fax">
            </div>

            <div class="form-group">
                <label for="email">Telephone No.:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="no_members">Fax No.:</label>
                <input type="text" class="form-control" id="no_members" name="no_members">
            </div>

            <div class="form-group">
                <label for="no_workforce">Affiliated Professional Body:</label>
                <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <div class="form-group">
                <label for="no_workforce">Date of Appointment</label>
                <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Submit</button>

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




