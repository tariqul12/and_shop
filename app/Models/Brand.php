<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand;
    public static function newBrand($request)
    {
        self::saveBasicInfo(new Brand(), $request, getFileUrl($request->file('image'), "upload/brand-image/"));
    }

    public static function UpdateBrand($request, $id)
    {
        self::$brand = Brand::find($id);

        if ($image = $request->file("image")) {
            deletefileFromFolder(self::$brand->image);
            $imgUrl = getFileUrl($image, "upload/brand-image/");
        } else {
            $imgUrl = self::$brand->image;
        }
        self::saveBasicInfo(self::$brand, $request, $imgUrl);
    }

    private static function saveBasicInfo($brand, $request, $imgUrl)
    {
        $brand->name          = $request->name;
        $brand->description   = $request->description;
        $brand->image         = $imgUrl;
        $brand->status        = $request->status;
        $brand->save();
    }
    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        deletefileFromFolder(self::$brand->image);
        self::$brand->delete();
    }
}
