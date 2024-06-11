@extends('admin.master')
@section('title','All Category')
@section('body')
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>All User</h1>
                <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>All User
                </p>
            </div>
        </div>
  	
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="ec-cat-list card card-default">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Photo</th>
                                        <th>Full name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)      
                                    <tr>
                                        <td>#00{{$loop->iteration }} </td>
                                        <td><img class="cat-thumb" src="{{asset($user->profile_photo_path)}}"
                                                alt="Product Image" /></td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('user.edit',['id'=>$user->id])}}">Edit</a>
                                                    <form action="{{route('user.delete',['id'=>$user->id])}}" method="POST">
                                                        @csrf
                                                        <button class="dropdown-item" onclick="return confirm('Are you sure delete user!!')" type="submit" >Delete</button>
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