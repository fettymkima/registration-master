@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 id="dash">Dashboard</h1>
@stop

@section('content')
    <div class="row" style="width: 100%;">

        <div class="col-md-3 col-sm-1 col-xs-12" style="width: 20%;">
            <div class="info-box bg-blue">
                <span class="info-box-icon" style="width: 30%;"><i class="fa fa-folder-open" style="font-size: 24px; margin: 5px;"></i></span>
                <div class="info-box-content" style="margin-left: 0; padding-left: 0;">
                    <span class="info-box-text">Scheme</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    70% Increase </span>
            </div>
        </div>

        <div class="col-md-3 col-sm-1 col-xs-12" style="width: 20%;">
            <div class="info-box bg-yellow">
                <span class="info-box-icon" style="width: 30%;"><i class="fa fa-folder-open" style="font-size: 24px; margin: 5px;"></i></span>
                <div class="info-box-content" style="margin-left: 0; padding-left: 0;">
                    <span class="info-box-text">Administrator</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    70% Increase</span>
            </div>
        </div>

        <div class="col-md-3 col-sm-1 col-xs-12" style="width: 20%;">
            <div class="info-box bg-red">
                <span class="info-box-icon" style="width: 30%;"><i class="fa fa-folder-open" style="font-size: 24px; margin: 5px;"></i></span>
                <div class="info-box-content" style="margin-left: 0; padding-left: 0;">
                    <span class="info-box-text">Manager</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    70% Increase</span>
            </div>
        </div>

        <div class="col-md-3 col-sm-1 col-xs-12" style="width: 20%;">
            <div class="info-box bg-blue">
                <span class="info-box-icon" style="width: 30%;"><i class="fa fa-folder-open" style="font-size: 24px; margin: 5px;"></i></span>
                <div class="info-box-content" style="margin-left: 0; padding-left: 0;">
                    <span class="info-box-text">Custodian</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    70% Increase</span>
            </div>
        </div>

        <div class="col-md-3 col-sm-1 col-xs-12" style="width: 20%;">
            <div class="info-box bg-green">
                <span class="info-box-icon" style="width: 30%;"><i class="fa fa-folder-open" style="font-size: 24px; margin: 5px;"></i></span>
                <div class="info-box-content" style="margin-left: 0; padding-left: 0;">
                    <span class="info-box-text">CHF</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                    70% Increase</span>
            </div>
        </div>

        </div>



        @stop

        @section('css')


        @stop

        @section('js')
            <script src="/complaints/js/chart.js"></script>
            <script src="/complaints/js/line.js"></script>
            <script src="/complaints/js/complaints_count.js"></script>
            <script src="/complaints/js/complaints_thismonth.js"></script>

            <script src="/complaints/js/complaint_byscheme.js"></script>



        @stop
    </div>


