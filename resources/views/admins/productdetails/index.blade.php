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
                            <a class="btn btn-success float-end" href="{{route('products.create')}}">Create</a>
                            <table class="table table-sm mb-0 table-striped student-tbl">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    @foreach ($data as $key=>$value)
                                    <tr class="btn-reveal-trigger" >
                                        <td class="py-3">{{$key+1}}</td>
                                        <td class="py-3">{{$value['size']}}</td>
                                        <td class="py-3">{{$value['color']}}</td>
                                        <td class="py-3">
                                            <button class="setting-product btn btn-info">Setting</button>
                                            <button class="remove-product btn btn-danger">Remove</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <form action="{{route('products.destroy',$value['product_id'])}}" method="POST">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger" onclick="return confirm('Ban co muon huy bo khong?')">Huy</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
    var data = {!! json_encode($data) !!};
    var productID = data[0]['product_id'];
    var categoryID = data[0]['category_id'];
    var brandID = data[0]['brand_id'];
    var materialID = data[0]['material_id'];

    $('.setting-product').click(function () {
        var row = $(this).closest("tr");
        var index = row.find("td:eq(0)").text()-1;
        var size_id  = data[index]['size_id'];
        var color_id  = data[index]['color_id'];
        var sizeName = row.find("td:eq(1)").text();
        var colorName = row.find("td:eq(2)").text();

        $.ajax({
            type: 'POST',
            url: '{{ route('product_details.postCreate') }}',
            data: {
                '_token': '{{ csrf_token() }}',
                'product_id': productID,
                'category_id': categoryID,
                'brand_id': brandID,
                'material_id': materialID,
                'size': sizeName,
                'color': colorName,
                'size_id': size_id,
                'color_id': color_id
            },
            success: function (response) {
                if (response.redirectTo) {
                    window.location.href = response.redirectTo;
                }
            },
            error: function () {
                alert('An unexpected error occurred.');
            }
        });
    });
    $('.remove-product').click(function () {
        var row = $(this).closest("tr");
        var sizeName = row.find("td:eq(0)").text();
        var colorName = row.find("td:eq(1)").text();

        $.ajax({
            type: 'POST',
            url: '{{ route('product_details.postRemove') }}',
            data: {
                '_token': '{{ csrf_token() }}',
                'product_id': productID,
                'size': size,
                'color': color
            },
            success: function (response) {
                if (response.redirectTo) {
                    window.location.href = response.redirectTo;
                }
            },
            error: function () {
                alert('An unexpected error occurred.');
            }
        });
    });
});
</script>
@endsection