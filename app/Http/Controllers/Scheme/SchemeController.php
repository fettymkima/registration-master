<?php

namespace App\Http\Controllers\Scheme;

use App\Scheme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SchemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schemeTypes = $this->getAllSchemeType();
        return view('schemeType.create', with(['schemeTypes'=>$schemeTypes]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schemeTypes  =  new Scheme();
        $scheme_type_name = $request->get('scheme_type_name');

        $schemeTypes->scheme_type_name  = $scheme_type_name;

        if (Scheme::where('scheme_type_name', '=', $request->get('scheme_type_name'))->exists()) {
            Session::flash('alert-warning', $request->get('scheme_type_name').' Scheme Type Already Exists');
            return redirect('scheme-types/create');

        }

        $success =  $schemeTypes->save();

        if ($success)
        {
            Session::flash('alert-success', 'successful Sheme added');

        } else {
            Session::flash('alert-warning', 'Failed to add Scheme');

        }
        $schemeTypes  = $this->getAllSchemeType();
        return redirect('scheme-types/create');
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
    public function updates(Request $request)
    {
        $id  =  $request->get('id');

        $scheme_types =  Scheme::find($id);

        $scheme_types->scheme_type_name  =  $request->get('scheme_type_name');

//        dd($scheme_types);

        $success = $scheme_types->save();


        if ($success)
        {
            Session::flash('alert-success', 'successful Updated');

        } else {
            Session::flash('alert-warning', 'Failed to update, try again');

        }

        return redirect('scheme-types/create');

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

    public function getAllSchemeType()
    {
        $schemTypes = Scheme::all()->toArray();
        return $schemTypes;

    }
}
