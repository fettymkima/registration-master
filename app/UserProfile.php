<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Model
{
    public static function userProfileId()
    {
        $user_id = Auth::user()->id;
        $profile_id = UserProfile::where('user_id', $user_id)->pluck('profile_id')->first();
        return $profile_id;
    }
}
