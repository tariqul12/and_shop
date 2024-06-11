<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOtherImage extends Model
{
    use HasFactory;
    private static $otherImages ,$productOtherImage;
    public static function newOtherImage($images,$productId)
    {
        foreach($images as $image)
        {  
            self::saveBasicInfo(new ProductOtherImage(), getFileUrl($image,'upload/product_other_image/'),$productId);
        }
    }
    public static function UpdateOtherImage($images, $productId)
    {
       self::$otherImages = ProductOtherImage::where('product_id',$productId)->get();
       foreach(self::$otherImages as $otherImage)
       {
        deletefileFromFolder($otherImage);
        $otherImage->delete();
       }
       self::newOtherImage($images,$productId);
    }

    private static function saveBasicInfo($productOtherImage, $imageUrl,$productId)
    {
        
        $productOtherImage->product_id = $productId;
        $productOtherImage->image = $imageUrl;
        $productOtherImage->save();
    }
    public static function deleteOtherImage($productId)
    {
        self::$otherImages = ProductOtherImage::where('product_id',$productId)->get();
       foreach(self::$otherImages as $otherImage)
       {
        if(file_exists($otherImage))
        {
            unlink($otherImage);
        }
        $otherImage->delete();
       }
    }

}
