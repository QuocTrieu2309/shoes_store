@extends('admins.layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mh-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="col-xl-6 mx-auto">
                            @if(session('msg'))
                                <div class="alert alert-success">{{ session('msg') }}</div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif
                            <form action="{{route('product_details.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Size
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="size_id"  placeholder="Enter a Brandname.." value="{{$data->size_id}}" readonly>                             
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Color
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="color_id"  placeholder="Enter a Brandname.." value="{{$data->color_id}}" readonly>                                                                        
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="image_id"  placeholder="Enter a Brandname..">                             
                                            @error('image_id')
                                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/images/' . $data->img) }}" alt="Ảnh" width="100px">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Sku
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="sku"  placeholder="Enter a Sku.." value="{{$data->sku}}">                             
                                            @error('sku')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Quantity
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="quantity"  placeholder="Enter a quantity.." value="{{$data->quantity}}">                             
                                            @error('quantity')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Price
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="price"  placeholder="Enter a Price.." value="{{$data->price}}">                             
                                            @error('price')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Edit</button>
                                <a href="{{route('products.show',$data->product_id)}}" class="btn btn-info">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection