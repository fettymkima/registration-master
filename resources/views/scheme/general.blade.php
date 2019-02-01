<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>General Details</h4>

</div>
<hr>
    <div class="row">
        <form action="{{url('scheme')}}" method="post" >
            {{ csrf_field() }}

            <div class="col-md-4">

                <div class="form-group">
                    <label for="scheme_name">Scheme's Name:</label>
                    <input type="text" class="form-control" id="scheme_name" name="scheme_name" >
                    @if ($errors->has('scheme_name'))

                        <span class="text-danger">{{ $errors->first('scheme_name') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="scheme_type">Type of the Scheme:</label>

                    <select class="form-control" id="category_name" name="scheme_type">

                        @foreach($scheme_types as $scheme_type)

                            <option class="form-control" value="{{$scheme_type['scheme_type_id']}}">{{$scheme_type['scheme_type_name']}}
                            </option>
                        @endforeach

                    </select>
                    @if ($errors->has('scheme_type'))

                        <span class="text-danger">{{ $errors->first('scheme_type') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="town">Town/City:</label>
                    <input type="text" class="form-control" id="town" name="town">
                    @if ($errors->has('town'))

                        <span class="text-danger">{{ $errors->first('town') }}</span>

                    @endif
                </div>


                <div class="form-group">
                    <label for="road">Road:</label>
                    <input type="text" class="form-control" id="road" name="road">
                    @if ($errors->has('road'))

                        <span class="text-danger">{{ $errors->first('road') }}</span>

                    @endif
                </div>
                <div class="form-group">
                    <label for="plot_no">Plot No:</label>
                    <input type="text" class="form-control" id="plot_no" name="plot_no">

                    @if ($errors->has('plot_no'))

                        <span class="text-danger">{{ $errors->first('plot_no') }}</span>

                    @endif
                </div>


                <div class="form-group">
                    <label for="category_name">What category?</label>
                    <select class="form-control" id="category_name" name="category_name">

                        @foreach($categories as $category)

                            <option class="form-control" value="{{$category['category_id']}}">{{$category['category_name']}}
                            </option>
                        @endforeach

                    </select>

                    @if ($errors->has('category_name'))

                        <span class="text-danger">{{ $errors->first('category_name') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="membership_type">Type of Membership:</label>
                    <select class="form-control" id="membership_type" name="membership_type">

                        @foreach($membership_types as $membership_type)

                            <option class="form-control" value="{{$membership_type['membership_type_id']}}">{{$membership_type['membership_type_name']}}
                            </option>
                        @endforeach

                    </select>

                    @if ($errors->has('membership_type'))

                        <span class="text-danger">{{ $errors->first('membership_type') }}</span>

                    @endif
                </div>


            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="postal">Postal No.:</label>
                    <input type="text" class="form-control" id="postal" name="postal">
                    @if ($errors->has('postal'))

                        <span class="text-danger">{{ $errors->first('postal') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="phone_no">Phone No.:</label>
                    <input type="text" class="form-control" id="phone_no" name="phone_no" >

                    @if ($errors->has('phone_no'))

                        <span class="text-danger">{{ $errors->first('phone_no') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="fax">Fax:</label>
                    <input type="text" class="form-control" id="fax" name="fax">
                    @if ($errors->has('fax'))

                        <span class="text-danger">{{ $errors->first('fax') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @if ($errors->has('email'))

                        <span class="text-danger">{{ $errors->first('email') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="no_members">Proposed No. of members of Scheme:</label>
                    <input type="text" class="form-control" id="no_members" name="no_members">

                    @if ($errors->has('no_members'))

                        <span class="text-danger">{{ $errors->first('no_members') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="no_workforce">Total Number of Workforce:</label>
                    <input type="text" class="form-control" id="no_workforce" name="no_workforce">

                    @if ($errors->has('no_workforce'))

                        <span class="text-danger">{{ $errors->first('no_workforce') }}</span>

                    @endif
                </div>
            </div>


            <div class="col-md-4">


                <div class="form-group">
                    <label for="compliance">Is it in compliance with the Income Tax Act?</label><br>
                    <input type="checkbox" id="compliance" name="compliance" class="custom-control-input" style="width: 20px; height: 20px;">

                    @if ($errors->has('compliance'))

                        <span class="text-danger">{{ $errors->first('compliance') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="taxno">Tax Id. Number (TIN):</label>
                    <input type="text" class="form-control" id="taxno" name="taxno">
                    @if ($errors->has('taxno'))

                        <span class="text-danger">{{ $errors->first('taxno') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="vesting_formua">Proposed Vesting Formula:</label>
                    <input type="text" class="form-control" id="vesting_formua" name="vesting_formua">

                    @if ($errors->has('vesting_formua'))

                        <span class="text-danger">{{ $errors->first('vesting_formua') }}</span>

                    @endif
                </div>

                <div class="form-group">
                    <label for="contribution_formula_employee">Contribution Formula for employee:</label>
                    <input type="text" class="form-control" id="contribution_formula_employee" name="contribution_formula_employee">

                    @if ($errors->has('contribution_formula_employee'))

                        <span class="text-danger">{{ $errors->first('contribution_formula_employee') }}</span>

                    @endif

                </div>

                <div class="form-group">
                    <label for="contribution_formula_employer">Contribution Formula for employer:</label>
                    <input type="text" class="form-control" id="contribution_formula_employer" name="contribution_formula_employer">
                    @if ($errors->has('contribution_formula_employer'))

                        <span class="text-danger">{{ $errors->first('contribution_formula_employer') }}</span>

                    @endif

                </div>
                <div class="form-group">
                    <label for="irrevocable">Is it established under irrevocable trust?</label>

                    <select class="form-control" id="irrevocable" name="irrevocable">

                        <option value="1" class="form-control">Yes</option>
                        <option value="0" class="form-control">No</option>

                    </select>

                    @if ($errors->has('irrevocable'))

                        <span class="text-danger">{{ $errors->first('irrevocable') }}</span>

                    @endif
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


        $(document).ready(function (e) {


            $('#nationality').select2({
                placeholder: "Select country",
                allowClear: true
            });

            var tab  = $("#tab-selected").val();

            $('#myTab li:nth-child('+tab+') a').tab('show');


        });


    </script>
@stop




