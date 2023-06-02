<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\comment;
use App\Models\typeProduct;
use App\Models\product;

use App\Models\bill_detail;
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
  public function getIndexAdmin()
  {
    $products = product::all();
    return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => count(bill_detail::all())]);
  }

public function postAdminDelete($id)
{
    # code...
    $product = product::find($id);
    $product -> delete();
    return $this -> getIndexAdmin();
}
public function getAdminAdd()
  {
    return view('pageadmin.formAdd');
  }
  public function postAdminAdd(Request $request)	
    {	
      $product = new Product();	
      if ($request->hasFile('inputImage')) {	
        $file = $request->file('inputImage');	
        $fileName = $file->getClientOriginalName('inputImage');	
        $file->move('source/image/product', $fileName);	
      }	
      $file_name = null;	
      if ($request->file('inputImage') != null) {	
        $file_name = $request->file('inputImage')->getClientOriginalName();	
      }	
      
      $product->name = $request->inputName;	
      $product->image = $file_name;	
      $product->description = $request->inputDescription;	
      $product->unit_price = $request->inputPrice;	
      $product->promotion_price = $request->inputPromotionPrice;	
      $product->unit = $request->inputUnit;	
      $product->new = $request->inputNew;	
      $product->id_type = $request->inputType;	
      $product->save();	
      return $this->getIndexAdmin();	
    }	
  
public function getAdminEdit($id)
  {
    $product = product::find($id);
    return view('pageadmin.formEdit')->with('product', $product);
  }


public function postAdminEdit(Request $request)	
{	
    $id = $request -> editId;

  $product = product::find($id);
  	
  if ($request->hasFile('editImage')) {	
    $file = $request->file('editImage');	
    $fileName = $file->getClientOriginalName('editImage');	
    $file->move('source/image/product', $fileName);	
  }	
  if ($request->file('editImage') != null) {	
    $product -> image = $fileName;
}	
  
  $product->name = $request->editName;	
  $product->description = $request->editDescription;	
  $product->unit_price = $request->editPrice;	
  $product->promotion_price = $request->editPromotionPrice;	
  $product->unit = $request->editUnit;	
  $product->new = $request->editNew;	
  $product->id_type = $request->editType;	
  $product->save();	
  return $this->getIndexAdmin();	
}	

}