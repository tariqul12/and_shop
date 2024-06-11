@extends('front-end.master')
@section('title','Category Page')
@section('body')
        <!-- Banner Area -->
        <section id="common_banner_one">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_banner_text">
                            <h2>Category</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="fas fa-slash"></i></li>
                                <li class="active">Category</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Shop Main Area -->
        <section id="shop_main_area" class="ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product_filter">
                            <div class="customs_selects">
                                <select name="product" class="customs_sel_box">
                                    <option value="Filter">Filter</option>
                                    <option value="volvo">Most Popular</option>
                                    <option value="saab">Best Seller</option>
                                    <option value="mercedes">Tranding</option>
                                    <option value="audi">Featured</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="product_shot">
                            <div class="product_shot_title">
                                <p> Sort By
                                    :</p>
                            </div>
                            <div class="customs_selects">
                                <select name="product" class="customs_sel_box">
                                    <option value="Popularity">Sort by Popularity</option>
                                    <option value="newness">Sort by newness</option>
                                    <option value="low">price: low to high</option>
                                    <option value="high">price: high to low</option>
                                </select>
                            </div>
                            <div class="product_shot_view">
                                <ul>
                                    <li><a href="shop-3.html" class="active"><i class="fas fa-list"></i></a></li>
                                    <li><a href="shop-2.html"><i class="fas fa-th-large"></i></a></li>
                                    <li><a href="shop.html"><i class="fas fa-th"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <div class="product_wrappers_list">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="thumb">
                                        <a href="product-single.html" class="image">
                                            <img src="{{asset($product->image)}}" alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="content">
                                        <div class="product_para_top">
                                            <h4 class="title"><a href="{{route('detail',['id'=>$product->id])}}">{{$product->name}}</a>
                                            </h4>
                                            <p>{{$product->shot_description}}</p>
                                            <span class="price">
                                                <span class="new">{{$product->selling_price}}$</span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                    class="far fa-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter"><i class="fas fa-expand"></i></a>
                                        </div>
                                        <a href="#!" title="Add To Cart"
                                            class="add-to-cart offcanvas-toggle btn btn_sm theme-btn-one btn-black-overlay"
                                            data-bs-toggle="modal" data-bs-target="#shoppingCartModal">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12">
                        <!-- pagination start -->
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                        <!-- pagination end -->
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
                                    <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post10.png" alt="img">
                                </a>
                            </div>
                            <div class="instgram_post">
                                <a href="#!">
                                    <i class="fab fa-instagram"></i>
                                    <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post1.png" alt="img">
                                </a>
                            </div>
                            <div class="instgram_post">
                                <a href="#!">
                                    <i class="fab fa-instagram"></i>
                                    <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post11.png" alt="img">
                                </a>
                            </div>
                            <div class="instgram_post">
                                <a href="#!">
                                    <i class="fab fa-instagram"></i>
                                    <img src="{{asset('/')}}front-end-assets/assets/img/instagram/post12.png" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
@endsection
