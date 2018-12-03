<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('admin');
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
        $role = $this->getAllRole();
        return view('role.create', with(['role'=>$role]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role  =  new Role();
        $role_name = $request->get('role_name');

        $role->role_name  = $role_name;

        if (Role::where('role_name', '=', $request->get('role_name'))->exists()) {
            Session::flash('alert-warning', $request->get('role_name').' Role Already Exists');
            return redirect('role/create');

        }

        $success =  $role->save();

        if ($success)
        {
            Session::flash('alert-success', 'successful Role added');

        } else {
            Session::flash('alert-warning', 'Failed to add Role');

        }
        $role  = $this->getAllRole();
        return redirect('role/create');


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
        $editRole = Role::find($id);
        return view('role.edit',compact('editRole','id'));

    }

    public function updates(Request $request)
    {
        $id = $request->get('role_id');
        $editRole= Role::find($id);
        $editRole->role_name=$request->get('role_name');
       $success = $editRole->save();
        if ($success)
        {
            Session::flash('alert-success', 'successful Role updated');

        } else {
            Session::flash('alert-warning', 'Failed to update Role');

        }

        return redirect('role/create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleteRole = Role::find($id);
       $success = $deleteRole->delete();
        if ($success)
        {
            Session::flash('alert-success', 'successful Role eleted');

        } else {
            Session::flash('alert-warning', 'Failed to delete Role');
        }
        return redirect('role/create');
    }

    public function getAllRole()
    {
        $role = Role::all()->toArray();
        return $role;
    }
}
