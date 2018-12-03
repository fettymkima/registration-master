<?php

namespace App\Http\Controllers\Admin;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
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
        return view('profile.view');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profileData  = $this->getAllProfile();
        return view('profile.profile',with(['profileData'=>$profileData]));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $profile  = new Profile();

        $profile->profile_name = $request->get('profile_name');

        if (Profile::where('profile_name', '=', $request->get('profile_name'))->exists()) {

            Session::flash('alert-warning', $request->get('profile_name').' Already Exists');
            return redirect('profile/create');
        }
        $success = $profile->save();


        if ($success)
        {
            Session::flash('alert-success', 'successful Updated');

        } else {
            Session::flash('alert-warning', 'Failed to update, try again');

        }

        return redirect('profile/create');


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

        $id  =  $request->get('profile_id');

        $profile =  Profile::find($id);

        $profile->profile_name  = $request->get('profile_name');

        $success = $profile->save();

        if ($success)
        {
            Session::flash('alert-success', 'successful Updated');

        } else {
            Session::flash('alert-warning', 'Failed to update, try again');

        }

        return redirect('user/register');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile =  Profile::find($id);

        $success = $profile->delete();


        if ($success)
        {
            Session::flash('alert-success', 'successful Deleted');

        } else {
            Session::flash('alert-warning', 'Failed to update, try again');

        }

        return redirect('profile/create');

    }

    public function getAllProfile()
    {
        $profile =  Profile::all()->toArray();
        return $profile;
    }
}
