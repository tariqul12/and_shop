@extends('admin.master')
@section('title', 'Product Page')
@section('body')

    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Product Detail</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product
            </p>
        </div>
        <div>
            <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary"> Edit
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Product Detail</h2>
                </div>

                <div class="card-body product-detail">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="{{ asset($product->image) }}"
                                                    alt="">
                                            </div>
                                            @foreach ($product->otherImages as $otherImage)
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset($otherImage->image) }}"
                                                        alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="single-nav-thumb">
                                            <div class="single-slide">
                                                <img class="img-responsive" src="{{ asset($product->image) }}"
                                                    alt="">
                                            </div>
                                            @foreach ($product->otherImages as $otherImage)
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset($otherImage->image) }}"
                                                        alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product_card_bottom_wrapper">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card_bottom_items">
                                            <div class="card_bottom_item_icon">
                                                <img src="{{ asset('/') }}admin-assets/assets/img/icons/shoping.png"
                                                    alt="">
                                            </div>
                                            <div class="card_bottom_item_text">
                                                <p>Purchased</p>
                                                <h3>5782</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card_bottom_items">
                                            <div class="card_bottom_item_icon">
                                                <img src="{{ asset('/') }}admin-assets/assets/img/icons/cart.png"
                                                    alt="">
                                            </div>
                                            <div class="card_bottom_item_text">
                                                <p>In order</p>
                                                <h3>1245</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card_bottom_items">
                                            <div class="card_bottom_item_icon">
                                                <img src="{{ asset('/') }}admin-assets/assets/img/icons/doller.png"
                                                    alt="">
                                            </div>
                                            <div class="card_bottom_item_text">
                                                <p>Amount</p>
                                                <h3>$82,950</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card_bottom_items">
                                            <div class="card_bottom_item_icon">
                                                <img src="{{ asset('/') }}admin-assets/assets/img/icons/chart.png"
                                                    alt="">
                                            </div>
                                            <div class="card_bottom_item_text">
                                                <p>In stock</p>
                                                <h3>7325</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="row product-overview">
                                <div class="col-12">
                                    <h2 class="product-title-twos">{{ $product->name }}</h2>
                                    <p class="product-rate">
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star is-rated"></i>
                                        <i class="mdi mdi-star"></i>
                                        <span class="detail_review_area">1184 Reviews</span>
                                    </p>
                                    <p class="product-desc">
                                        {{ $product->shot_description }}
                                    </p>
                                    <div class="product_model_search_area">
                                        <ul>
                                            <li>Code: <span class="span_block_area">{{ $product->code }}</span></li>
                                            <li>Category: <span class="span_block_area">
                                                    {{ $product->category->name }}</span></li>
                                            <li>Sub Category: <span class="span_block_area">
                                                    {{ $product->subCategory->name }}</span></li>
                                            <li>Brand: <span class="span_block_area"> {{ $product->brand->name }}</span>
                                            </li>

                                            <li>Color: <span class="parent_color">
                                                    <span class="color_plate" style="background-color:#90cdf7;"></span>
                                                    <span class="color_plate" style="background-color:#ff3b66;"></span>
                                                    <span class="color_plate" style="background-color:#ffc476;"></span>
                                                    <span class="color_plate" style="background-color:#1af0ba;"></span>
                                                </span></li>
                                            <li>Regular Price: <span
                                                    class="span_block_area">${{ $product->regular_price }}.00</span></li>
                                            <li>Selling Price: <span
                                                    class="span_block_area">${{ $product->selling_price }}.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row review-rating mt-4">
                                <div class="col-12">
                                    <ul class="nav nav-tabs" id="myRatingTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="product-detail-tab" data-bs-toggle="tab"
                                                data-bs-target="#productdetail" href="#productdetail" role="tab"
                                                aria-selected="true">
                                                <i class="mdi mdi-library-books mr-1"></i>
                                                Description</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="product-information-tab" data-bs-toggle="tab"
                                                data-bs-target="#productinformation" href="#productinformation"
                                                role="tab" aria-selected="false">
                                                <i class="mdi mdi-information mr-1"></i>Information</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="product-reviews-tab" data-bs-toggle="tab"
                                                data-bs-target="#productreviews" href="#productreviews" role="tab"
                                                aria-selected="false">
                                                <i class="mdi mdi-star-half mr-1"></i> Reviews</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent2">
                                        <div class="tab-pane pt-3 fade show active" id="productdetail" role="tabpanel">
                                            <p>
                                                {{ $product->long_description }}
                                            </p>
                                            <ul class="features">
                                                <li>Any Product types that You want - Simple,
                                                    Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Flatlock seams throughout.</li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane pt-3 fade" id="productinformation" role="tabpanel">
                                            <div class="product_model_search_area">
                                                <ul>
                                                    <li>code: <span class="span_block_area">{{ $product->code }}</span>
                                                    </li>
                                                    <li>Color: <span class="parent_color">
                                                            <span class="color_plate"
                                                                style="background-color:#90cdf7;"></span>
                                                            <span class="color_plate"
                                                                style="background-color:#ff3b66;"></span>
                                                            <span class="color_plate"
                                                                style="background-color:#ffc476;"></span>
                                                            <span class="color_plate"
                                                                style="background-color:#1af0ba;"></span>
                                                        </span></li>
                                                    <li>regular price: <span class="span_block_area">${{ $product->regular_price }}.00</span></li>
                                                    <li>selling price: <span class="span_block_area">${{ $product->selling_price }}.00</span></li>
                                                    <li>stock amount: <span class="span_block_area">{{ $product->stock_amount }}</span></li>
                                                    <li>status: <span class="span_block_area">{{ $product->status }}</span></li>
                                                    <li>featured status: <span class="span_block_area">{{ $product->featured_status }}</span></li>
                                                    <li>trending status: <span class="span_block_area">{{ $product->trending_status }}</span></li>
                                                    <li>sales count: <span class="span_block_area">{{ $product->sales_count }}</span></li>
                                                    <li>hit count: <span class="span_block_area">{{ $product->hit_count }}</span></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane pt-3 fade" id="productreviews" role="tabpanel">
                                            <div class="ec-t-review-wrapper">
                                                <div class="ec-t-review-item">
                                                    <div class="ec-t-review-avtar">
                                                        <img src="{{ asset('/') }}admin-assets/assets/img/review-image/1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="ec-t-review-content">
                                                        <div class="ec-t-review-top">
                                                            <p class="ec-t-review-name">Lindsy stirling
                                                            </p>
                                                            <div class="ec-t-rate custom_rating_gap">
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <span class="rating_outof">5 out of
                                                                    5</span>
                                                            </div>
                                                        </div>
                                                        <div class="ec-t-review-bottom">
                                                            <p>
                                                                Consectetur exercitation non eiusmod
                                                                enim adipisicing mollit velit qui
                                                                adipisicing. Tempor enim fugiat minim et
                                                                qui incididunt esse incididunt cillum
                                                                fugiat.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-item">
                                                    <div class="ec-t-review-avtar">
                                                        <img src="{{ asset('/') }}admin-assets/assets/img/review-image/2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="ec-t-review-content">
                                                        <div class="ec-t-review-top">
                                                            <p class="ec-t-review-name">Linda Morgus</p>
                                                            <div class="ec-t-rate">
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star is-rated"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <span class="rating_outof">5 out of
                                                                    5</span>
                                                            </div>
                                                        </div>
                                                        <div class="ec-t-review-bottom ">
                                                            <p>
                                                                Consectetur exercitation non eiusmod
                                                                enim adipisicing mollit velit qui
                                                                adipisicing. Tempor enim fugiat minim et
                                                                qui incididunt esse incididunt cillum
                                                                fugiat.
                                                            </p>
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
                </div>
            </div>
        </div>
    </div>

@endsection
