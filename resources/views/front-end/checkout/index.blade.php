@extends('front-end.master')
@section('title', 'checkout page')
@section('body')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Checkout</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="checkout_one" class="ptb-100">
        <div class="container">
            <form action="{{ route('new.order') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="checkout-area-bg bg-white">
                            <div class="check-heading">
                                <h3>Billings Information</h3>
                            </div>
                            <div class="check-out-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="fname"> Name</label>
                                           @if (isset($customer->name))
                                           <input type="text" readonly name="name" value="{{$customer->name}}" class="form-control"
                                           id="" placeholder="First name *">
                                           @else
                                           <input type="text" required name="name" value="" class="form-control"
                                           id="" placeholder="First name *">
                                           @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email Addresse</label>
                                            @if (isset($customer->email))
                                            <input class="form-control" readonly value="{{$customer->email}}" name="email" type="email"
                                            id="" placeholder="enter your email">
                                            @else
                                            <input class="form-control" required name="email" type="email"
                                            id="customerEmail" placeholder="enter your email">
                                                <span id="CustomerEmailSpan"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="email">Mobile</label>
                                            @if (isset($customer->mobile))
                                            <input class="form-control" readonly name="mobile" value="{{$customer->mobile}}" type="number"
                                            id="email" placeholder="enter your Number">
                                            @else
                                            <input class="form-control" required name="mobile" type="number"
                                            id="" placeholder="enter your Number">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="faddress">Delivery Address</label>
                                            @if (isset($customer->address))
                                            <input type="text" class="form-control" id="" readonly value="{{$customer->address}}"
                                                name="delivery_address" placeholder="Enter your address here..">
                                                @else
                                                <input type="text" class="form-control" id="" required
                                                name="delivery_address" placeholder="Enter your address here..">
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="order_review  box-shadow bg-white">
                            <div class="check-heading">
                                <h3>Your Orders</h3>
                            </div>
                            <div class="table-responsive order_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($sum = 0)
                                        @foreach (Cart::content() as $cart_product)
                                            <tr>
                                                <td>{{ $cart_product->name }}<span class="product-qty"> x
                                                        {{ $cart_product->qty }}</span>
                                                </td>
                                                <td>{{ $cart_product->subtotal }}</td>
                                            </tr>
                                            @php($sum += $cart_product->subtotal)
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal">{{ $sum }}</td>
                                            <input type="hidden" name="subtotal" value="{{ $sum }}" />
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>{{ $shipping = 100 }}</td>
                                            <input type="hidden" name="shipping_total" value="{{ $shipping }}" />
                                        </tr>
                                        <tr>
                                            <th>Tax</th>
                                            <td>{{ $tax = round($sum * 0.02) }}</td>
                                            <input type="hidden" name="tax_total" value="{{ $tax }}">
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td class="product-subtotal">{{ $total = $sum + $shipping + $tax }}</td>
                                            <input type="hidden" name="order_total" value="{{ $total }}" />
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="order_review bg-white">
                            <div class="check-heading">
                                <h3>Payment</h3>
                            </div>
                            <div class="payment_method">
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="payment_method"
                                            id="exampleRadios3" value="Cash" checked="">
                                        <label class="form-check-label" for="exampleRadios3">Cash On Delivery</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" type="radio" name="payment_method"
                                            id="exampleRadios4" value="Online">
                                        <label class="form-check-label" for="exampleRadios4">Bkash Payment</label>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="theme-btn-one btn-black-overlay btn_sm">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


@endsection
