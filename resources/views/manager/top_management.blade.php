<div><h4 style="text-align: center">Particular of the Top management of the manager</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="fullname">Executive(Full Name):</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>

            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" id="designation" name="designation">
            </div>
        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="nationality" style="width: 100%;">Nationality:</label>

                <select class="form-control" id="nationality" name="nationality" style="width: 100%;">

                    @foreach($countries as $country)

                        <option class="form-control" value="{{$country['id']}}">{{$country['name']}}</option>

                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="address">Permanent Address:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

        </div>

        <div class="col-md-4">

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label for="date_of_appointment" style="width: 100%;">Date of appointment</label> <br>
                    <input type="text" style="width: 100%;" class="form-control" name="date_of_appointment">
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label for="year_experience" style="width: 100%;">Years  of expirience</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control" name="year_experience">
                </div>
            </div>

            <div class="form-group">
                <label for="academic_qualification">Academic and Professional Qualifications:</label>
                <input type="text" class="form-control" id="academic_qualification" name="academic_qualification" >
            </div>

            <button type="submit" class="btn btn-primary" id="save-create">Next</button>

            <button type="submit" class="btn btn-success" id="save-create">Add </button>

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




