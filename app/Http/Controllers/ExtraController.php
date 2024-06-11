<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function extra()
    {
        return view('admin.brand.all',['brands'=>Brand::all()]);
    }
    public function productShow()
    {
        return view('admin.product.grid',['products'=>Product::all()]);
    }
}
