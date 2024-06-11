<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Session;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    private $customer, $order;
    public function index()
    {
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {
            $this->customer = "";
        }
        return view('front-end.checkout.index', ['customer' => $this->customer]);
    }
    public function newOrder(Request $request)
    {
        if (Session::get('customer_id')) {
            $this->customer = Customer::find(Session::get('customer_id'));
        } else {
            $this->customer = Customer::where('email', $request->email)->orwhere('mobile', $request->mobile)->first();
            if ($this->customer) {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
            } else {
                $this->customer = Customer::newCustomer($request);
            }
        }

        if ($request->payment_method == "Online") {

            return $request->payment_method;

        } elseif ($request->payment_method == "Cash") {

            $this->order = Order::newOrder($request, $this->customer->id);

            OrderDetails::newOrderDetail($this->order->id);

            return redirect('/oder/complete');
        }
    }
    public function customerEmailCheck()
    {
        $email = $_GET['email'];
        $customer = Customer::where('email',$email)->first();
        if ($customer)
        {
            return response()->json("Email address is already exist");
        }
        else
        {
            return response()->json('Email address is available');
        }
    }
    public function orderComplete()
    {
        return view('front-end.checkout.complete');
    }
}
