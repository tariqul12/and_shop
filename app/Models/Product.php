<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $product;
    public static function newProduct($request)
    {
        return self::saveBasicInfo(new Product(), $request, getFileUrl($request->file('image'), "upload/product-image/"));
    }

    public static function UpdateProduct($request, $id)
    {
        self::$product = Product::find($id);

        if ($image = $request->file("image")) {
            deletefileFromFolder(self::$product->image);
            $imgUrl = getFileUrl($image, "upload/product-image/");
        } else {
            $imgUrl = self::$product->image;
        }
        self::saveBasicInfo(self::$product, $request, $imgUrl);
    }

    private static function saveBasicInfo($product, $request, $imgUrl)
    {
        $product->name              = $request->name;
        $product->category_id       = $request->category_id;
        $product->sub_category_id   = $request->sub_category_id;
        $product->brand_id          = $request->brand_id;
        $product->unit_id           = $request->unit_id;
        $product->code              = $request->code;
        $product->shot_description  = $request->shot_description;
        $product->long_description  = $request->long_description;
        $product->meta_title        = $request->meta_title;
        $product->meta_description  = $request->meta_description;
        $product->regular_price     = $request->regular_price;
        $product->selling_price     = $request->selling_price;
        $product->stock_amount      = $request->stock_amount;
        $product->image             = $imgUrl;
        $product->status            = $request->status;
        $product->save();
        return $product;
    }
    public static function deleteProduct($product)
    {
        deletefileFromFolder($product->image);
        $product->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function otherImages()
    {
        return $this->hasMany(ProductOtherImage::class);
    }
}
