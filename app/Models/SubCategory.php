<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory;
    public static function newSubCategory($request)
    {
        self::saveBasicInfo(new SubCategory(), $request, getFileUrl($request->file('image'), "upload/subCategory-image/"));
    }

    public static function UpdateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);

        if ($image = $request->file("image")) {
            deletefileFromFolder(self::$subCategory->image);
            $imgUrl = getFileUrl($image, "upload/subCategory-image/");
        } else {
            $imgUrl = self::$subCategory->image;
        }
        self::saveBasicInfo(self::$subCategory, $request, $imgUrl);
    }

    private static function saveBasicInfo($subCategory, $request, $imgUrl)
    {
        $subCategory->name          = $request->name;
        $subCategory->category_id   = $request->category_id;
        $subCategory->description   = $request->description;
        $subCategory->image         = $imgUrl;
        $subCategory->status        = $request->status;
        $subCategory->save();
    }
    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        deletefileFromFolder(self::$subCategory->image);
        self::$subCategory->delete();
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
