<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class AndShopController extends Controller
{
    private $products , $product;
    public function index()
    {
        $this->products = Product::where('status',1)->orderBy('id','desc')->take(8)->get();
        return view('front-end.home.index',[
            'products'=>$this->products,
            'banners' =>Banner::all(),
        ]);
    }
    public function category($id)
    {
        $this->products = Product::where('category_id',$id)->get();
        return view('front-end.category.index',['products'=>$this->products]);
    }
    public function detail($id)
    {
        $this->product = Product::find($id);
        return view('front-end.detail.index',['single_product'=>$this->product]);
    }
}
