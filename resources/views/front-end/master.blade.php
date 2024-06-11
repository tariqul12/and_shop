<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>AndShop - @yield('title') </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/bootstrap.min.css" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/fontawesome.all.min.css" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/owl.carousel.min.css" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/owl.theme.default.min.css" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/animate.min.css" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/meanmenu.min.css" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/style.css" />
    <!-- color css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/color.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end-assets/assets/css/responsive.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}front-end-assets/assets/img/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/')}}front-end-assets/assets/img/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}front-end-assets/assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/')}}front-end-assets/assets/img/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}front-end-assets/assets/img/favicon/favicon-16x16.png" />
    <link rel="manifest" href="{{asset('/')}}front-end-assets/assets/img/favicon/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{asset('/')}}front-end-assets/assets/img/favicon/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <style>
        .carousel {
          width: 80%;
          margin: 0 auto;
          overflow: hidden;
          position: relative;
        }
        .carousel-content {
          display: flex;
          transition: transform 0.5s ease;
        }
        .carousel-item {
          flex: 0 0 100%; /* each item takes full width */
          max-width: 100%;
          padding: 0 10px;
          box-sizing: border-box;
        }
        .carousel-controls {
          text-align: center;
          margin-top: 20px;
        }
        .carousel-controls button {
          background-color: #333;
          color: #fff;
          border: none;
          padding: 10px 20px;
          cursor: pointer;
          margin: 0 5px;
        }
      </style>
</head>

