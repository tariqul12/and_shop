<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class OrderDetails extends Model
{
    use HasFactory;
    private static $orderDetail;
    public static function newOrderDetail($orderId)
    {
        foreach(Cart::content() as $cart_product)
        {
            self::$orderDetail = new OrderDetails();
            self::$orderDetail->order_id = $orderId;
            self::$orderDetail->product_id = $cart_product->id;
            self::$orderDetail->product_name = $cart_product->name;
            self::$orderDetail->product_price = $cart_product->price;
            self::$orderDetail->product_qty = $cart_product->qty;
            self::$orderDetail->product_color = $cart_product->options->color;
            self::$orderDetail->product_size = $cart_product->options->size;
            self::$orderDetail->save();
            Cart::remove($cart_product->rowId);
            
        }
    }
  
}
