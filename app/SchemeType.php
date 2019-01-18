<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchemeType extends Model
{
    protected $table  ="scheme_type";

    protected $primaryKey = 'scheme_type_id';


    public  static function schemeType(){

        return SchemeType::all()->toArray();

    }


}
