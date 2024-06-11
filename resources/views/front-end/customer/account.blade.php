
@extends('front-end.master')
@section('title', 'my Account page')
@section('body')  

    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>My Account</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- My-account-area-Area -->
    <section id="my-account_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#dashboard" class=" active"><i
                                        class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                            <li> <a href="#!" data-bs-toggle="tab" data-bs-target="#orders"><i
                                        class="fas fa-cart-arrow-down"></i>Orders</a></li>
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#downloads"><i
                                        class="fas fa-cloud-download-alt"></i>Downloads</a></li>
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#address"><i
                                        class="fas fa-map-marker-alt"></i>Addresses</a></li>
                            <li><a href="#!" data-bs-toggle="tab" data-bs-target="#account-details"><i
                                        class="fas fa-user"></i>Account
                                    details</a>
                            </li>
                            <li><a href="login.html" class=""><i class="fas fa-sign-out-alt"></i>logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="myaccount-content">
                                <h4 class="title">Dashboard </h4>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                        orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                        href="#">Edit your password and account details.</a></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="myaccount-content">
                                <h4 class="title">Orders </h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="success">Completed</span></td>
                                                <td>$25.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="downloads">
                            <div class="myaccount-content">
                                <h4 class="title">Downloads </h4>
                                <div class="table_page table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Downloads</th>
                                                <th>Expires</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shopnovilla - Free Real Estate PSD Template</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="danger">Expired</span></td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                            <tr>
                                                <td>Organic - ecommerce html template</td>
                                                <td>Sep 11, 2018</td>
                                                <td>Never</td>
                                                <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane" id="address">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="myaccount-content">
                                        <h4 class="title">Billing Address</h4>
                                        <div class="billing_address">
                                            <h5><strong>Alex Porty</strong></h5>
                                            <p>
                                                1234 Market ##, Suite 900 <br>
                                                Lorem Ipsum, ## 12345
                                            </p>
                                            <p>Mobile: (123) 123-456789</p>
                                            <a href="account-info-edit.html" class="theme-btn-one bg-black btn_sm">Edit
                                                Address</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="myaccount-content">
                                        <h4 class="title">Shipping Address</h4>
                                        <div class="billing_address">
                                            <h5><strong>Alex Porty</strong></h5>
                                            <p>
                                                1234 Market ##, Suite 900 <br>
                                                Lorem Ipsum, ## 12345
                                            </p>
                                            <p>Mobile: (123) 123-456789</p>
                                            <a href="account-info-edit.html" class="theme-btn-one bg-black btn_sm">Edit
                                                Address</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="account-details">
                            <div class="myaccount-content">
                                <h4 class="title">Account details</h4>
                                <div class="login_form_container">
                                    <div class="account_details_form">
                                        <form action="#">
                                            <div class="img_profiles">
                                                <img src="{{asset($customer->image)}}" alt="img">
                                            </div>
                                            <div class="input-radio">
                                                <span class="custom-radio">
                                                    <input type="radio" value="1" name="mr" checked> Mr.</span>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>First Name</label>
                                                <input type="text" name="first-name" value="{{$customer->name}}" class="form-control" value="Kazi"
                                                    readonly>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email-name" value="{{$customer->name}}" value="demo123@gmail.com"
                                                    class="form-control" readonly>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password</label>
                                                <input type="password" name="user-password" value="{{$customer->password}}" value="123456789"
                                                    class="form-control" readonly>
                                            </div>
                                            <span class="example">
                                                (E.g.: 05/31/1970)
                                            </span>
                                            <br>
                                            <label class="checkbox-default" for="offer">
                                                <input type="checkbox" id="offer">
                                                <span>Receive offers from our partners</span>
                                            </label>
                                            <br>
                                            <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                <input type="checkbox" id="newsletter">
                                                <span>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                        moment. For that purpose, please find our contact info in the
                                                        legal notice.</em></span>
                                            </label>
                                            <div class="save_button mt-3">
                                                <a href="account-info-edit.html"
                                                    class="theme-btn-one bg-black btn_sm">Update</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
@endsection