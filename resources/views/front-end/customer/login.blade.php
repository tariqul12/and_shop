
@extends('front-end.master')
@section('title', 'login page')
@section('body')

    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Login</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout-Area -->
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Login</h3>
                        <form action="{{route('customer.loginCheck')}}" method="POST">
                            @csrf
                            <p>{{session('message')}}</p>
                            <div class="default-form-box">
                                <label>mobile or email <span>*</span></label>
                                <input type="text" name="user_name" class="form-control" required />
                            </div>
                            <div class="default-form-box">
                                <label>Password <span>*</span></label>
                                <input type="password" name="password" class="form-control" required />
                            </div>
                            <div class="login_submit">
                                <button class="theme-btn-one btn-black-overlay btn_md" type="submit">login</button>
                            </div>
                            <div class="remember_area">
                                <label class="checkbox-default">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>

                            <a href="register.html">Create Your Account?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection