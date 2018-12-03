@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 id="dash">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box complaints-counts" id="open-counts">
                <span class="info-box-icon bg-red"><i class="fa fa-folder-open "></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Open Complaints</span>
                    <span class="info-box-number" id="open"></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box complaints-counts" id="pending-counts">
                <span class="info-box-icon bg-yellow"><i class="fa fa-adjust"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pending Complaints</span>
                    <span class="info-box-number" id="pending"></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box complaints-counts" id="closed-counts">
                <span class="info-box-icon bg-green"><i class="fa  fa-lock"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Closed Complaints</span>
                    <span class="info-box-number" id="closed"></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-5 col-xs-12" style="">
            <div class="info-box complaints-counts">
                <span class="info-box-icon bg-aqua"><i class="fa-sum"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Complaints</span>
                    <span class="info-box-number" id="total"></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" style="">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Complaints By Line Graph</h3>
                    <div class="btn-group">
                        <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(0);" id="open-graph">Open Complaints Graph</a></li>
                            <li><a  href="javascript:void(0);" id="pending-graph"> Pending Complaints Graph</a></li>
                            <li><a  href="javascript:void(0);" id="closed-graph">Closed Complaints Graph</a></li>

                        </ul>
                    </div>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>complaints</strong>
                            </p>

                            <div class="chart" id="empty">
                                <!-- Sales Chart Canvas -->
                                <canvas  class="salesChart" style="height: 180px; width: 645px;" width="967" height="270"></canvas>
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Complaints  Pie Chart</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="chart-responsive">
                                                <canvas id="pieChart" height="150">

                                                </canvas>
                                            </div>
                                            <!-- ./chart-responsive -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-4">
                                            <ul class="chart-legend clearfix">
                                                <li><i class="fa fa-circle-o text-red"></i> Open</li>
                                                <li><i class="fa fa-circle-o text-yellow"></i>Pending </li>
                                                <li><i class="fa fa-circle-o text-green"></i> Closed</li>

                                            </ul>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>

                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
    </div>
        {{--box panel for table --}}



        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body" style="">
                        <div class="box-header with-border">
                            <h3 class="box-title">Summary of the Complaints (by Schemes)</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-condensed bootstrap-datatable datatable dataTable" id="summarybyscheme">
                            <tr onclick="">
                                <th>#</th>
                                <th role="columnheader" class="sorting">Name of Scheme</th>
                                <th>Open Complaints</th>
                                <th>Pending Complaints</th>
                                <th>Closed Complaints</th>
                                <th>Tota Complaints</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

{{--complaints this month--}}

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body" style="">
                    <div class="box-header with-border" style="background-color:#3C8DBC;color:white; ">
                        <h3 class="box-title" >Complaints This month</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>

                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>

                    <table class="table table-striped table-hover table-bordered" id="thismonth">
                        <tr>
                            <td>Open Complaints</td>
                            <td>Pending Complaints</td>
                            <td>Closed Complaints</td>
                            <td>Total Complaints</td>

                        </tr>

                        <tr>
                            <td id="open-thismonth"></td>
                            <td id="pending-thismonth"></td>
                            <td id="closed-thismonth"></td>
                            <td id="total-thismonth"></td>

                        </tr>
                    </table>


                </div>
            </div>
        </div>
    </div>



        @stop

        @section('css')
            <style>
                .content {
                    background-color:#ECF0F5;

                }

                .fa-sum:before {
                    content: "\03a3";
                    font-family: sans-serif;
                }

                .complaints-counts:hover{

                    background-color: whitesmoke;

                }


            </style>

        @stop

        @section('js')
            <script src="/complaints/js/chart.js"></script>
            <script src="/complaints/js/line.js"></script>
            <script src="/complaints/js/complaints_count.js"></script>
            <script src="/complaints/js/complaints_thismonth.js"></script>

            <script src="/complaints/js/complaint_byscheme.js"></script>

            <script>

                $(function (e) {


                    $("#open-counts").click(function (ex) {

                        window.location.href = "<?php
                            use Illuminate\Support\Facades\URL;
                            $tab =  2;
                        echo URL::to('complaint/tab',$tab); ?>";

                    });

                    $("#pending-counts").click(function (ex) {

                        window.location.href = "<?php
                            $tab =  3;
                            echo URL::to('complaint/tab',$tab); ?>";

                    });
                    $("#closed-counts").click(function (ex) {

                        window.location.href = "<?php
                            $tab =  4;
                            echo URL::to('complaint/tab',$tab); ?>";

                    });


                });
            </script>


@stop
    </div>


