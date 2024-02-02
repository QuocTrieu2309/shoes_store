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
                            <table class="table table-sm mb-0 table-striped student-tbl mb-3">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Material</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    @foreach ($data as $item)
                                    <tr class="btn-reveal-trigger">
                                        <td class="py-3">{{$item->name}}</td>
                                        <td>
                                            <img src="{{asset('storage/images/' . $item->info['image']) }}" alt="Ảnh" width="100px">
                                        </td>
                                        <td>{{$item->info['category']}}</td>
                                        <td>{{$item->info['brand']}}</td>
                                        <td>{{$item->info['material']}}</td>
                                        <td class="py-3">{{$item->description}}</td>
                                        <td class="py-3">
                                            <a href="{{route('products.show',$item->id)}}" class="btn btn-info">Show</a>
                                            <a href="{{route('products.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                            <form action="{{route('products.destroy',$item->id)}}" method="POST">
                                                @csrf
                                               @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa hay không?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection