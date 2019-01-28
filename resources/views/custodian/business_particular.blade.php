<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>Business Particulars</h4>

</div>
<hr>

<div class="row">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="username">State Briefly the main objective of the manager:</label>
                <textarea type="text" class="form-control" id="username" name="username"></textarea>
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="username">Date of last Annual General Meeting:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

        </div>

        <div class="col-md-4">

            <div class="form-group">
                <label for="phone_no">List the Social Security.</label>
                <input type="text" class="form-control" id="phone_no" name="phone_no" >
            </div>

            <button type="submit" class="btn btn-success" id="save-create">Add +</button>
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


