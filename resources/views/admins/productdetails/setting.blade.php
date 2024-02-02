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
                            <form action="{{route('product_details.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Size
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  placeholder="Enter a Brandname.." value="{{$data['size']}}" readonly>                             
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Color
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  placeholder="Enter a Brandname.." value="{{$data['color']}}" readonly>                                                                        
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="image_id" >                             
                                            @error('image_id')
                                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Sku
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="sku"  placeholder="Enter a Sku..">                             
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
                                        <input type="number" class="form-control" name="quantity"  placeholder="Enter a quantity..">                             
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
                                        <input type="number" class="form-control" name="price"  placeholder="Enter a Price.." >                             
                                            @error('price')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="number" name="brand_id" value="{{$data['brand_id']}}" hidden>
                                <input type="number" name="product_id" value="{{$data['product_id']}}" hidden>
                                <input type="number" name="category_id" value="{{$data['category_id']}}" hidden>
                                <input type="number" name="material_id" value="{{$data['material_id']}}" hidden>
                                <input type="number" name="color_id" value="{{$data['color_id']}}" hidden>
                                <input type="number" name="size_id" value="{{$data['size_id']}}" hidden>

                                <button class="btn btn-primary" type="submit">Create</button>
                                <a href="{{route('product_details.index')}}" class="btn btn-info">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection