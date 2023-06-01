<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\comment;
use App\Models\typeProduct;
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

        $topProduct = product::where('promotion_price','<>',0)->paginate(4);							
        return view('page.trangchu', compact('slide','new_product_array','topProduct'));

    }

    public function getDetail(Request $request)
    {
        $sanpham = product::where('id',$request->id)->first();
        $splienquan = product::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comment = comment::where('id_product',$request->id)->get();							
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','comment'));


    }

    public function getLoaiSp($type){			
        $type_product =typeProduct::all();//Show ra tên loại sản phẩm
        $sp_theoloai = product::where('id_type',$type)->get();
        $sp_khac =product::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));


}
}
