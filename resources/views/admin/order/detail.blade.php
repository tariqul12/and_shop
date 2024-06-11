@extends('admin.master')
@section('title', 'Order Page')
@section('body')

<div class="breadcrumb-wrapper">
    <div>
        <h1>Order details</h1>
    <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
        <span><i class="mdi mdi-chevron-right"></i></span>Order details
    </p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="ec-odr-dtl card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2 class="ec-odr">Order details</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <address class="info-grid">
                            <div class="info-content">
                                <h5 class="title_infos"> <span class="mdi mdi-account-circle"></span> Customer info</h5> 
                                 <ul>
                                    <li>Name: <span> {{$order->customer->name}}</span></li>
                                    <li>Email: <span>{{$order->customer->email}}</span> </li>
                                    <li>Phone: <span>{{$order->customer->mobile}}</span></li>
                                 </ul>
                                 <a href="#!">View profile</a>
                            </div>
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <address class="info-grid">
                            <div class="info-content">
                                <h5 class="title_infos"> <span class="mdi mdi-ship-wheel"></span> Shipping info</h5> 
                                 <ul>
                                    <li>Name: <span> Home</span></li>
                                    <li>Address: <span>Josephin Villa,
                                        81 Fulton Park, Brazil/Pedro Leopoldo</span> </li>
                                    <li>Phone: <span>(012) 345-678-9012</span></li>
                                 </ul>
                            </div>
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <address class="info-grid">
                            <div class="info-content">
                                <h5 class="title_infos"> <span class="mdi mdi-cart"></span> Order info</h5> 
                                 <ul>
                                    <li>Vendor: <span>Style echo</span></li>
                                    <li>Address: <span>Maroon tower, 81 Fulton Park</span> </li>
                                    <li>Phone: <span>(012) 345-678-9012</span></li>
                                 </ul>
                                 <a href="#!">View profile</a>
                            </div>
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <address class="info-grid">
                            <div class="info-content">
                                <h5 class="title_infos"> <span class="mdi mdi-card-bulleted"></span>Payment info</h5> 
                                 <ul>
                                    <li>Payment method: <span>Credit card</span></li>
                                    <li>Master: <span>card: **** **** **** 5794</span> </li>
                                    <li>Business name:<span>Grand Market LLC</span> </li>
                                    <li>Phone: <span>(012) 345-678-9012</span></li>
                                 </ul>
                            </div>
                        </address>
                    </div>
                
                </div>
            </div>
        </div>

        <div class="ec-odr-dtl card card-default mt-5">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <h2 class="ec-odr">Product summary</h2>
            </div>
            <div class="card-body">
            
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped o-tbl">
                                <thead>
                                   
                                        
                                    <tr class="line">
                                        <td><strong>Order ID</strong></td>
                                        <td><strong>Product name</strong></td>
                                        <td><strong>Price</strong></td>
                                        <td><strong>Qty</strong></td>
                                        <td><strong>color</strong></td>
                                        <td><strong>Size</strong></td>
                                        <td><strong>Sub total</strong></td>
                                    </tr>
                                  
                                </thead>
                                <tbody>
                                    @foreach ($order->products as $product)
                                    <tr>
                                        <td>#{{$loop->iteration}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_qty}}</td>
                                        <td>
                                            <div style="background-color: {{$product->product_color}}; height: 30px; width:30px "></div>
                                        </td>
                                        <td>{{$product->product_size}}</td>
                                        <td>{{$product->product_price * $product->product_qty}}</td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="4">
                                        </td>
                                        <td class="text-right"><strong>Vat (15%):</strong></td>
                                        <td class="text-right"><strong>${{$order->tax_total}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                        </td>
                                        <td class="text-right"><strong>Shipping:</strong></td>
                                        <td class="text-right"><strong>${{$order->sipping_total}}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                        </td>
                                        <td class="text-right"><strong>Grand total:</strong></td>
                                        <td class="text-right"><strong>${{$order->order_total}}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tracking Detail -->
        <div class="card ec-odr-dtl card card-default mt-4 trk-order">
            <div class="card-header card-header-border-bottom order_tracking_title">
                <h3>Order tracking id: <span>#JK54736OM</span></h3>
            </div>
            <form action="{{route('order.edit',['id'=>$order->id])}}" method="POST">
                @csrf
            <div
                class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-custom">
                <div class="order_details_shipment w-100 py-1 px-2">
                    <h3>Status: <span><select name="order_status" id="" class=" form-control">
                        <option value="Pending"  {{$order->order_status == 'Pending'? "selected": ""}} >pending</option>    
                        <option value="Processing" {{$order->order_status == 'Processing'? "selected": ""}} >processing</option>    
                        <option value="Confirmed" {{$order->order_status == 'Confirmed'? "selected": ""}} >confirmed</option>    
                        <option value="Canceled" {{$order->order_status == 'Canceled'? "selected": ""}} >canceled</option>    
                    </select></span></h3>
                    </div>
                <div class="order_details_shipment w-100 py-1 px-2">
                    <h3>Delivery address: <span><input type="text" class=" form-control"  value="{{$order->delivery_address}}" name="delivery_address"></span></h3>
                   
                </div>
                <div class="order_details_shipment w-100 py-1 px-2 text-center">
                        <h3>Courier: <span><select name="courier_id" id="" class=" form-control">
                        <option value="" disabled selected>--Select Courier Info--</option>
                        <option value="1">S A Paribashan</option>
                        <option value="2">Sondarban</option>
                    </select></span></h3>
                </div>
                <div class="order_details_shipment w-100 py-1 px-2 text-center">
                    <button type="submit" class=" btn btn-success">update Order</button>
                    </div>
            </div>
        </form>
            <div class="card-body">
                <div
                    class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                    <div class="step completed">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="mdi mdi-cart-plus"></i></div>
                        </div>
                        <h4 class="step-title">Confirmed Order</h4>
                    </div>
                    <div class="step completed">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="mdi mdi-repeat"></i></div>
                        </div>
                        <h4 class="step-title">Processing Order</h4>
                    </div>
                    <div class="step completed">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                        </div>
                        <h4 class="step-title">Product Dispatched</h4>
                    </div>
                    <div class="step">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="mdi mdi-truck-fast"></i></div>
                        </div>
                        <h4 class="step-title">On Delivery</h4>
                    </div>
                    <div class="step">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="mdi mdi-shopping"></i></div>
                        </div>
                        <h4 class="step-title">Product Delivered</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection