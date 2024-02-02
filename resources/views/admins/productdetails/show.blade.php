@extends('admins.layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mh-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body px-0">
                        @if(session('msg'))
                        <div class="alert alert-success">{{ session('msg') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                        <div class="table-responsive">
                            <table class="table table-sm mb-0 table-striped student-tbl">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Sku</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Promotion Price</th>
                                    </tr>
                                </thead>
                                <tbody id="customers">             
                                    <tr class="btn-reveal-trigger">
                                        <td class="py-3">{{$data->product->name}}</td>
                                        <td class="py-3"><img src="{{ asset('storage/images/' . $data->image->url) }}" alt="Ảnh" width="100px"></td>
                                        <td class="py-3">{{$data->color->name}}</td>
                                        <td class="py-3">{{$data->size->name}}</td>
                                        <td class="py-3">{{$data->sku}}</td>
                                        <td class="py-3">{{$data->quantity}}</td>
                                        <td class="py-3">{{$data->price}}</td>
                                        <td class="py-3">{{$data->promotion_price}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection