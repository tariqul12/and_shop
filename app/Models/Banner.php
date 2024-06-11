<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    private static $banner;
    public static function newBanner($request)
    {
        self::saveBasicInfo(new Banner(), $request, getFileUrl($request->file('image'), "upload/banner-image/"));
    }

    public static function UpdateBanner($request, $id)
    {
        self::$banner = Banner::find($id);

        if ($image = $request->file("image")) {
            deletefileFromFolder(self::$banner->image);
            $imgUrl = getFileUrl($image, "upload/banner-image/");
        } else {
            $imgUrl = self::$banner->image;
        }
        self::saveBasicInfo(self::$banner, $request, $imgUrl);
    }

    private static function saveBasicInfo($banner, $request, $imgUrl)
    {

        $banner->product_id     = $request->product_id;
        $banner->image         = $imgUrl;
        $banner->save();
    }
    public static function deleteBanner($id)
    {
        self::$banner = Banner::find($id);
        deletefileFromFolder(self::$banner->image);
        self::$banner->delete();
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
