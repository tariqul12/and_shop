@extends('admin.master')
@section('title', 'User Page')
@section('body')

    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>User Edit</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>User
            </p>
        </div>
    </div>

    <div class="card bg-white profile-content">
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <div class="profile-content-right profile-right-spacing px-5 pb-5">
                    <div class="tab-widget mt-5">
                        <div class="user_profile_top_heading">
                            <h3>User edit</h3>
                        </div>
                        <div class="tab-pane-content mt-5">
                            <form action="{{route('user.update',['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <p class=" text-danger">{{session('message')}}</p>
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" value="{{$user->name}}" name="name" id="firstName" />
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_customer_profilr_img">
                                            <label for="email">User Image</label>
                                            <input type="file" name="image" class="form-control" id="" />
                                            <img
                                                src="{{asset($user->profile_photo_path)}}"
                                                class="img-fluid rounded-top"
                                                height="100"
                                                width="100"
                                                alt=""
                                            />
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" class="form-control" name="password" id="newPassword" />
                                        </div>
                                    </div>
                               
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Edit
                                                User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
