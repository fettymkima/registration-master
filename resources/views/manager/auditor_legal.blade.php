<div><h4 style="text-align: center">Particulars of Auditor, Legal Advisor and Bankers</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="auditor_name">Name of Firm/Institution:</label>
                <input type="text" class="form-control" id="auditor_name" name="auditor_name">
            </div>

            <div class="form-group">
                <label for="auditor_tin">Income Tax PIN No.:</label>
                <input type="text" class="form-control" id="auditor_tin" name="auditor_tin">
            </div>

            <div class="form-group">
                <label for="auditor_postal">Postal Address.:</label>
                <input type="text" class="form-control" id="auditor_postal" name="auditor_postal" >
            </div>

            <div class="form-group">
                <label for="auditor_phone">Telephone No.:</label>
                <input type="text" class="form-control" id="auditor_phone" name="auditor_phone">
            </div>

            <div class="form-group">
                <label for="auditor_fax">Fax No.:</label>
                <input type="text" class="form-control" id="auditor_fax" name="auditor_fax">
            </div>

            <div class="form-group">
                <label for="affiliated_body">Affiliated Professional Body.:</label>
                <input type="text" class="form-control" id="affiliated_body" name="affiliated_body">
            </div>

            <div class="form-group">
                <label for="no_workforce">Total Number of Workforce:</label>
                <input type="text" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <div class="form-group">
                <label for="auditor_date_of_appointment">Date of Appointment:</label>
                <input type="text" class="form-control" id="auditor_date_of_appointment" name="auditor_date_of_appointment" >
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="banker_name">Name of Firm/Institution:</label>
                <input type="text" class="form-control" id="banker_name" name="banker_name">
            </div>

            <div class="form-group">
                <label for="banker_tin">Income Tax PIN No.:</label>
                <input type="text" class="form-control" id="banker_tin" name="banker_tin">
            </div>

            <div class="form-group">
                <label for="banker_postal">Postal Address.:</label>
                <input type="text" class="form-control" id="banker_postal" name="banker_postal" >
            </div>

            <div class="form-group">
                <label for="banker_phone">Telephone No.:</label>
                <input type="text" class="form-control" id="banker_phone" name="banker_phone">
            </div>

            <div class="form-group">
                <label for="banker_fax">Fax No.:</label>
                <input type="text" class="form-control" id="banker_fax" name="banker_fax">
            </div>

            <div class="form-group">
                <label for="affiliated_body">Affiliated Professional Body.:</label>
                <input type="text" class="form-control" id="affiliated_body" name="affiliated_body">
            </div>

            <div class="form-group">
                <label for="no_workforce">Total Number of Workforce:</label>
                <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <div class="form-group">
                <label for="banker_date_of_appointment">Date of Appointment:</label>
                <input type="text" class="form-control" id="banker_date_of_appointment" name="banker_date_of_appointment" >
            </div>

        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label for="legal_name">Name of Firm/Institution:</label>
                <input type="text" class="form-control" id="legal_name" name="legal_name">
            </div>

            <div class="form-group">
                <label for="legal_tin">Income Tax PIN No.:</label>
                <input type="text" class="form-control" id="legal_tin" name="legal_tin">
            </div>

            <div class="form-group">
                <label for="legal_postal">Postal Address.:</label>
                <input type="text" class="form-control" id="legal_postal" name="legal_postal" >
            </div>

            <div class="form-group">
                <label for="legal_phane">Telephone No.:</label>
                <input type="text" class="form-control" id="legal_phane" name="legal_phane">
            </div>

            <div class="form-group">
                <label for="legal_fax">Fax No.:</label>
                <input type="text" class="form-control" id="legal_fax" name="legal_fax">
            </div>

            <div class="form-group">
                <label for="affiliated_body">Affiliated Professional Body.:</label>
                <input type="text" class="form-control" id="affiliated_body" name="affiliated_body">
            </div>

            <div class="form-group">
                <label for="no_workforce">Total Number of Workforce:</label>
                <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
            </div>

            <div class="form-group">
                <label for="legal_date_of_appointment">Date of Appointment:</label>
                <input type="text" class="form-control" id="legal_date_of_appointment" name="legal_date_of_appointment" >
            </div>

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




