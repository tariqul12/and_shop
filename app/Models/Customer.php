<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Customer extends Model
{
    use HasFactory;
    private static $customer;
    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->mobile = $request->mobile;
        if($request->address)
        {
            self::$customer->address = $request->address;
        }else{
            self::$customer->address = $request->delivery_address;
        }
        if($request->password)
        {
        self::$customer->password = bcrypt($request->password);
        }
        self::$customer->password = bcrypt($request->mobile);
       if($request->image)
       {
        self::$customer->image = getFileUrl($request->file('image'),'upload/customer/');
       }
        self::$customer->save();
        Session::put('customer_id',self::$customer->id);
        Session::put('customer_name',self::$customer->name);
        return self::$customer;
       
    } 
}
