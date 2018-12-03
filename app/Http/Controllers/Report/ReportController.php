<?php

namespace App\Http\Controllers\Report;

use App\ComplaintType;
use App\Http\Controllers\Controller;
use App\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Jaspersoft\Client\Client;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public  function selectReport()
    {
        $report_names =  DB::table('report_config')->select('id','report_name','report_orientation')->get();

        return view('reports.select_report',compact('report_names'));

    }

    public function getReport($id)
    {
        $report_data = DB::table('report_config')->select('*')->where('id', '=',$id)->get();

        $server = new Client('http://localhost:8080/jasperserver', 'jasperadmin', 'jasperadmin' );


        if ($report_data[0]->has_param==0)
        {
            $report = $server->reportService()->runReport($report_data[0]->resource_url, 'pdf',null,null);

            header('Content-type:application/pdf');
            echo $report;
        }

        $schemes =  Scheme::getSchemes();
        $complaint_types =  ComplaintType::getComplaintType();

        Session::put('id', $id);


        return view('reports.params', compact('report_data','schemes','complaint_types'));
    }

    public function paramReport(Request $request)
    {

        $id = Session::get('id');
        $report_data = DB::table('report_config')->select('resource_url')->where('id', '=',$id)->get();

        $input_control = $request->get('data');

        $server = new Client('http://localhost:8080/jasperserver', 'jasperadmin', 'jasperadmin' );


        $report = $server->reportService()->runReport($report_data[0]->resource_url, 'pdf', null, null, $input_control);

            header('Content-type:application/pdf');
            echo $report;

    }
}
