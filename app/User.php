<?php

namespace App;

use App\Notifications\MailResetPasswordToken;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



 public  function  isloggedin(){

     return Auth::guest();
 }


    public function isAdmin()
    {
        return 1;
    }

    public static function token ()
    {
        return str_random(30);

    }

    public function  passwordGenerator(){

        $prefix = "ssra";
        $date = Carbon::now();
        $date  =substr($date,0,4);
        return bcrypt($prefix.".".$date);
    }

    public static function validFromToken($token)
    {
        return self::where('remember_token', $token)
            ->where('created_at', '>', Carbon::parse('-1 minutes'))
            ->firstOrFail();
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }


}
