@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4>{{ Breadcrumbs::render('form_search') }} </h4>

@stop

@section('content')

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    <div class="row">
            <div class="col-md-12">
    <label for="search">Advanced Search</label>
<input  type="text" placeholder="Search by complainer name,ssno,date,scheme" class="form-control" id="search">
            </div>


    </div>
    <div class="row">
        <div class="col-md-12" id="search-table-result">


        </div>
    </div>

        @stop

        @section('css')
            <style>
                .content-wrapper {
                    background-color:white;
                }
            </style>

        @stop

        @section('js')
            <script src="/complaints/js/search.js">

            </script>
@stop
