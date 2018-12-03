<?php

namespace App\Http\Controllers;

use App\Complaints;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function complaintsStatus()
    {

        $openComplaints = DB::table('complaints')
            ->where('complaint_status_id', '=', 1)->count();

        $pendingComplaints = DB::table('complaints')
            ->where('complaint_status_id', '=', 3)->count();

        $closedComplaints = DB::table('complaints')
            ->where('complaint_status_id', '=', 2)->count();
        $data= ['open'=>$openComplaints,'pending'=>$pendingComplaints,'closed'=>$closedComplaints];
        return response()->json($data,'200',['json']);
    }

    public function complaintsPerMonth()
    {

        $openComplaints = DB::table('complaints')
            ->where('complaint_status_id','=', 1)
            ->whereMonth('date_complaint','=',date('m'))->count();

        $pendingComplaints = DB::table('complaints')
            ->where('complaint_status_id', '=', 3)
            ->whereMonth('date_complaint','=',date('m'))->count();

        $closedComplaints = DB::table('complaints')
            ->where('complaint_status_id', '=', 2)
            ->whereMonth('date_complaint','=',date('m'))->count();


        $data= ['open'=>$openComplaints,'pending'=>$pendingComplaints,'closed'=>$closedComplaints];
        return response()->json($data,'200',['json']);
    }


    public  function complaintsBySchemePpf()
    {
        $data_ppf= (object) DB::select(" SELECT COUNT(complaint_status_name) AS ppf FROM vw_complaints WHERE scheme_name LIKE 'PPF%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS ppf FROM vw_complaints WHERE scheme_name LIKE 'PPF%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS ppf FROM vw_complaints WHERE scheme_name LIKE 'PPF%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS ppf FROM vw_complaints WHERE scheme_name LIKE 'PPF%'
" );

        $dataarray = ['PPF Pensions Fund'];
        foreach ($data_ppf as $data){
            array_push($dataarray,$data->ppf);
        }

        return $dataarray;

    }

   

    public  function complaintsBySchemePspf()
    {
        $data_Pspf= (object) DB::select(" SELECT COUNT(complaint_status_name) AS Pspf FROM vw_complaints WHERE scheme_name LIKE 'Pspf%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS Pspf FROM vw_complaints WHERE scheme_name LIKE 'Pspf%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS Pspf FROM vw_complaints WHERE scheme_name LIKE 'Pspf%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS Pspf FROM vw_complaints WHERE scheme_name LIKE 'Pspf%'
" );

        $dataarray = ['Public Service Pensions Fund'];
        foreach ($data_Pspf as $data){
            array_push($dataarray,$data->Pspf);
        }

        return $dataarray;

    }


    public  function complaintsBySchemewcf()
    {
        $data_wcf= (object) DB::select(" SELECT COUNT(complaint_status_name) AS wcf FROM vw_complaints WHERE scheme_name LIKE 'WCF%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS wcf FROM vw_complaints WHERE scheme_name LIKE 'WCF%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS wcf FROM vw_complaints WHERE scheme_name LIKE 'WCF%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS wcf FROM vw_complaints WHERE scheme_name LIKE 'WCF%'
" );

        $dataarray = ['Workers Compersation Fund'];
        foreach ($data_wcf as $data){
            array_push($dataarray,$data->wcf);
        }

        return $dataarray;

    }




    /*  getJsonAllComplaints  returns json that contains all total number of open,closed,pending, total complaints
      ....it is used to draw pie chart

    */
    public function  getJsonAllComplaintsPiechart(){

        $open_count = DB::table('complaints')->where('complaint_status_id','=',1)->count();
        $closed_count = DB::table('complaints')->where('complaint_status_id','=',2)->count();
        $pending_count = DB::table('complaints')->where('complaint_status_id','=',3)->count();

        $total_count = DB::table('complaints')->count();

        $data = array('open'=>$open_count,'pending'=>$pending_count,'closed'=>$closed_count,'total'=>$total_count);

        return response()->json($data)->header('Content-type','text/json');
    }


    //            array_push($array_data,$open->count_open);

    public function getJsonOpenComplaintsPerMonth(){

        $array_data = [];

        $array_data_months = [];

        $months  = [1,2,3,4,5,6,7,8,9,10,11,12];

        $data_open=  (object)DB::select(" SELECT COUNT(*) AS count_open,month(date_complaint) AS date 
                    FROM complaints WHERE YEAR(date_complaint) = '2018' AND complaint_status_id=1
                    GROUP BY month(date_complaint) 
                    ORDER BY month(date_complaint)  ASC" );

        foreach ($data_open as $data){

            array_push($array_data,$data->count_open);
            array_push($array_data_months,$data->date);
        }
        return response()->json(['open'=>$array_data,'date'=>$array_data_months])->header('Content-type','text/json');
    }

    public function getJsonPendingComplaintsPerMonth(){

        $array_data = [];

        $array_data_months = [];

        $months  = [1,2,3,4,5,6,7,8,9,10,11,12];

        $data_pending=  (object)DB::select(" SELECT COUNT(*) AS count_pending,month(date_complaint) AS date 
                    FROM complaints WHERE YEAR(date_complaint) = '2018' AND complaint_status_id=2
                    GROUP BY month(date_complaint) 
                    ORDER BY month(date_complaint)  ASC" );

        foreach ($data_pending as $data){

            array_push($array_data,$data->count_pending);
            array_push($array_data_months,$data->date);
        }
        return response()->json(['pending'=>$array_data,'date'=>$array_data_months])->header('Content-type','text/json');
    }

    public function getJsonClosedComplaintsPerMonth(){

        $array_data = [];

        $array_data_months = [];

        $months  = [1,2,3,4,5,6,7,8,9,10,11,12];

        $data_closed=  (object)DB::select(" SELECT COUNT(*) AS count_closed,month(date_complaint) AS date 
                    FROM complaints WHERE YEAR(date_complaint) = '2018' AND complaint_status_id=3
                    GROUP BY month(date_complaint) 
                    ORDER BY month(date_complaint)  ASC" );

        foreach ($data_closed as $data){

            array_push($array_data,$data->count_closed);
            array_push($array_data_months,$data->date);
        }
        return response()->json(['closed'=>$array_data,'date'=>$array_data_months])->header('Content-type','text/json');
    }

    public  function complaintsBySchemeGepf()
    {
        $data_gepf= (object) DB::select(" SELECT COUNT(complaint_status_name) AS gepf FROM vw_complaints WHERE scheme_name LIKE 'GEPF%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS gepf FROM vw_complaints WHERE scheme_name LIKE 'GEPF%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS gepf FROM vw_complaints WHERE scheme_name LIKE 'GEPF%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS gepf FROM vw_complaints WHERE scheme_name LIKE 'GEPF%'
" );

        $dataarray = ['GEPF Retirement Benefits Fund'];
        foreach ($data_gepf as $data){
            array_push($dataarray,$data->gepf);
        }

        return $dataarray;

    }


    public  function complaintsBySchemeLapf()
    {
        $data_lapf= (object) DB::select(" SELECT COUNT(complaint_status_name) AS lapf FROM vw_complaints WHERE scheme_name LIKE 'LAPF%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS lapf FROM vw_complaints WHERE scheme_name LIKE 'LAPF%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS lapf FROM vw_complaints WHERE scheme_name LIKE 'LAPF%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS lapf FROM vw_complaints WHERE scheme_name LIKE 'LAPF%'
" );

        $dataarray = ['LAPF Pensions Fund'];
        foreach ($data_lapf as $data){
            array_push($dataarray,$data->lapf);
        }

        return $dataarray;

    }

    public  function complaintsBySchemeNhif()
    {
        $data_nhif= (object) DB::select(" SELECT COUNT(complaint_status_name) AS nhif FROM vw_complaints WHERE scheme_name LIKE 'NHIF%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS nhif FROM vw_complaints WHERE scheme_name LIKE 'NHIF%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS nhif FROM vw_complaints WHERE scheme_name LIKE 'NHIF%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS nhif FROM vw_complaints WHERE scheme_name LIKE 'NHIF%'
" );

        $dataarray = ['National Health Insurance Fund'];
        foreach ($data_nhif as $data){
            array_push($dataarray,$data->nhif);
        }

        return $dataarray;

    }


    public  function complaintsBySchemeNssf()
    {
        $data_nssf= (object) DB::select(" SELECT COUNT(complaint_status_name) AS nssf FROM vw_complaints WHERE scheme_name LIKE 'NSSF%' AND complaint_status_name LIKE 'open%' UNION
SELECT COUNT(complaint_status_name) AS nssf FROM vw_complaints WHERE scheme_name LIKE 'NSSF%' AND complaint_status_name LIKE 'closed%' UNION
SELECT COUNT(complaint_status_name) AS nssf FROM vw_complaints WHERE scheme_name LIKE 'NSSF%' AND complaint_status_name LIKE 'pending%' UNION
SELECT COUNT(complaint_status_name) AS nssf FROM vw_complaints WHERE scheme_name LIKE 'NSSF%'
" );

        $dataarray = ['National Social Security Fund'];
        foreach ($data_nssf as $data){
            array_push($dataarray,$data->nssf);
        }


        return $dataarray;
    }

    public function summaryBySchemeApi()
    {
        $gepf = $this->complaintsBySchemeGepf();
        $lapf = $this->complaintsBySchemeLapf();
        $nhif = $this->complaintsBySchemeNhif();
        $nssf = $this->complaintsBySchemeNssf();
        $ppf = $this->complaintsBySchemePpf();
        $pspf =$this->complaintsBySchemePspf();
        $wcf = $this->complaintsBySchemewcf();

        $api = [$gepf,$lapf,$nhif,$nssf,$ppf,$pspf,$wcf];
        return response()->json($api)->header('Content-type', 'text/json');
    }


}
