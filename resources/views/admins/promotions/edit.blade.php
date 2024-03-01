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
                            <form action="{{route('promotions.update',$promotion->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name"  placeholder="Enter a sizename.." value="{{$promotion->name}}">                             
                                            @error('name')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Start Time
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="datetime-local" class="form-control" name="start_time"  placeholder="Enter a sizename.." value="{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $promotion->start_time)->format('Y-m-d\TH:i')}}">                             
                                            @error('start_time')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">End Time
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="datetime-local" class="form-control" name="end_time"  placeholder="Enter a sizename.." value="{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $promotion->end_time)->format('Y-m-d\TH:i')}}">                             
                                            @error('end_time')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Type Promotion
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="default-select  form-select wide" name="type_promotion" >
                                        <option value="{{ App\Models\Promotion::TYPE_PERCENT }}" {{ $promotion->type_promotion == App\Models\Promotion::TYPE_PERCENT ? 'selected' : '' }}>{{ App\Models\Promotion::TYPE_PERCENT }}</option>
                                        <option value="{{ App\Models\Promotion::TYPE_PRICE }}" {{ $promotion->type_promotion == App\Models\Promotion::TYPE_PRICE ? 'selected' : '' }}>{{ App\Models\Promotion::TYPE_PRICE }}</option>
                                    </select>
                                    @error('type_promotion')
                                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Value
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="value"  placeholder="Enter a value.." value="{{$promotion->value}}">                             
                                            @error('value')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Description
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="description" cols="30" rows="7" class="form-control">{{$promotion->description}}</textarea>                            
                                            @error('description')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a href="{{route('promotions.index')}}" class="btn btn-info">List</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection