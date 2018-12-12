<div><h4 style="text-align: center">General Details</h4></div>
<hr>
    <div class="row" style="margin-left: 10px; margin-top: 10px;">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div class="col-md-4">



                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>

                <div class="form-group">
                    <label for="postal">Postal No.:</label>
                    <input type="text" class="form-control" id="postal" name="email">
                </div>

                <div class="form-group">
                    <label for="phone_no">Phone No.:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >
                </div>

                <div class="form-group">
                    <label for="fax">Fax:</label>
                    <input type="text" class="form-control" id="fax" name="fax">
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="no_members">Proposed No. of members of Scheme:</label>
                    <input type="text" class="form-control" id="no_members" name="no_members">
                </div>

                <div class="form-group">
                    <label for="no_workforce">Total Number of Workforce:</label>
                    <input type="no_workforce" class="form-control" id="no_workforce" name="no_workforce">
                </div>
            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="scheme_name">Scheme's Name:</label>
                    <input type="text" class="form-control" id="scheme_name" name="scheme_name" >
                </div>

                <div class="form-group">
                    <label for="scheme_type">Type of the Scheme:</label>
                    <input type="text" class="form-control" id="scheme_type" name="scheme_type">
                </div>

                <div class="form-group">
                    <label for="town">Town/City:</label>
                    <input type="text" class="form-control" id="town" name="town">
                </div>


                <div class="form-group">
                    <label for="road">Road:</label>
                    <input type="text" class="form-control" id="road" name="road">
                </div>
                <div class="form-group">
                    <label for="plot_no">Plot No:</label>
                    <input type="text" class="form-control" id="plot_no" name="plot_no">
                </div>


                <div class="form-group">
                    <label for="category_name">What category?</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" >
                </div>

                <div class="form-group">
                    <label for="middle_name">Type of Membership:</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name">
                </div>


            </div>


            <div class="col-md-4">

                <div class="form-group">
                    <label for="surname">Is it in compliance with the Income Tax Act?</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>


                <div class="form-group">
                    <label for="postal">Is it established under irrevocable trust?</label>
                    <input type="text" class="form-control" id="postal" name="postal">
                </div>
                <div class="form-group">
                    <label for="residence">Tax Id. Number (TIN):</label>
                    <input type="text" class="form-control" id="residence" name="residence">
                </div>

                <div class="form-group">
                    <label for="postal">Proposed Vesting Formula:</label>
                    <input type="text" class="form-control" id="postal" name="postal">
                </div>
                <div class="form-group">
                    <label for="residence">Contribution Formula for employee:</label>
                    <input type="text" class="form-control" id="residence" name="residence">
                </div>

                <div class="form-group">
                    <label for="phone">Contribution Formula for employer:</label>
                    <input type="text" class="form-control" id="phone" name="phone">
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




