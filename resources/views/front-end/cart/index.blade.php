@extends('front-end.master')
@section('title','Cart page')
@section('body')
    
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Cart</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart-Area -->
    <section id="cart_area_one" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table_desc">
                        <div class="table_page table-responsive">
                            <table>
                                <!-- Start Cart Table Head -->
                                <thead>
                                    <tr>
                                        <th class="product_remove">Remove</th>
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead> <!-- End Cart Table Head -->
                                <tbody>
                                    @php($sum = 0)
                                    @foreach (Cart::content() as $item)
                                    <!-- Start Cart Single Item-->
                                    <tr>
                                        <td class="product_remove">
                                            <form action="{{route('cart.remove',['row_id'=>$item->rowId])}}" method="POST">
                                                @csrf
                                                <button type="submit" onclick="return confirm('Are you Sure to remove Product from cart!!!!!')"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        <td class="product_thumb">
                                            <a href="product-single.html">
                                                <img src="{{asset($item->options->image)}}" alt="img"></a>
                                        </td>
                                        <td class="product_name">
                                            <a href="product-single.html">{{$item->name}}</a>
                                        </td>
                                        <td class="product-price">{{$item->price}}</td>
                                        <td class="product_quantity">
                                            <form action="{{route('cart.update',['row_id'=>$item->rowId])}}" method="POST">
                                                @csrf
                                                <label>Quantity</label>
                                                <input min="1" max="100" name="qty" value="{{$item->qty}}" type="number">
                                                <button type="submit" class="btn btn-dark">Update</button>
                                            </form>
                                        </td>
                                        <td class="product_total">{{$item->subtotal}}</td>
                                    </tr> 
                                    <!-- End Cart Single Item-->
                                    @php($sum += $item->subtotal)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button class="theme-btn-one btn-black-overlay btn_sm" type="submit">update cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">
                            <p>Enter your coupon code if you have one.</p>
                            <input class="mb-2" placeholder="Coupon code" type="text">
                            <button type="submit" class="theme-btn-one btn-black-overlay btn_sm">Apply coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code right">
                        <h3>Cart Total</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">{{$sum}}</p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount">{{$shipping = 100}}</p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>tax Total</p>
                                <p class="cart_amount">{{$tax = $sum * 0.02}}</p>
                            </div>
                            <a href="#!">Calculate shipping</a>

                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">{{$total = $sum+$shipping+$tax}}</p>
                            </div>
                            <div class="checkout_btn">
                                <a href="{{route('checkout')}}" class="theme-btn-one btn-black-overlay btn_sm">Proceed to
                                    Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection