@extends('admin.master')
@section('title', 'Product Page')
@section('body')
<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>All Product</h1>
        <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
            <span><i class="mdi mdi-chevron-right"></i></span>All Product
        </p>
    </div>
    <div>
        <a href="product-add.html" class="btn btn-primary"> Add Porduct</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between">
                <div class="card-bar">
                    <div class="col-lg-9 col-md-12 sort">
                        <div class="col-lg-3 col-md-6 p-space">
                            <select class="form-control" id="dropdownCategory">
                                <option value="ALL">ALL Category</option>
                                <option value="MEN">Men's</option>
                                <option value="WOMAN">Woman's</option>
                                <option value="KID">Kids</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 p-space">
                            <select class="form-control" id="dropdownOrderBy">
                                <option value="ALL">ORDER BY</option>
                                <option value="MEN">Letest</option>
                                <option value="WOMAN">Price Low - High</option>
                                <option value="KID">Price High - Low</option>
                                <option value="OTHER">OTHER</option>
                            </select>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-12">
                        <input type="text" class="form-control" id="searchProduct"
                            placeholder="search with product name..">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card-wrapper">
                            <div class="card-container">
                                <div class="card-top">
                                    <img class="card-image" src="{{asset($product->image)}}"
                                        alt="" height="200" />
                                </div>
                                <div class="card-bottom">
                                    <h3><a href="product-detail.html">{{$product->name}}</a></h3>
                                    <p>${{$product->selling_price}}.00</p>
                                </div>
                                <div class="card-action">
                                    <a href="{{route('product.edit', $product->id)}}"> <div class="card-edit"><i class="mdi mdi-circle-edit-outline"></i></div></a>
                                    <a href="{{route('product.show',$product->id)}}"><div class="card-preview"><i class="mdi mdi-eye-outline"></i></a>
                                    </div>
                                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="card-remove"><button type="submit"><i class="mdi mdi mdi-delete-outline"></button></i></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <nav aria-label="Page navigation example p-0">
                        <ul class="pagination pagination-seperated pagination-seperated-rounded">

                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection