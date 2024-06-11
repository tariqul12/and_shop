@extends('admin.master')
@section('title', 'Product Page')
@section('body')
    <!-- CONTENT WRAPPER -->
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Add Product</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Add Product
            </p>
        </div>
        <div>
            <a href="{{ route('category.index') }}" class="btn btn-primary">All Product</a>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Add Product</h2>
                </div>
                <p class=" text-success">{{session('message')}}</p>
                <div class="card-body">
                    <div class="row ec-vendor-uploads">
                        <div class="col-lg-12">
                            <div class="ec-vendor-upload-detail">
                                <form class="row g-3" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Product name</label>
                                        <input type="text" class="form-control slug-title" name="name" value="{{$product->name}}" placeholder="Product Name" id="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Product Category</label>
                                        <select name="category_id" id="" class="form-select">
                                            <option value="">--Select Category--</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $product->category_id ? "selected":""}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">Product Sub Category</label>
                                        <select name="sub_category_id" id="" class="form-select">
                                            <option value="">--Select Sub Category--</option>
                                            @foreach ($sub_categories as $sub_category)
                                            <option value="{{$sub_category->id}}" {{$sub_category->id == $product->sub_category_id ? "selected":""}}>{{$sub_category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail6" class="form-label">Product Brand</label>
                                        <select name="brand_id" id="" class="form-select">
                                            <option value="">--Select Category--</option>
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? "selected":""}}>{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Product Unit</label>
                                        <select name="unit_id" id="" class="form-select">
                                            <option value="">--Select Category--</option>
                                            @foreach ($units as $unit)
                                            <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? "selected":""}}>{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Product Code</label>
                                        <input type="text" class="form-control slug-title" value="{{$product->code}}" name="code" placeholder="Product Name" id="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail7" class="form-label">Short Description</label>
                                        <textarea class="form-control"  name="shot_description" value="{{$product->shot_description}}" placeholder="Short Description" id="">{{$product->shot_description}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputEmail8" class="form-label">Long Description</label>
                                        <textarea class="form-control " name="long_description" value="{{$product->long_description}}" placeholder="Long Description" id="">{{$product->long_description}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail9" class="form-label">Meta Title</label>
                                        <input type="text" class="form-control " name="meta_title" value="{{$product->meta_title}}" placeholder="Product price" id="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail0" class="form-label">Meta Description</label>
                                        <textarea class="form-control " name="meta_description" value="{{$product->meta_description}}" placeholder="Long Description" id="">{{$product->meta_description}}</textarea>

                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail11" class="form-label">Regular Price</label>
                                        <input type="number" class="form-control " name="regular_price" value="{{$product->regular_price}}" placeholder="Regular Price" id="" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Selling Price</label>
                                        <input type="text" class="form-control" name="selling_price" value="{{$product->selling_price}}" placeholder="Selling Price" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Stock Amount</label>
                                        <input type="number" class="form-control" name="stock_amount" value="{{$product->stock_amount}}" placeholder="Stock Amount" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image"  />
                                        <img src="{{asset($product->image)}}" height="100" width="100" alt="product image" />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Other Image</label>
                                        <input type="file" class="form-control" name="other_image[]" multiple />
                                        @foreach ($product->otherImages as $otherImage)
                                            <img
                                                src="{{asset($otherImage->image)}}"
                                                height="100"
                                                width="100"
                                                alt="Product image"
                                            />
                                        @endforeach
                                    </div>
                                    <div class=" col-md-6">
                                        <label class="form-label">Publication status</label>
                                        <div class=" d-flex">
                                            <span>Published<input type="radio" checked name="status" value="1" /></span>
                                            <span>UnPublished<input type="radio" name="status" value="0" /></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="product_add_cancel_button">
                                            <button type="submit" class="btn btn-primary">Add product</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
