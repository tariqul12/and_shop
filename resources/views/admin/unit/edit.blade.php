@extends('admin.master')
@section('title', 'Unit Page')
@section('body')
    <!-- CONTENT WRAPPER -->
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1> Unit</h1>
                    <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Edit Unit
                    </p>
                </div>
                <div>
                   
                </div>

            </div>
            <div class="row">
                <div class="col-xl-8 offset-lg-2 col-lg-12">
                    <div class="ec-cat-list card card-default mb-24px">
                        <div class="card-body">
                            <div class="ec-cat-form">
                                <h4>Add New Unit</h4>
                                <p class=" text-success">{{session('message')}}</p>
                                <form class="row" action="{{route('unit.update',$unit->id)}}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group col-12 ">
                                        <label for="text" class="col-form-label">Unit name</label>
                                        <input id="text" name="name" value="{{$unit->name}}" class="form-control here slug-title"
                                            type="text" />
                                    </div>
                                    <div class="form-group col-12 ">
                                        <label class="col-form-label">Unit Description</label>
                                        <div class="col-12">
                                            <textarea id="fulldescription" name="description" cols="40" rows="4" class="form-control">{{$unit->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 ">
                                        <label class="col-form-label">Publication status</label>
                                        <div class="col-12 d-flex">
                                            <span>Published<input type="radio"  {{$unit->status==1?"checked":""}} name="status" value="1" /></span>
                                            <span>UnPublished<input type="radio" {{$unit->status==0?"checked":""}} name="status" value="0" /></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
