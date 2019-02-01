<div><h4 style="text-align: center">Board of Director</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="fullname">Director(Full Name):</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>

            <div class="form-group">
                <label for="nationality" style="width: 100%;">Nationality:</label>

                <select class="form-control" id="nationality" name="nationality" style="width: 100%;">

                    @foreach($countries as $country)

                        <option class="form-control" value="{{$country['id']}}">{{$country['name']}}</option>

                    @endforeach

                </select>
            </div>
            <button type="submit" class="btn btn-primary" id="save-create">Next</button>


        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="address">Permanent Address:</label>
                <input type="text" class="form-control" id="address" name="address" >
            </div>

            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="occupation" name="occupation">
            </div>
        </div>

        <div class="col-md-4">

                <div class="form-group">
                    <label for="date_of_appointment">Date of Appointment:</label>
                    <input type="text" class="form-control" id="date_of_appointment" name="date_of_appointment" >
                </div>

                <div class="form-group">
                    <label for="no_of_shares">No. of Shares held:</label>
                    <input type="text" class="form-control" id="no_of_shares" name="no_of_shares">
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




