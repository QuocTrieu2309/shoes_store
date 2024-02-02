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
                            <form class="needs-validation" novalidate action="{{route('product_details.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
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
                                           
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Sku
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="sku"  placeholder="Enter a Sku.." value="{{old('sku')}}">                             
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
                                                <input type="number" class="form-control" name="quantity"  placeholder="Enter a quantity.."  value="{{old('quantity')}}">                             
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
                                                <input type="number" class="form-control" name="price"  placeholder="Enter a Price.."  value="{{old('price')}}" >                             
                                                    @error('price')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="validationCustom01">Size
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8 row">
                                                @php
                                                    $index= 0;
                                                @endphp                                                                                                
                                                @foreach ($size as $item)
                                                @php
                                                    $index++;
                                                @endphp
                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                    <div class="form-check custom-checkbox mb-3">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox{{ $index }}" name="size_id" value="{{$item->id}}" {{ $item->id==old('size_id') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="customCheckBox{{ $index }}">{{$item->name}}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @error('size_id')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-2 col-form-label" for="validationCustom01">Color
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8 row">
                                                @php
                                                    $index= 0;
                                                @endphp                                                                                                
                                                @foreach ($color as $item)
                                                @php
                                                    $index++;
                                                @endphp
                                                <div class="col-xl-4 col-xxl-6 col-6">
                                                    <div class="form-check custom-checkbox mb-3">
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox{{ $index }}" name='color_id' value="{{$item->id}}" {{ $item->id==old('color_id') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="customCheckBox{{ $index }}">{{$item->name}}</label>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @error('color_id')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Create</button>
                                                <a href="{{route('products.show',$data->product_id)}}" class="btn btn-info">Back</a>
                                            </div>
                                        </div>
                                        <input type="number" name="brand_id" value="{{$data['brand_id']}}" hidden>
                                        <input type="number" name="product_id" value="{{$data['product_id']}}" hidden>
                                        <input type="number" name="category_id" value="{{$data['category_id']}}" hidden>
                                        <input type="number" name="material_id" value="{{$data['material_id']}}" hidden>
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