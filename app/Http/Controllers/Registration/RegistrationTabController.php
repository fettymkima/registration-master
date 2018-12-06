<?php

namespace App\Http\Controllers\Registration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationTabController extends Controller
{
    public function tabRegister()
    {
        return view('registration.registration_tab');
    }

    public function tabView()
    {
        return view('registration.registration_view_tab');
    }



}
