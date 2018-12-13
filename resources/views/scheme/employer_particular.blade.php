<div><h4 style="text-align: center">Employer(s) Particulars</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="employer_name">Name of Employer:</label>
                <input type="text" class="form-control" id="employer_name" name="employer_name">
            </div>

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label style="width: 100%;">Plot No.</label> <br>
                    <input type="text" style="width: 100%;" class="form-control">
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label style="width: 100%;">Road/St.</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="city">City.</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>

        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="postal">Postal No.</label>
                <input type="text" class="form-control" id="postal" name="postal">
            </div>

            <div class="form-group">
                <label for="phone">Telephone:</label>
                <input type="text" class="form-control" id="phone" name="phone" >
            </div>

            <div class="form-group">
                <label for="fax_no">Fax Number:</label>
                <input type="text" class="form-control" id="fax_no" name="fax_no">
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>


            <div class="form-group">
                <label for="tin_no">TIN No.:</label>
                <input type="text" class="form-control" id="tin_no" name="tin_no">
            </div>
            <div class="form-group">
                <label for="no_member">No. of Members in Service.</label>
                <input type="text" class="form-control" id="no_member" name="no_member">
            </div>


            <button type="submit" class="btn btn-primary" id="save-create">Submit</button>
            <button type="submit" class="btn btn-success" id="save-create">Add +</button>



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




