@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))

                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div> <!-- end .flash-message -->

    {{--get the tab selected from the controller in order to show it.--}}
    {{--<input type="hidden"  value="{{$tab}}" id="tab-selected">--}}
    {{--end get tab value--}}

    <ul class="nav nav-tabs" id="myTab">
        <li class="active">
            <a  href="#1" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>General</a>
        </li>
        <li><a href="#2" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>Managment</a>
        </li>
        <li><a href="#3" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>Directors</a>
        </li>
        <li><a href="#4" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>Managment</a>
        </li>
        <li><a href="#5" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>Auditor,Legal,Bankers</a>
        </li>
        <li><a href="#6" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span> Capital</a></li>
        <li><a href="#7" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>Bussiness Particulars</a></li>
        <li><a href="#8" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span>Attachment</a></li>

    </ul>

    <div class="tab-content" style="  border-left: 1px solid #ddd;
        border-right: 1px solid #ddd; border-bottom: 1px solid #ddd;
        padding: 10px;" >

        <div class="tab-pane active" id="1" style="background-color: white">
            @include('manager.general',compact('edit_complaints'))

        </div>

        <div class="tab-pane" id="2" style="background-color: white">

            {{--@include('complaints.open',compact('open_complaints'))--}}

        </div>

        <div class="tab-pane" id="3" style="background-color: white">

            {{--@include('complaints.pending',compact('pending_complaints'))--}}

        </div>

        <div class="tab-pane" id="4" style="background-color: white;">

            {{--@include('complaints.closed',compact('closed_complaints'))--}}

        </div>
        <div class="tab-pane" id="5" style="background-color: white;">

            {{--@include('complaints.closed',compact('closed_complaints'))--}}

        </div>
        <div class="tab-pane" id="6" style="background-color: white;">

            {{--@include('complaints.closed',compact('closed_complaints'))--}}

        </div>
        <div class="tab-pane" id="7" style="background-color: white;">

            {{--@include('complaints.closed',compact('closed_complaints'))--}}

        </div>
        <div class="tab-pane" id="8" style="background-color: white;">

            {{--@include('complaints.closed',compact('closed_complaints'))--}}

        </div>

        <div class="tab-pane" id="5" style="background-color: white;">

            {{--@include('complaints.closed',compact('closed_complaints'))--}}

        </div>


    </div>

@stop

@section('css')

    <style>
        table.table-bordered{
            border:1px ;
            margin-top:20px;
        }
        table.table-bordered > thead > tr > th{
            border:1px ;
        }
        table.table-bordered > tbody > tr > td{
            border:1px ;
        }
    </style>
@stop

@section('js')

    <script src="/complaints/js/tab_open.js"></script>
    <script src="/complaints/js/tab_edit.js"></script>
    <script src="/complaints/js/tab_pending.js"></script>
    <script src="/complaints/js/tab_closed.js"></script>

    <script>

        $(function (e) {

            var tab  = $("#tab-selected").val();

            $('#myTab li:nth-child('+tab+') a').tab('show');



        });
    </script>


@stop




