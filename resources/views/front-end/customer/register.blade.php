
@extends('front-end.master')
@section('title', 'register page')
@section('body')
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Register</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register-Area -->
    <section id="login_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Register</h3>
                        <form action="{{route('customer.register')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <p>{{session('message')}}</p>
                            <div class="default-form-box">
                                <label>Username <span>*</span></label>
                                <input type="text" name="name" class="form-control" required/>
                            </div>
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input type="text" class="form-control" name="email" required/>
                            </div>
                            <div class="default-form-box">
                                <label>Mobile <span>*</span></label>
                                <input type="text" class="form-control" name="mobile" required/>
                            </div>
                            <div class="default-form-box">
                                <label>Address <span>*</span></label>
                                <input type="text" class="form-control" name="address" required/>
                            </div>
                            <div class="default-form-box">
                                <label>Image <span>*</span></label>
                                <input type="file" class="form-control" name="image" required/>
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" class="form-control" required/>
                            </div>
                            <div class="default-form-box">
                                <label>Confirm Passwords <span>*</span></label>
                                <input type="password" name="confirm_password" class="form-control" required/>
                            </div>
                            <div class="login_submit">
                                <button class="theme-btn-one btn-black-overlay btn_md" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection