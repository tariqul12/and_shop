<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $cart ,$product;
    public function index()
    {
        return view('front-end.cart.index');
    }
    public function addCart(Request $request, $id)
    {
        $this->product = Product::find($id);

        Cart::add([
            'id' => $id,
            'name' => $this->product->name,
            'qty' => $request->quantity,
            'price' => $this->product->selling_price,
            'weight' => 550,
            'options' => [
                'size' => $request->size,
                'color' => $request->color,
                'image' => $this->product->image,
            ]
        ]);
        return redirect('/cart/show');
    }
    public function cartUpdate(Request $request , $rowId)
    {
        Cart::update($rowId, $request->qty);
        return redirect('/cart/show');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart/show');
    }
}
