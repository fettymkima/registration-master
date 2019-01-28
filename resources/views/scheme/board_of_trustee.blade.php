<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>Particulars of Proposed Board of Trustees</h4>

</div>

<div class="row">
    <form action="{{action('Registration\SchemeController@schemeBoard')}}" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label style="width: 100%;">First Name:</label> <br>
                    <input type="text" style="width: 100%;" class="form-control" name="firstname">
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label style="width: 100%;">Lastname Name:.</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control" name="lastname">
                </div>
            </div>

            <div class="form-group" style="width: 100%; float: left;">
                <label for="nationality" style="width: 100%;">Nationality:</label>

                <select class="form-control" id="nationality" name="nationality" style="width: 100%;">

                    @foreach($countries as $country)

                        <option class="form-control" value="{{$country['id']}}">{{$country['name']}}</option>

                    @endforeach

                </select>
            </div>
        </div>

        <div class="col-md-4">

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label style="width: 100%;">City.</label> <br>
                    <input type="text" style="width: 100%;" class="form-control" name="city">
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label style="width: 100%;">Postal No.</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control" name="postal">
                </div>
            </div>


            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="occupation" name="occupation" >
            </div>

        </div>

        <div class="col-md-4">




            <div class="form-group">
                <label for="start_date">Date of Appointment:</label>
                <input autocomplete="off" type="text" class="form-control appointment_date" id="datepicker" name="appointment_date" >
            </div>

            <div class="form-group">
                <label for="represent_as">Represent as:</label>
                <input type="text" class="form-control" id="represent_as" name="representation_type">
            </div>


            <button type="submit" class="btn btn-primary" id="save-create">Next</button>
            <button type="submit" class="btn btn-success" id="save-create">Add +</button>


        </div>

    </form>
</div>

@section('css')
    <style>

    </style>

@stop

@section('css')

@stop

@section('js')



@stop