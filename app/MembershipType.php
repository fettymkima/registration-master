<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{



    protected $table ="membership_type";
    protected $primaryKey = 'membership_type_id';


    public static  function getMembershipType(){


        return MembershipType::all()->toArray();

    }

}
