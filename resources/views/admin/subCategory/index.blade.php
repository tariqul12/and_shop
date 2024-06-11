@extends('admin.master')
@section('title','All Sub Category')
@section('body')
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>All Sub Category</h1>
                <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>All Sub Category
                </p>
            </div>

            <div>
                <a href="{{route('subCategory.create')}}" class="btn btn-primary">Add Sub Category</a>
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
                                        <th>Sub Category</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($sub_categories as $subCategory)
                                    <tr>
                                        <td>#00{{$loop->iteration}} </td>
                                        <td><img class="cat-thumb" src="{{asset($subCategory->image)}}"
                                                alt="Category Image" /></td>
                                        <td>{{$subCategory->name}}</td>
                                        <td>{{isset($subCategory->category->name)?$subCategory->category->name:""}}</td>
                                        <td>{{$subCategory->description}}</td>
                                        <td>
                                            <span class="badge {{$subCategory->status==1? "badge-success":"badge-secondary"}}">{{$subCategory->status==1? "Published":"UnPublished"}}</span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('subCategory.edit', $subCategory->id)}}">Edit</a>
                                                    <form action="{{route('subCategory.destroy',$subCategory->id)}}" method="POST">
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