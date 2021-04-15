<?php

namespace App\Http\Controllers;

use App\Cart_model;
use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        $products=Products_model::all();
        $session_id=Session::get('session_id');
        $cart_count=Cart_model::where('session_id',$session_id)->count();
        return view('frontEnd.index',compact('products','cart_count'));
    }
    public function shop(){
        $products=Products_model::all();
        $session_id=Session::get('session_id');
        $cart_count=Cart_model::where('session_id',$session_id)->count();
        $byCate="";
        return view('frontEnd.products',compact('products','byCate','cart_count'));
    }
    public function listByCat($id){
        $session_id=Session::get('session_id');
        $cart_count=Cart_model::where('session_id',$session_id)->count();
        $list_product=Products_model::where('categories_id',$id)->get();
        $byCate=Category_model::select('name')->where('id',$id)->first();
        return view('frontEnd.products',compact('list_product','byCate','cart_count'));
    }
    public function detialpro($id){
        $session_id=Session::get('session_id');
        $cart_count=Cart_model::where('session_id',$session_id)->count();
        $detail_product=Products_model::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','totalStock','relateProducts','cart_count'));
    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        //print_r($all_attrs);die();
        $attr=explode('-',$all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select=ProductAtrr_model::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
}
