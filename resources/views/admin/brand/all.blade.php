@extends('admin.master')
@section('title','Brand')
@section('body')
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Brand</h1>
        <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span> Brand</p>
    </div>
</div>

<div class="product-brand card card-default p-24px">
    <div class="row mb-m-24px">
        @foreach ($brands as $brand)     
        <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6">
            <div class="brand_img_wrapper">
                <div class="brand_img_item">
                    <img src="{{asset($brand->image)}}" height="180" width="200" alt="">
                </div>
                <div class="brand_img_bottom">
                    <h3>{{$brand->name}}</h3>
                    <p>1,244 items</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection