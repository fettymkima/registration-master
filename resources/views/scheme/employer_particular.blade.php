
<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>Employer(s) Particulars</h4>

</div>
<hr>

<div class="row">
    <form action="{{action('Registration\SchemeController@storeEmployersParticulars')}}" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="employer_name">Name of Employer:</label>
                <input type="text" class="form-control" id="employer_name" name="employer_name">
                @if ($errors->has('employer_name'))

                    <span class="text-danger">{{ $errors->first('employer_name') }}</span>

                @endif
            </div>

            <div style="width: 100%; height:57px" class="form-group"  >

                <div style="width: 50%; float: left;">
                    <label style="width: 100%;">Plot No.</label> <br>
                    <input type="text" style="width: 100%;" class="form-control" name="plot_no">
                    @if ($errors->has('plot_no'))

                        <span class="text-danger">{{ $errors->first('plot_no') }}</span>

                    @endif
                </div>
                <div style="width: 45%; float: left; margin-left: 5%;">
                    <label style="width: 100%;">Road/St.</label> <br>
                    <input type="text" style="width: 100%;"  class="form-control" name="road">
                    @if ($errors->has('road'))

                        <span class="text-danger">{{ $errors->first('road') }}</span>

                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="city">City.</label>
                <input type="text" class="form-control" id="city" name="city">
                @if ($errors->has('city'))

                    <span class="text-danger">{{ $errors->first('city') }}</span>

                @endif
            </div>

        </div>

        <div class="col-md-4">


            <div class="form-group">
                <label for="postal">Postal No.</label>
                <input type="text" class="form-control" id="postal" name="postal">
                @if ($errors->has('postal'))

                    <span class="text-danger">{{ $errors->first('postal') }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="phone">Telephone:</label>
                <input type="text" class="form-control" id="phone" name="phone" >
                @if ($errors->has('phone'))

                    <span class="text-danger">{{ $errors->first('phone') }}</span>

                @endif
            </div>

            <div class="form-group">
                <label for="fax_no">Fax Number:</label>
                <input type="text" class="form-control" id="fax_no" name="fax_no">
                @if ($errors->has('fax_no'))

                    <span class="text-danger">{{ $errors->first('fax_no') }}</span>

                @endif
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
                @if ($errors->has('email'))

                    <span class="text-danger">{{ $errors->first('email') }}</span>

                @endif
            </div>


            <div class="form-group">
                <label for="tin_no">TIN No.:</label>
                <input type="text" class="form-control" id="tin_no" name="tin_no">
                @if ($errors->has('tin_no'))

                    <span class="text-danger">{{ $errors->first('tin_no') }}</span>

                @endif
            </div>
            <div class="form-group">
                <label for="no_member">No. of Members in Service.</label>
                <input type="text" class="form-control" id="no_member" name="no_member">
                @if ($errors->has('no_member'))

                    <span class="text-danger">{{ $errors->first('no_member') }}</span>

                @endif
            </div>


            <button type="submit" class="btn btn-primary" id="save-create">Next</button>
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




