@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h4>{{ Breadcrumbs::render('form_search') }} </h4>

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning" role="alert">
                You dont have access to this page, please contract administrator
            </div>
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
