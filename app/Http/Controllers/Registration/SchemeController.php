<?php

namespace App\Http\Controllers\Registration;

use App\Category;
use App\Country;
use App\EmployerParticular;
use App\MembershipType;
use App\Scheme;
use App\SchemeBoard;
use App\SchemeType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SchemeController extends Controller
{
    public function index($tab)
    {
        $categories =  Category::getCategory();
        $membership_types =  MembershipType::getMembershipType();
        $scheme_types =  SchemeType::schemeType();
        $countries =  Country::getCountries();
        return view('scheme.scheme_tab',compact('tab','countries','categories','membership_types','scheme_types'));

    }

    public  function schemeTab($tab){

        $categories =  Category::getCategory();
        $membership_types =  MembershipType::getMembershipType();
        $scheme_types =  SchemeType::schemeType();
        $countries =  Country::getCountries();

        return view('scheme.scheme_tab',compact('tab','countries','categories','membership_types','scheme_types'));

    }


    public function schemeDetails()
    {
        return view('scheme.scheme_details');

    }


    public function failedScheme()
    {
        return view('scheme.failed_application');
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
        //general details validations............
        $this->generalDetailsValidations($request);

        $scheme = new Scheme();
        $scheme->scheme_name =  $request->get("scheme_name");
        $scheme->scheme_type_id =  $request->get("scheme_type");
        $scheme->town =  $request->get("town");
        $scheme->road =  $request->get("road");
        $scheme->plot_no =  $request->get("plot_no");
        $scheme->category_id =  $request->get("category_name");
        $scheme->membership_type_id =  $request->get("membership_type");
        $scheme->postal =  $request->get("postal");
        $scheme->phone_number =  $request->get("phone_no");
        $scheme->fax =  $request->get("fax");
        $scheme->email =  $request->get("email");
        $scheme->no_members =  $request->get("no_members");
        $scheme->no_workforce =  $request->get("no_workforce");
        $scheme->is_incompliance =  $request->get("compliance");
        $scheme->tin_number =  $request->get("taxno");
        $scheme->formula_vesting =  $request->get("vesting_formua");
        $scheme->formula_employee =  $request->get("contribution_formula_employee");
        $scheme->formula_employer =  $request->get("contribution_formula_employer");
        $scheme->is_irrevocable =  $request->get("irrevocable");

        $success = $scheme->save();

        if ($success)
        {

            Session::flash('alert-success', $request->get('general-success').'General Details successful saved');
        }

        else
        {

           return  redirect("scheme/tab/1");

        }

        $scheme_id =  Scheme::orderBy('scheme_id','desc')->first()->scheme_id;

        Session::put('scheme_id', $scheme_id);

        return redirect("scheme/tab/2");
    }


    public function  storeEmployersParticulars(Request $request){


        //general details validations............
        $this->employerParticularsValidations($request);


        $scheme = new EmployerParticular();

        $scheme->employer_name =  $request->get("employer_name");
        $scheme->employer_plot =  $request->get("plot_no");
        $scheme->employer_city =  $request->get("city");
        $scheme->employer_road =  $request->get("road");
        $scheme->employer_postal =  $request->get("postal");
        $scheme->employer_phone =  $request->get("phone");
        $scheme->employer_email =  $request->get("email");
        $scheme->employer_tin =  $request->get("tin_no");
        $scheme->employer_fax =  $request->get("fax_no");
        $scheme->no_members =  $request->get("no_member");

        $scheme->scheme_id  = Session::get('scheme_id');

        $success = $scheme->save();

        if ($success){

            Session::flash('alert-success', $request->get('general-success').'Employer  Details successful saved');
        }

        else {

            return  redirect("scheme/tab/2");

        }

        return redirect("scheme/tab/3");



    }

    public function  schemeBoard(Request $request){


        //general details validations............
        $this->schemeBoardValidations($request);


        $scheme = new SchemeBoard();

        $scheme->representation_type_id =  $request->get("representation_type");
        $scheme->firstname =  $request->get("firstname");
        $scheme->surname =  $request->get("lastname");
        $scheme->postal =  $request->get("postal");
        $scheme->city =  $request->get("city");
        $scheme->phone =  $request->get("phone");
        $scheme->nationality_id =  $request->get("nationality");
        $scheme->occupation =  $request->get("occupation");

        $success = $scheme->save();

        if ($success){

            Session::flash('alert-success', $request->get('general-success').'Board  Member successful saved');
        }

        else {

            return  redirect("scheme/tab/3");

        }

        return redirect("scheme/tab/4");

    }


    private function  generalDetailsValidations(Request $request){

        $request->validate([

            'scheme_name' => 'required',
            'scheme_type' => 'required',
            'town' => 'required',
            'road' => 'required',
            'plot_no' => 'required',
            'category_name' => 'required',
            'membership_type' => 'required',
            'postal' => 'required',
            'phone_no' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'no_workforce' => 'required',
            'compliance' => 'required',
            'taxno' => 'required',
            'vesting_formua' => 'required',
            'contribution_formula_employee' => 'required',
            'contribution_formula_employer' => 'required',
            'irrevocable' => 'required',
            'no_members'=>'required',

        ]);

    }


    private function  employerParticularsValidations(Request $request)
    {

        $request->validate([

            'employer_name' => 'required',
            'plot_no' => 'required',
            'city' => 'required',
            'road' => 'required',
            'postal' => 'required',
            'phone' => 'required',
            'fax_no' => 'required',
            'email' => 'required',
            'tin_no' => 'required',
            'no_member' => 'required'

        ]);
    }
    private function  schemeBoardValidations(Request $request)
    {

        $request->validate([

            'firstname' => 'required',
            'lastname' => 'required',
            'nationality' => 'required',
            'city' => 'required',
            'postal' => 'required',
            'occupation' => 'required',
//            'appointment_date' => 'required',
            'representation_type' => 'required',


        ]);
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

    public function schemeRegister()
    {
        return view('scheme.general', compact('scheme'));

    }
}
