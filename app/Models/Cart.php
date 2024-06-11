<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    private static $cart,$product;
    public static function newCart($request,$id)
    {
        self::$product= Product::find($id);

        self::$cart = new Cart();
        self::$cart->product_id = $id;
        self::$cart->name = self::$product->name;
        self::$cart->qty = $request->quantity;
        self::$cart->price = self::$product->selling_price;
        self::$cart->code = self::$product->code;
        self::$cart->image = self::$product->image;
        self::$cart->color = $request->color;
        self::$cart->size = $request->size;
        self::$cart->save();
        return self::$cart;
    }
}
