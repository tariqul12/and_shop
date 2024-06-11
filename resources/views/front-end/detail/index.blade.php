@extends('front-end.master')
@section('title','Detail page')
@section('body')
    
    <!-- Banner Area -->
    <section id="common_banner_one">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_banner_text">
                        <h2>Product</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fas fa-slash"></i></li>
                            <li class="active">Product Single</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Single Area -->
    <section id="product_single_one" class="ptb-100">
        <div class="container">
            <div class="row area_boxed">
                <div class="col-lg-4">
                    <div class="product_single_one_img">
                        <img src="{{asset($single_product->image)}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="{{route('cart.add',['id'=>$single_product->id])}}" method="POST">
                        @csrf
                    <div class="product_details_right_one">
                        <div class="modal_product_content_one">
                            <h3>{{$single_product->name}}</h3>
                            <div class="reviews_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>(2 Customer Review)</span>
                            </div>
                            <h4>${{$single_product->selling_price}} <del>${{$single_product->regular_price}}</del> </h4>
                            <p><b>Category:</b><span>{{$single_product->category->name}} </span></p>
                            <p>{{$single_product->shot_description}}
                            </p>
                            <div class="customs_selects">
                                <select name="size" class="customs_sel_box">
                                    <option value="">Size</option>
                                    <option value="xl">XL</option>
                                    <option value="l">L</option>
                                    <option value="m">M</option>
                                    <option value="s">S</option>
                                </select>
                            </div>
                            <div class="variable-single-item">
                                <span>Color</span>
                                <div class="product-variable-color">
                                    <label for="modal-product-color-red">
                                        <input name="color" id="modal-product-color-red"
                                            class="color-select" value="#F8BFDF" type="radio" checked="">
                                        <span class="product-color-red"></span>
                                    </label>
                                    <label for="modal-product-color-green">
                                        <input name="color" id="modal-product-color-green"
                                            class="color-select" value="#8C898E" type="radio">
                                        <span class="product-color-green"></span>
                                    </label>

                                    <label for="modal-product-color-blue">
                                        <input name="color" id="modal-product-color-blue"
                                            class="color-select" value="#C0C022" type="radio">
                                        <span class="product-color-blue"></span>
                                    </label>
                                </div>
                            </div>
                            <form action="#!" id="product_count_form_two">
                                <div class="product_count_one">
                                    <div class="plus-minus-input">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="minus"
                                                data-field="quantity">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input class="form-control" type="number" name="quantity" value="1" min="1">
                                        <div class="input-group-button">
                                            <button type="button" class="button" data-quantity="plus"
                                                data-field="quantity">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="links_Product_areas">
                                <ul>
                                    <li>
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                class="far fa-heart"></i>Add To Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="compare.html" class="action compare" title="Compare"><i
                                                class="fas fa-exchange-alt"></i>Add To Compare</a>
                                    </li>
                                </ul>
                                <button type="submit" class="theme-btn-one btn-black-overlay btn_sm">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_details_tabs">
                        <ul class="nav nav-tabs">
                            <li><a data-bs-toggle="tab" data-bs-target="#description" href="#!"
                                    class="active">Description</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#additional" href="#!">Additional
                                    Information</a></li>
                            <li><a data-bs-toggle="tab" data-bs-target="#review" href="#!">Review</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in show active">
                                <div class="product_description">
                                    <p>{{$single_product->long_description}}</p>
                                </div>
                            </div>
                            <div id="additional" class="tab-pane fade">
                                <div class="product_additional">
                                    <ul>
                                        <li>Brand: <span>{{$single_product->brand->name}}</span></li>
                                        <li>Unit: <span>{{$single_product->unit->name}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <div class="product_reviews">
                                    <ul>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="{{asset('/')}}front-end-assets/assets/img/user/user1.png" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="{{asset('/')}}front-end-assets/assets/img/user/user2.png" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media d-flex">
                                            <div class="media-img flex-shrink-0">
                                                <img src="{{asset('/')}}front-end-assets/assets/img/user/user3.png" alt="img">
                                            </div>
                                            <div class="media-body flex-grow-1 ms-3">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Product -->
    <section id="related_product" class="pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_heading">
                        <h2>You Might Also Like</h2>
                        <p>Mauris luctus nisi sapien tristique dignissim ornare</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product_wrappers_one">
                        <div class="thumb">
                            <a href="product-single.html" class="image">
                                <img src="{{asset('/')}}front-end-assets/assets/img/product-image/product1.png" alt="Product" />
                                <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product2.png" alt="Product" />
                            </a>
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
                            <h5 class="title"><a href="product-single.html">Black T-Shirt For Woman</a></h5>
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
                                <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product4.png" alt="Product" />
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
                            <h5 class="title"><a href="product-single.html">T-Shirt Form Girls</a></h5>
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
                                <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product6.png" alt="Product" />
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
                            <h5 class="title"><a href="product-single.html">White Black Line Dress</a></h5>
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
                                <img class="hover-image" src="{{asset('/')}}front-end-assets/assets/img/product-image/product8.png" alt="Product" />
                            </a>
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
                            <h5 class="title"><a href="product-single.html">Blue Dress For Woman</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
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
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post2.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post3.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post4.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post5.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post6.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post7.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post8.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post9.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post2.png" alt="img">
                            </a>
                        </div>
                        <div class="instgram_post">
                            <a href="#!">
                                <i class="fab fa-instagram"></i>
                                <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post1.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection