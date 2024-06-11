@extends('front-end.master')
@section('title','Home Page')
@section('body')
    
    <!-- Banner Area -->
    <section id="banner_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_text_one">
                        <h1 class="wow flipInX" data-wow-duration="3.0s" data-wow-delay=".3s">Live For <span
                                class="wow flipInX" data-wow-duration="2.0s" data-wow-delay=".5s">Fashion</span></h1>
                        <h3>Save Up To 50%</h3>
                        <a href="shop-3.html" class="theme-btn-one bg-black btn_md">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero_img">
                        <img src="{{asset('/')}}front-end-assets/assets/img/common/man.png" alt="img" class="wow slideInRight" data-wow-duration="3.0s"
                            data-wow-delay=".3s">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product variation -->
    <section id="product_variation_one" class="pt-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="{{asset('/')}}front-end-assets/assets/img/offer/woman.png" alt="img" />
                        <div class="product_var_one_text">
                            <h4 class="color_one">Outerwear</h4>
                            <h2>New</h2>
                            <h4>Collection</h4>
                            <a href="shop-2.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="{{asset('/')}}front-end-assets/assets/img/offer/woman1.png" alt="img" />
                        <div class="product_var_one_text">
                            <h4 class="color_one">Summer</h4>
                            <h2>Hot</h2>
                            <h4>Collection</h4>
                            <a href="shop.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="{{asset('/')}}front-end-assets/assets/img/offer/bag.png" alt="img" />
                        <div class="product_var_one_text_center">
                            <h2 class="color_one">10% Offer</h2>
                            <h4>No Selected Models</h4>
                            <a href="shop-3.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="{{asset('/')}}front-end-assets/assets/img/offer/woman4.png" alt="img" />
                        <div class="product_var_one_text">
                            <h2>New</h2>
                            <h4 class="color_one">Arrivals</h4>
                            <a href="shop-2.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                    <div class="product_variation_one_boxed img-zoom-hover">
                        <img src="{{asset('/')}}front-end-assets/assets/img/offer/kids.png" alt="img" />
                        <div class="product_var_one_text">
                            <h2>Hot</h2>
                            <h4 class="color_one">Offer</h4>
                            <a href="shop.html" class="theme-btn-one bg-black btn_sm">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hot Product Area -->
    <section id="hot_Product_area" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Hot Product</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs_center_button">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li role="presentation">
                                <a data-bs-toggle="tab" href="#!" data-bs-target="#new_arrival" role="tab"
                                    class="active">New Arrival</a>
                            </li>
                            <li role="presentation">
                                <a data-bs-toggle="tab" data-bs-target="#trending" role="tab" href="#!">Trending</a>
                            </li>
                            <li role="presentation"><a data-bs-toggle="tab" data-bs-target="#best_sellers"
                                    href="#!">Best Sellers</a></li>
                            <li role="presentation"><a data-bs-toggle="tab" data-bs-target="#featured"
                                    href="#!">Featured</a></li>
                            <li role="presentation"><a data-bs-toggle="tab" data-bs-target="#on_sall" href="#!">On
                                    sall</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs_el_wrapper">
                        <div class="tab-content" id="myTabContent">
                            <div id="new_arrival" class="tab-pane fade show in active" role="tabpanel">
                                <div class="row">
                                    @foreach ($products as  $key => $product)
                                        
                                   
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="{{route('detail',['id'=>$product->id])}}" class="image">
                                                    <img src="{{asset($product->image)}}" alt="Product" />
                                                    <img class="hover-image" src="{{asset($product->image)}}"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">
                                                    Add To Cart
                                                </button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="{{route('detail',['id'=>$product->id])}}">{{$product->name}} </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">${{$key}}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                  
                                </div>
                            </div>

                            <div id="trending" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product3.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product4.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product5.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="hot">Hot</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product7.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product8.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#!" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter">
                                                        <i class="fas fa-expand"></i>
                                                    </a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="best_sellers" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product9.png" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{asset('/')}}front-end-assets/assets/img/product-image/product10.png" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dress</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product11.png" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{asset('/')}}front-end-assets/assets/img/product-image/product12.png" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="hot">Hot</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">
                                                    Add To Cart
                                                </button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Black T-Shirt For Woman
                                                    </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product13.png" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{asset('/')}}front-end-assets/assets/img/product-image/product14.png" alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">
                                                    Add To Cart
                                                </button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product5.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">
                                                    Add To Cart
                                                </button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="featured" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product3.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product4.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product5.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="hot">Hot</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product7.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product8.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#!" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter">
                                                        <i class="fas fa-expand"></i>
                                                    </a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="on_sall" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product3.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product4.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                        <div class="product_wrappers_one">
                                            <div class="thumb">
                                                <a href="product-single.html" class="image">
                                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product5.png" alt="Product" />
                                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png"
                                                        alt="Product" />
                                                </a>
                                                <span class="badges">
                                                    <span class="hot">Hot</span>
                                                </span>
                                                <div class="actions">
                                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    <a href="#" class="action quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"><i
                                                            class="fas fa-expand"></i></a>
                                                    <a href="compare.html" class="action compare" title="Compare"><i
                                                            class="fas fa-exchange-alt"></i></a>
                                                </div>
                                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle"
                                                    data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To
                                                    Cart</button>
                                            </div>
                                            <div class="content">
                                                <h5 class="title">
                                                    <a href="product-single.html">Blue Dress For Woman </a>
                                                </h5>
                                                <span class="price">
                                                    <span class="new">$38.50</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Time Area -->
    <section id="offer_timer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-4 col-md-7 offset-md-4 col-sm-12 col-12">
                    <div class="offer_time_flex">
                        <div class="count_down">
                            <div id="countdown">
                                <ul>
                                    <li><span id="days"></span>days</li>
                                    <li><span id="hours"></span>Hours</li>
                                    <li><span id="minutes"></span>Minutes</li>
                                    <li><span id="seconds"></span>Seconds</li>
                                </ul>
                            </div>
                        </div>
                        <div class="offer_timer_text">
                            <h2>20% OFF FOR ALL T-SHIRT COLLECTION</h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro quisquam, odit assumenda
                                sit modi commodi esse necessitatibus temporibus aperiam veritatis eveniet!
                            </p>
                            <a href="#!" class="theme-btn-one bg-black btn_md">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- To Days Area -->
    <section id="to_days_area" class="ptb-100 slider_arrows_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>ToDay's Deal</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="todays_slider owl-carousel owl-them">
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="Product" />
                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="hot">Hot</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal">
                                    Add To Cart
                                </button>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Black T-Shirt For Woman</a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product3.png" alt="Product" />
                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product4.png"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal">
                                    Add To Cart
                                </button>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">T-Shirt Form Girls</a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product5.png" alt="Product" />
                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="hot">Hot</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal">
                                    Add To Cart
                                </button>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Blue Dress For Woman</a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product7.png" alt="Product" />
                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product8.png"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="new">New</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal">
                                    Add To Cart
                                </button>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Woman Full Sliv Dresss</a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                        <div class="product_wrappers_one">
                            <div class="thumb">
                                <a href="product-single.html" class="image">
                                    <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product9.png" alt="Product" />
                                    <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product10.png"
                                        alt="Product" />
                                </a>
                                <span class="badges">
                                    <span class="hot">Hot</span>
                                </span>
                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                            class="far fa-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i
                                            class="fas fa-expand"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i
                                            class="fas fa-exchange-alt"></i></a>
                                </div>
                                <button title="Add To Cart" class="add-to-cart offcanvas-toggle" data-bs-toggle="modal"
                                    data-bs-target="#shoppingCartModal">
                                    Add To Cart
                                </button>
                            </div>
                            <div class="content">
                                <h5 class="title">
                                    <a href="product-single.html">Blue Dress For Woman</a>
                                </h5>
                                <span class="price">
                                    <span class="new">$38.50</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special offer -->
    <section id="special_offer_one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="offer_banner_one text-center">
                        <h5>TRENDING</h5>
                        <h2>New Fashion</h2>
                        <p>
                            Consectetur adipisicing elit. Dolores nisi distinctio magni, iure deserunt doloribus optio
                        </p>
                        <a href="#!" class="theme-btn-one bg-whites btn_md">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog Arae -->
    <section id="blog_area_one" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Latest Blog</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="blog_one_item img-zoom-hover">
                        <div class="blog_one_img">
                            <a href="blog-single.html">
                                <img src="{{asset('/')}}front-end-assets/assets/img/blog/post1.png" alt="img" />
                            </a>
                        </div>
                        <div class="blog_text">
                            <h5 class="date_area">
                                <a href="blog-single.html">16 November 2018</a>
                            </h5>
                            <h4 class="heading">
                                <a href="blog-single.html">This Made Me Splurge on The Apple Watch</a>
                            </h4>
                            <p class="para">
                                Similar smocked bodice and full sleeves but also so different from the dress above!
                            </p>
                            <a href="blog-single.html" class="button">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="blog_one_item img-zoom-hover">
                        <div class="blog_one_img">
                            <a href="blog-single.html">
                                <img src="{{asset('/')}}front-end-assets/assets/img/blog/post2.png" alt="img" />
                            </a>
                        </div>
                        <div class="blog_text">
                            <h5 class="date_area">
                                <a href="blog-single.html">10 Jna 2021</a>
                            </h5>
                            <h4 class="heading">
                                <a href="blog-single.html">4 Fresh Ways To Style Leather Shorts For Spring</a>
                            </h4>
                            <p class="para">
                                It feels super easy to wear and really versatile – perfect one-and-done outfit for
                                spring/summer
                            </p>
                            <a href="blog-single.html" class="button">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="blog_one_item img-zoom-hover">
                        <div class="blog_one_img">
                            <a href="blog-single.html">
                                <img src="{{asset('/')}}front-end-assets/assets/img/blog/post3.png" alt="img" />
                            </a>
                        </div>
                        <div class="blog_text">
                            <h5 class="date_area">
                                <a href="blog-single.html">25 February 2019</a>
                            </h5>
                            <h4 class="heading">
                                <a href="blog-single.html">Shopbop Spring Sale Selects (All Under/Around $100!)</a>
                            </h4>
                            <p class="para">
                                I ended up returning this one and keeping the one below but I loved both!
                            </p>
                            <a href="blog-single.html" class="button">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram Arae -->
    <section id="instagram_area_one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>Follow Us Instagram</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_post_slider owl-carousel owl-theme">
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post2.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post3.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post4.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post5.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post6.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post7.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post8.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post9.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post10.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post1.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post11.png" alt="img" />
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post12.png" alt="img" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
