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
                            <form class="needs-validation" novalidate action="{{route('products.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="mb-3 row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Productname
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom01"  placeholder="Enter a Productname.." name="name" value="{{old('name')}}">
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
                                                        <option value="{{$item->id}}" {{old('category_id') == $item->id?'selected':''}}>{{$item->name}}</option>
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
                                                        <option value="{{$item->id}}" {{old('brand_id') == $item->id?'selected':''}}>{{$item->name}}</option>
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
                                                        <option value="{{$item->id}}" {{old('material_id') == $item->id?'selected':''}}>{{$item->name}}</option>
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
                                                <textarea class="form-txtarea form-control" rows="5" id="comment" name="description">{{old('description')}}</textarea>
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
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox{{ $index }}" name="size_id[]" value="{{$item->id}}" {{ in_array($item->id, old('size_id', [])) ? 'checked' : '' }}>
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
                                                        <input type="checkbox" class="form-check-input" id="customCheckBox{{ $index }}" name='color_id[]' value="{{$item->id}}" {{ in_array($item->id, old('color_id', [])) ? 'checked' : '' }}>
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
                                                <a href="{{route('products.index')}}" class="btn btn-info">Back</a>
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