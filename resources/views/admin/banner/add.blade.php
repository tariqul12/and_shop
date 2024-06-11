@extends('admin.master')
@section('title', 'Category Page')
@section('body')
    <!-- CONTENT WRAPPER -->
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Add Banner</h1>
                    <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Add Banner
                    </p>
                </div>
                <div>
                    <a href="{{route('banner.index')}}" class="btn btn-primary">All Banner</a>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-8 offset-lg-2 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add New Category</h4>
                                <p class=" text-success">{{session('message')}}</p>
                                <form class="row" action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group col-12 ">
                                        <label for="text" class="col-form-label">Product name</label>
                                       <select name="product_id" id="" class=" form-control">
                                        <option value="" selected disabled>--select Product--</option>
                                        @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                    <div class=" col-12 ">
                                        <label class=" col-form-label">Image</label>
                                        <div class="col-12">
                                            <input type="file" class="form-control" id="group_tag" name="image" required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <button type="submit" class="btn btn-primary">Add Banner</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
