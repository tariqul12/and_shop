<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOtherImage;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index',['products'=>Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add',[
            'categories' =>Category::all(),
            'sub_categories' =>SubCategory::all(),
            'brands' =>Brand::all(),
            'units' =>Unit::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        ProductOtherImage::newOtherImage($request->file('other_image'),$this->product->id);
        return back()->with('message','Product add successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.detail',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product'=>$product,
            'categories' =>Category::all(),
            'sub_categories' =>SubCategory::all(),
            'brands' =>Brand::all(),
            'units' =>Unit::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::UpdateProduct($request,$product->id);
        if($images = $request->file('other_image'))
        {
            ProductOtherImage::UpdateOtherImage($images,$product->id);
        }
        return redirect('/product')->with('message','Product Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product);
        ProductOtherImage::deleteOtherImage($product->id);
        return redirect('/product')->with('message','Product Delete Successfully');
    }
}
