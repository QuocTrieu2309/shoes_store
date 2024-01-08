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
                            <a class="btn btn-success float-end" href="{{route('colors.create')}}">Create</a>
                            <table class="table table-sm mb-0 table-striped student-tbl">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    @foreach ($data as $item)
                                    
                                    <tr class="btn-reveal-trigger">
                                        <td class="py-3">{{$item->name}}</td>
                                        <td class="py-3">
                                            <a href="{{route('colors.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                                            <form action="{{route('colors.destroy',$item->id)}}" method="POST">
                                                @csrf
                                               @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa hay không?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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