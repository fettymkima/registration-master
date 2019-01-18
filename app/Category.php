<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table  ="category";

    protected $primaryKey = 'category_id';


    public static  function getCategory(){


        return Category::all()->toArray();

    }

}
