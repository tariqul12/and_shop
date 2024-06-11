<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;
    public function login()
    {
        return view('front-end.customer.login');
    }
    public function register()
    {
        return view('front-end.customer.register');
    }
    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email', $request->user_name)->orwhere('mobile', $request->user_name)->first();
        if($this->customer)
        {
            if (password_verify($request->password,$this->customer->password)) {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('customer/account');
            }
            else{
                return back()->with('message','Sorry This password is invalid!!');
            }
          

        }else{
            return back()->with('message','Sorry This email and mobile is invalid!!');
        }
       
    }
    public function newCustomer(Request $request)
    {
        if($request->password ==$request->confirm_password)
        {
            Customer::newCustomer($request);
            return redirect('customer/account');
        }
        else{
            return back()->with('message','password and confirm password is not match!!!');
        }
      
    }
    public function customerAccount()
    {
        $this->customer = Customer::find(Session::get('customer_id'));
        return view('front-end.customer.account',['customer'=> $this->customer]);
    }
    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/');
    }
}