<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="{{asset('/')}}front-end-assets/assets/img/loader.gif" alt="img" />
        </div>
    </div>

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <ul class="top-header-contact-info">
                        <li><i class="fas fa-phone-volume"></i> <a href="tel:+1234567898">(+123) 456-7898</a></li>
                        <li><i class="fas fa-street-view"></i> <a href="#" target="_blank">6890 Blvd, The Bronx, NY
                                1058, USA</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-5">
                    <ul class="top-header-menu">
                        @if(Session::get('customer_id'))
                            <li>
                                <a href="">Hello <span>{{Session::get('customer_name')}}</span></a>
                            </li>
                            <li>
                                <a href="{{route('customer.account')}}">My Account</a>
                            </li>
                            <li>
                                <a href="{{route('customer.logout')}}">Logout</a>

                            </li>
                        @else
                        <li>
                            <a href="{{route('customer.login')}}">logIn</a>
                        </li>
                        <li>
                            <a href="{{route('customer.register')}}">Register</a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navebar Area -->
    <div class="navbar-area">
        <div class="drodo-responsive-nav">
            <div class="container">
                <div class="drodo-responsive-menu">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('/')}}front-end-assets/assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="drodo-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('/')}}front-end-assets/assets/img/logo.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link active">Category <i
                                        class='fas fa-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                    <li class="nav-item"><a href="{{route('category',['id'=>$category->id])}}" class="nav-link">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item megamenu"><a href="#" class="nav-link">Shop
                                    <i class="fas fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="submenu-title">Shop Styles</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="shop.html">Shop Four Grid</a></li>
                                                        <li><a href="shop-2.html">Shop Three Grid</a></li>
                                                        <li><a href="shop-3.html">Shop List View</a></li>
                                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li><a href="product-single.html">Product Single</a></li>
                                                        <li><a href="product-single-2.html">Product Single Two</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Other Page</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="product-single-3.html">Product Single Three</a>
                                                        </li>
                                                        <li><a href="cart.html">Cart View One</a></li>
                                                        <li><a href="cart-2.html">Cart View Two </a></li>
                                                        <li><a href="cart-3.html">Cart View Three </a></li>
                                                        <li><a href="cart-4.html">Cart View Four </a></li>
                                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                                        <li><a href="checkout.html">Checkout View One</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Feature Pages</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="checkout-2.html">Checkout View Two</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                                        <li><a href="order-completed.html">Order Complete</a></li>
                                                        <li><a href="product-hover.html">Product Hover</a></li>
                                                        <li><a href="email-order-success.html">Order Success</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h6 class="submenu-title">Feature Pages</h6>
                                                    <ul class="megamenu-submenu">
                                                        <li><a href="email-template-one.html">Email Template 1</a></li>
                                                        <li><a href="email-template-two.html">Email Template 2</a></li>
                                                        <li><a href="email-template-three.html">Email Template 3</a>
                                                        </li>
                                                        <li><a href="order-completed.html">Order Complete</a></li>
                                                        <li><a href="lookbook.html">LookBook</a></li>
                                                        <li><a href="invoice-1.html">Invoice 1</a></li>
                                                        <li><a href="invoice-2.html">Invoice 2</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Blog <i
                                        class='fas fa-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-gride-1.html">Blog Grid View One</a></li>
                                    <li><a href="blog-gride-2.html">Blog Grid View Two</a></li>
                                    <li><a href="blog-gride-3.html">Blog Grid View Three</a></li>
                                    <li><a href="blog-list.html">Blog List View</a></li>
                                    <li><a href="blog-list-2.html">Blog List View 2</a></li>
                                    <li><a href="blog-single.html">Blog Single View One </a></li>
                                    <li><a href="blog-single-2.html">Blog Single View TWo</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                        class='fas fa-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="vendor.html">Vendor</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="contact-us.html">Contact Us One</a></li>
                                    <li><a href="contact-us-2.html">Contact Us Two</a></li>
                                    <li><a href="coming-Soon.html">Coming Soon</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="login.html" class="active">Login</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Contact <i
                                        class='fas fa-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact-us.html">Contact Us One</a></li>
                                    <li><a href="contact-us-2.html">Contact Us Two</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="others-option">
                            <div class="option-item">
                                <div class="wishlist-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i
                                            class='far fa-heart'></i></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i
                                            class='fas fa-shopping-bag'></i><span>{{count(Cart::content())}}</span></a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="search-btn-box">
                                    <i class="fas fa-search search-btn"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Search Area -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="fas fa-search search-btn"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@yield('body')
    <!-- footer Area -->
    <footer id="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer_left_side">
                        <a href="#!"><img src="{{asset('/')}}front-end-assets/assets/img/logo.png" alt="logo" /></a>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati culpa assumenda voluptas
                            placeat amet consectetur adipisicing elit. Obcaecati culpa assumenda voluptas placeat.
                        </p>
                        <div class="footer_left_side_icon">
                            <ul>
                                <li>
                                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>INFORMATION</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">Frequently Questions</a></li>
                            <li><a href="order-tracking.html">Order Tracking</a></li>
                            <li><a href="compare.html">Compare</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>Your Account</h3>
                        <ul>
                            <li><a href="cart.html">Cart View One</a></li>
                            <li><a href="cart-2.html">Cart View Two </a></li>
                            <li><a href="empty-cart.html">Empty Cart</a></li>
                            <li><a href="checkout.html">Checkout View One</a></li>
                            <li><a href="checkout-2.html">Checkout View Two</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="footer_one_widget">
                        <h3>NEWSLETTER</h3>
                        <div id="mc_embed_signup" class="subscribe-form">
                            <form>
                                <div class="mc-form">
                                    <input class="form-control" type="email" required="" placeholder="Your Mail*"
                                        name="EMAIL" value="" />
                                    <div class="clear">
                                        <button class="theme-btn-one btn_md" type="submit" name="subscribe" value="">
                                            <i class="icon-cursor"></i> Send Mail
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- CopyRight Area -->
    <section id="copyright_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_left">
                        <h6>© CopyRight 2022
                            <span>AndShop</span>
                        </h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright_right">
                        <img src="{{asset('/')}}front-end-assets/assets/img/common/payment.png" alt="img" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cookie bar start -->
    <div class="cookie-bar">
        <p>We use cookies to improve our site and your shopping experience. By continuing to browse our site you accept
            our cookie policy.</p>
        <a href="javascript:void(0)" class="btn theme-btn-one bg-black btn_sm">accept</a>
        <a href="javascript:void(0)" class="btn theme-btn-one bg-black btn_sm">decline</a>
    </div>
    <!-- cookie bar end -->
{{--
    <!-- Newsletter Modal Area Start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1 modal-bg">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="offer_modal_left">
                                        <img src="{{asset('/')}}front-end-assets/assets/img/logo.png" alt="logo">
                                        <h3>SUBSCRIBE TO NEWSLETTER</h3>
                                        <p>Subscribe to the Andshop mailing list to receive updates
                                            on new arrivals, special offers and our promotions.</p>
                                        <form action="#!">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Recipient's username">
                                                <div class="input-group-append">
                                                    <button
                                                        class="theme-btn-one btn-black-overlay btn_sm">Subscribe</button>
                                                </div>
                                            </div>
                                            <div class="check_boxed_modal">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Don't show this popup again</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="offer_modal_img d-none d-lg-block">
                                        <img src="{{asset('/')}}front-end-assets/assets/img/common/modal.png" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Product Modal Area Start-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="product_one_modal_top modal-content">
                <button type="button" class="close close_modal_icon" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body" id="product_slider_one">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                            <div class="products_modal_sliders owl-carousel owl-theme">
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="img" />
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png" alt="img" />
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product3.png" alt="img" />
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product4.png" alt="img" />
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product5.png" alt="img" />
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png" alt="img" />
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product7.png" alt="img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                            <div class="modal_product_content_one">
                                <h3>Black fashion handbag JI9023</h3>
                                <div class="reviews_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>(2 Customer Review)</span>
                                </div>
                                <h4>$317.76</h4>
                                <p>
                                    Standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen.
                                </p>
                                <div class="variable-single-item">
                                    <span>Color</span>
                                    <div class="product-variable-color">
                                        <label for="modal-product-color-red1">
                                            <input name="modal-product-color" id="modal-product-color-red1"
                                                class="color-select" type="radio" checked="">
                                            <span class="product-color-red"></span>
                                        </label>
                                        <label for="modal-product-color-green3">
                                            <input name="modal-product-color" id="modal-product-color-green3"
                                                class="color-select" type="radio">
                                            <span class="product-color-green"></span>
                                        </label>

                                        <label for="modal-product-color-blue5">
                                            <input name="modal-product-color" id="modal-product-color-blue5"
                                                class="color-select" type="radio">
                                            <span class="product-color-blue"></span>
                                        </label>
                                    </div>
                                </div>
                                <form action="#!" id="product_count_form_one">
                                    <div class="product_count_one">
                                        <div class="plus-minus-input">
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="minus"
                                                    data-field="quantity">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <input class="form-control" type="number" name="quantity" value="0" />
                                            <div class="input-group-button">
                                                <button type="button" class="button" data-quantity="plus"
                                                    data-field="quantity">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <a href="cart.html" class="theme-btn-one btn-black-overlay btn_sm">Add To
                                            Cart</a>
                                    </div>
                                </form>
                                <div class="modal_share_icons_one">
                                    <h4>SHARE THIS PRODUCT</h4>
                                    <div class="posted_icons_one">
                                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#!"><i class="fab fa-instagram"></i></a>
                                        <a href="#!"><i class="fab fa-twitter"></i></a>
                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#!"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopingcart Modal Area Start-->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Cart ({{count(Cart::content())}})</h3>
                    <div class="products-cart-content">
                        @php
                            $sum = 0;
                        @endphp
                        @foreach (Cart::content() as $item)
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{asset($item->options->image)}}" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">{{$item->name}}</a></h3>
                                <div class="products-price">
                                    <span>{{$item->qty}}</span>
                                    <span>x</span>
                                    <span class="price">{{$item->price}}</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        @php
                            $sum += $item->price;
                        @endphp
                        @endforeach
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">${{$sum}}</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="checkout.html" class="theme-btn-one btn-black-overlay btn_md">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Modal Area Start-->
    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <h3>My Wishlist (3)</h3>
                    <div class="products-cart-content">
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$39.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Protective Gloves</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$99.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                        <div class="products-cart d-flex align-items-center">
                            <div class="products-image">
                                <a href="#"><img src="{{asset('/')}}front-end-assets/assets/img/product-image/product3.png" alt="image"></a>
                            </div>
                            <div class="products-content">
                                <h3><a href="#">Infrared Thermometer Gun</a></h3>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$90.00</span>
                                </div>
                            </div>
                            <a href="#" class="remove-btn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>
                        <span class="subtotal">$228.00</span>
                    </div>
                    <div class="products-cart-btn">
                        <a href="wishlist.html" class="theme-btn-one btn-black-overlay btn_md">Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="{{asset('/')}}front-end-assets/assets/js/jquery-3.7.1.js"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/popper.min.js"></script>
    <script src="{{asset('/')}}front-end-assets/assets/js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/owl.carousel.min.js"></script>
    <!-- Menu js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/meanmenu.min.js"></script>
    <!-- Count js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/count.js"></script>
    <!-- Timer js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/timer.js"></script>
    <script src="{{asset('/')}}front-end-assets/assets/js/nice-select.min.js"></script>
    <!-- wow.js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="{{asset('/')}}front-end-assets/assets/js/custom.js"></script>
    <script src="{{asset('/')}}front-end-assets/assets/js/script.js"></script>
    <script>
        new WOW().init();
    </script>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.carousel-item');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
      });
      currentIndex = index;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(currentIndex);
    }

    showSlide(currentIndex);
  </script>
</body>


</html>
