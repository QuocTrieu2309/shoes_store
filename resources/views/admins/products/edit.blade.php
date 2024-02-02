@extends('admins.layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mh-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="col-xl-12 mx-auto">
                            @if(session('msg'))
                                <div class="alert alert-success">{{ session('msg') }}</div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <form class="needs-validation" novalidate action="{{route('products.update',$data->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xl-10 mx-auto">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Productname
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom01"  placeholder="Enter a Productname.." name="name" value="{{$data->name}}">
                                                @error('name')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Category
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select  form-control wide" name="category_id" >
                                                    @foreach ($category as $item)
                                                        <option value="{{$item->id}}" {{$productDetail->category_id == $item->id?'selected':''}}>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Brand
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select  form-control wide" name="brand_id" >
                                                    @foreach ($brand as $item)
                                                        <option value="{{$item->id}}" {{$productDetail->brand_id == $item->id?'selected':''}}>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('brand_id')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Material
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="default-select  form-control wide" name='material_id'>
                                                    @foreach ($material as $item)
                                                        <option value="{{$item->id}}" {{$productDetail->material_id == $item->id?'selected':''}}>{{$item->name}}</option>
                                                     @endforeach
                                                </select>
                                                @error('material_id')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Description
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-txtarea form-control" rows="5" id="comment" name="description">{{$data->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
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
</div>
@endsection