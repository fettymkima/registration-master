<?php

namespace App\Http\Controllers\Auth;

use App\Complainer;
use App\Complaint;
use App\ComplaintCount;
use App\ComplaintType;
use App\Http\Controllers\Controller;
use App\MembershipStatus;
use App\ReceiveMode;
use App\Scheme;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;






    protected function authenticated(Request $request, $user)
    {
        if (Auth::check() ) {// do your margic here
            return redirect()->route('dashboard');
        }

    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public  function  index()
    {
        if (Auth::check() ) {

            return redirect()->route('dashboard');
        }

    }



    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function loggedin(){

        echo Auth::guest();
    }

}
