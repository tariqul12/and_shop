@extends('admin.master')
@section('title','All Category')
@section('body')
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>All Banner</h1>
                <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>All Banner
                </p>
            </div>

            <div>
                <a href="{{route('banner.create')}}" class="btn btn-primary">Add Banner</a>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($banners as $banner)
                                    <tr>
                                        <td>#00{{$loop->iteration}} </td>
                                        <td><img class="cat-thumb" src="{{asset($banner->image)}}"
                                                alt="banner Image" /></td>
                                        <td>{{$banner->product->name}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('banner.edit', $banner->id)}}">Edit</a>
                                                    <form action="{{route('banner.destroy',$banner->id)}}" method="POST">
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