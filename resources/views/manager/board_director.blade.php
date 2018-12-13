<div><h4 style="text-align: center">Board of Director</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="username">Director(Full Name):</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="form-group">
                <label for="postal">Nationality:</label>
                <input type="text" class="form-control" id="postal" name="email">
            </div>
            <button type="submit" class="btn btn-primary" id="save-create">Next</button>


        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="phone_no">Permanent Address:</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" >
            </div>

            <div class="form-group">
                <label for="fax">Occupation:</label>
                <input type="text" class="form-control" id="fax" name="fax">
            </div>
        </div>

        <div class="col-md-4">

                <div class="form-group">
                    <label for="phone_no">Date of Appointment:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >
                </div>

                <div class="form-group">
                    <label for="fax">No. of Shares held:</label>
                    <input type="text" class="form-control" id="fax" name="fax">
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




