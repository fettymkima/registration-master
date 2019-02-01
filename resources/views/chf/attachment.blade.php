<div><h4 style="text-align: center">Attachements & Aggrements</h4></div>
<hr>
<div class="row" style="margin-left: 10px; margin-top: 10px;">
    <form action="{{action('Registration\ChfController@storeAttachment')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-4">

            <div class="form-group">
                <label for="link">CHF ACT</label>
                <input type="file"  id="file-upload" name="link[]" multiple  class="file">
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




