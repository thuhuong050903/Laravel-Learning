<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "products";

    public function type_products() 
    {
        return $this -> belongsTo('App\typeProduct');
        # code...
    }

    public function bill_detail()
    {
        return $this -> hasMany('App\bill_detail');
        # code...
    }

    public function comment()
    {
        return $this -> hasMany('App\comment');
        # code...
    }

}
