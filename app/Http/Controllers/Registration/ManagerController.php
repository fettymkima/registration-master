<?php

namespace App\Http\Controllers\Registration;

use App\BoardDirector;
use App\Country;
use App\Manager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public  function managerTab($tab)
    {
        $countries =  Country::getCountries();
        return view('manager.manager_tab', compact('tab', 'countries'));
    }

    public function managerDetails()
    {
        return view('manager.manager_details');

    }

    public function failedManager()
    {
        return view('manager.failed_application');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manager = new Manager();

        $manager->manager_name = $request->get("manager_name");
        $manager->manager_postal = $request->get("manager_postal");
        $manager->manager_phone = $request->get("manager_phone");
        $manager->manager_fax = $request->get("manager_fax");
        $manager->manager_email = $request->get("manager_email");
        $manager->manager_town = $request->get("manager_town");
        $manager->manager_road = $request->get("manager_road");
        $manager->manager_house_no = $request->get("manager_house_no");

        $success = $manager->save();

        if ($success)
        {
            Session::flash('alert-success', $request->get('general-success').'General Details successful saved');
        }

        else
        {
            return  redirect("manager/tab/1");
        }

        return redirect("manager/tab/2");
    }

    public function storeManagementParticular(Request $request)
    {
        $manager_id =  Manager::orderBy('manager_id','desc')->first()->manager_id;
        $mgt_particular =  Manager::find($manager_id);

        $mgt_particular->manager_date_incorporation = $request->get("manager_date_incorporation");
        $mgt_particular->manager_tin = $request->get("manager_tin");
        $mgt_particular->manager_cert_incorporation = $request->get("manager_cert_incorporation");
        $mgt_particular->manager_ref_no_income = $request->get("manager_ref_no_income");

        $success = $mgt_particular->save();

        if ($success){

            Session::flash('alert-success', $request->get('general-success').'Management  Details successful saved');
        }

        else {

            return  redirect("manager/tab/2");

        }

        return redirect("manager/tab/3");


    }

    public function storeDirectorDetails(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
