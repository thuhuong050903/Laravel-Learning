<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\product;


use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex()
    {
        $slide = Slide::all();		
        $new_product = product::where('new',0)->get();
        $new_product_array = $new_product->toArray();

        return view('page.trangchu', compact('slide','new_product_array'));
        # code...
    }
}
