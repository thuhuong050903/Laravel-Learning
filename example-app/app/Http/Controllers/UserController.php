<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function xinchao () {
        $title = "Xin chào " ;
        $name ="Thu Hương";
        $age =20;
        $arr = ['title'=>$title,'name'=> $name,'age'=>$age];
        return view('xinchao')-> with('student', $arr);
    }
}
