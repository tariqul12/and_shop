@extends('admin.master')
@section('title','All Category')
@section('body')
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>All Category</h1>
                <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>All Category
                </p>
            </div>

            <div>
                <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default">
                    <div class="card-body">
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>Product</th>
                                        <th>category</th>
                                        <th>Sub Category</th>
                                        <th>Brand</th>
                                        <th>Unit</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>#00{{$loop->iteration}} </td>
                                        <td><img class="cat-thumb" src="{{asset($product->image)}}"
                                                alt="product Image" /></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->subCategory->name}}</td>
                                        <td>{{$product->brand->name}}</td>
                                        <td>{{$product->unit->name}}</td>
                                        <td>{{$product->code}}</td>
                                        <td>{{$product->selling_price}}</td>
                                        <td>{{$product->stock_amount}}</td>
                                        <td>
                                            <span class="badge {{$product->status==1? "badge-success":"badge-secondary"}}">{{$product->status==1? "Published":"UnPublished"}}</span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('product.show',$product->id)}}">
                                                <button type="button"
																class="btn btn-outline-success">Info</button></a>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('product.edit', $product->id)}}">Edit</a>
                                                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you Sure to Delete This..')" class="dropdown-item">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection