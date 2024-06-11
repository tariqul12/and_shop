<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    private static $order;
    public static function newOrder($request,$productId)
    {
        self::$order = new Order();
        self::$order->customer_id = $productId;
        self::$order->order_total = $request->order_total;
        self::$order->tax_total = $request->tax_total;
        self::$order->sipping_total = $request->shipping_total;
        self::$order->order_date = date('Y-m-d');
        self::$order->order_timestamp = strtotime(date('Y-m-d'));
        self::$order->delivery_address = $request->delivery_address;
        self::$order->payment_method = $request->payment_method;
        self::$order->save();
        return self::$order;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function products()
    {
        return $this->hasMany(OrderDetails::class);
    }
    public static function UpdateOrder($request,$id)
    {
        self::$order =  Order::find($id);
        if($request->order_status == "Pending")
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_method = $request->order_status;
        }
        else if($request->order_status == "Processing")
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_method = $request->order_status;
            self::$order->delivery_address = $request->delivery_address;
            self::$order->courier_id = $request->courier_id;
        }
        else if($request->order_status == "Confirmed")
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_method = $request->order_status;
            self::$order->payment_date = date('Y-m-d');
            self::$order->payment_timestamp = strtotime(date('Y-m-d'));
            self::$order->delivery_date = date('Y-m-d');
            self::$order->delivery_timestamp = strtotime(date('Y-m-d'));
        }
        else if($request->order_status == "Canceled")
        {
            self::$order->order_status = $request->order_status;
            self::$order->delivery_status = $request->order_status;
            self::$order->payment_method = $request->order_status;
        }
        self::$order->save();
    }
}
