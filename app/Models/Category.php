<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function newCategory($request)
    {
        self::saveBasicInfo(new Category(), $request, getFileUrl($request->file('image'), "upload/category-image/"));
    }

    public static function UpdateCategory($request, $id)
    {
        self::$category = Category::find($id);

        if ($image = $request->file("image")) {
            deletefileFromFolder(self::$category->image);
            $imgUrl = getFileUrl($image, "upload/category-image/");
        } else {
            $imgUrl = self::$category->image;
        }
        self::saveBasicInfo(self::$category, $request, $imgUrl);
    }

    private static function saveBasicInfo($category, $request, $imgUrl)
    {
        $category->name          = $request->name;
        $category->description   = $request->description;
        $category->image         = $imgUrl;
        $category->status        = $request->status;
        $category->save();
    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        deletefileFromFolder(self::$category->image);
        self::$category->delete();
    }
}
