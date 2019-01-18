<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public static  function getCountries(){


        return Country::all()->toArray();

    }

}
