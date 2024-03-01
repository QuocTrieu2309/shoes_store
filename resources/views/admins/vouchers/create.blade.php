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
                            <form action="{{route('vouchers.store')}}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="name"  placeholder="Enter a sizename.." value="{{old('name')}}">                             
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
                                        <input type="datetime-local" class="form-control" name="start_time"  placeholder="Enter a sizename.." value="{{old('start_time')}}">                             
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
                                        <input type="datetime-local" class="form-control" name="end_time"  placeholder="Enter a sizename.." value="{{old('end_time')}}">                             
                                            @error('end_time')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Quanity
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="quantity"  placeholder="Enter a quantity.." value="{{old('quantity')}}">                             
                                            @error('quantity')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Type
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="default-select  form-select wide" name="type" >
                                        <option value="{{ App\Models\Voucher::TYPE_PRODUCT }}" {{ old('type') == App\Models\Voucher::TYPE_PRODUCT ? 'selected' : '' }}>{{ App\Models\Voucher::TYPE_PRODUCT }}</option>
                                        <option value="{{ App\Models\Voucher::TYPE_BILL }}" {{ old('type') == App\Models\Voucher::TYPE_BILL ? 'selected' : '' }}>{{ App\Models\Voucher::TYPE_BILL }}</option>
                                    </select>
                                    @error('type')
                                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Minimum Amount
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="minimum_amount"  placeholder="Enter a minimum amount.." value="{{old('minimum_amount')}}">                             
                                            @error('minimum_amount')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Reduced Value
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="number" class="form-control" name="reduced_value"  placeholder="Enter a sizename.." value="{{old('reduced_value')}}">                             
                                            @error('reduced_value')
                                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Create</button>
                                <a href="{{route('vouchers.index')}}" class="btn btn-info">List</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection