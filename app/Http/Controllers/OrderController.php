<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Svg\Tag\Rect;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index',['orders'=>Order::all()]);
    }
    public function detail($id)
    {
        return view('admin.order.detail',['order'=>Order::find($id)]);
    }
    public function invoice($id)
    {
        $pdf = Pdf::loadView('admin.order.invoice', ['order'=>Order::find($id)]);
        return $pdf->stream();
    }
    public function edit(Request $request,$id)
    {
        Order::UpdateOrder($request,$id);
        return redirect('/order/manage');
    }
}
