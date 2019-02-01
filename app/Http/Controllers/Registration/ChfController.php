<?php

namespace App\Http\Controllers\Registration;

use App\Chf;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ChfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chf.chf_tab');
    }

    public function chfTab($tab)
    {
        $countries =  Country::getCountries();
        return view('chf.chf_tab',compact('tab', 'countries'));
    }

    public function chfDetails()
    {
        return view('chf.chf_details');

    }

    public function failedchf()
    {
        return view('chf.failed_application');
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
        $chf = new Chf();
        $chf->chf_name = $request->get("chf_name");
        $chf->chf_city = $request->get("chf_city");
        $chf->chf_postal = $request->get("chf_postal");
        $chf->chf_plot = $request->get("chf_plot");
        $chf->chf_phone = $request->get("chf_phone");
        $chf->chf_act = $request->get("chf_act");
        $chf->chf_contribution = $request->get("chf_contribution");

        $success = $chf->save();

        if ($success)
        {
            Session::flash('alert-success', $request->get('general-success').'General Details successful saved');
        }

        else
        {
            return  redirect("chf/tab/1");
        }

//        return redirect("chf/tab/2");

        return redirect("chf/tab/2");
    }

    public function storeChfAuditor(Request $request)
    {
        $chf_id =  Chf::orderBy('chf_id','desc')->first()->chf_id;
        $chf_auditor =  Chf::find($chf_id);

        $chf_auditor->name_chf_auditors = $request->get("name_chf_auditors");
        $chf_auditor->phone_chf_aditors = $request->get("phone_chf_aditors");
        $chf_auditor->postal_chf_auditors = $request->get("postal_chf_auditors");

       $success = $chf_auditor->save();

        if ($success)
        {
            Session::flash('alert-success', $request->get('general-success').'General Details successful saved');
        }

        else
        {
            return  redirect("chf/tab/2");
        }

        return redirect("chf/tab/3");

    }

    public function storeChfDistrict(Request $request)
    {
        $chf_id =  Chf::orderBy('chf_id','desc')->first()->chf_id;
        $chf_district =  Chf::find($chf_id);
        $chf_district->chf_district_name = $request->get("chf_district_name");
        $chf_district->chf_district_posta = $request->get("chf_district_posta");
        $chf_district->chf_district_simu = $request->get("chf_district_simu");
        $chf_district->chf_district_fax = $request->get("chf_district_fax");
        $chf_district->chf_district_email = $request->get("chf_district_email");

        $success = $chf_district->save();

        if ($success)
        {

            Session::flash('alert-success', $request->get('general-success').'Chf District  Details successful saved');
        }

        else {

            return  redirect("chf/tab/3");

        }

        return redirect("chf/tab/4");

    }

    public function storeAttachment(Request $request)
    {

        $path = 'public'.'/Chf'.str_slug($request->name);
        if( is_array($request->link)){
            foreach ($request->link as $file) {
                $chf_id =  Chf::orderBy('chf_id','desc')->first()->chf_id;
                $chf_attachment =  Chf::find($chf_id);
                $chf_attachment->link = $file->getClientOriginalName();

                $success = $chf_attachment->save();

                if ($success)
                {

                    Session::flash('alert-success', $request->get('general-success').'Attachment successful saved');
                }

                else {

                    return  redirect("chf/tab/4");

                }

                Storage::putFileAs($path, $file, $file->getClientOriginalName());

                return redirect("chf/tab/1");

                // Or any custom name as the third argument
            }
        } else
        {
            $chf_id =  Chf::orderBy('chf_id','desc')->first()->chf_id;
            $chf_attachment =  Chf::find($chf_id);
            $chf_attachment->link = $request->link->getClientOriginalName();

            $success = $chf_attachment->save();

            if ($success)
            {

                Session::flash('alert-success', $request->get('general-success').'Attachment successful saved');
            }

            else
                {
                return  redirect("chf/tab/4");
                }

            Storage::putFileAs($path, $request->link, $request->link->getClientOriginalName());

            return  redirect("chf/tab/1");

            // Or any custom name as the third argument
        }
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
