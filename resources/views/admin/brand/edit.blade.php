@extends('admin.master')

@section('title', 'Edit Brand')

@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Edit Brand</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">edit Brand</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class=" col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Brand Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{route('brand.update', ['id' => $brand->id])}}">
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label" >Brand Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" value="{{$brand->name}}" placeholder="Brand Name" type="text" name="name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="lastName" placeholder="Brand Description" type="text" name="description">{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" type="file" name="image">
                                <img class="pt-4" src="{{asset($brand->image)}}" alt="" width="100px" height="100px">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-3 form-label">Published Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$brand->status == 1 ? 'checked': ''}} value="1">Published</label>
                                <label><input type="radio" name="status" {{$brand->status == 0 ? 'checked': ''}}  value="2">UnPublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Brand Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
