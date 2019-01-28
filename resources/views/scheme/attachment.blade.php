<div class="col-md-12" style="background-color: #2C435B; color: white; margin-bottom: 5px;">
    <h4>Attachment & Aggrements</h4>

</div>
<hr>

<div class="row">
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="scheme">Upload Document</label>
                <input type="file"  id="file-upload" name="letters[]" multiple  class="file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>


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




