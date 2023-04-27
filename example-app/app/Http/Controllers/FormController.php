<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\InputRequest;

class FormController extends Controller
{
    public function index()
    {
        return view('hienThi');
        # code...
    }
    public function submitForm(InputRequest $request)
    {
        $name = $request-> input('name');
        $age = $request-> input('age');
        $date = $request-> input('date');
        $phone = $request-> input('phone');
        $web = $request-> input('web');
        $address = $request-> input('address');
        $info = ['name'=> $name,'age'=> $age,'date'=> $date,'phone'=> $phone,'web'=> $web,'address'=> $address];

        return view('hienThi')-> with ('info',$info);
    }
   

}
