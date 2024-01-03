@extends('admins.layouts.master')
@section('content')
<div class="content-body">
    <div class="container-fluid mh-auto">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <a class="btn btn-success float-end" href="{{route('roles.create')}}">Create</a>
                            <table class="table table-sm mb-0 table-striped student-tbl">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="customers">
                                    @foreach ($data as $item)
                                    
                                    <tr class="btn-reveal-trigger">
                                        <td class="py-3">{{$item->name}}</td>
                                        <td class="py-3"><button  class="statusButton active btn btn-info" data-role-id="{{$item->id}}">{{$item->status}}</button> </td>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        var allButtons =  $('.statusButton');
        allButtons.each(function (index, element) {
           if($(element).text()=='inactive'){
              $(element).addClass("btn-danger");
           }
        });
        $('.statusButton').click(function () {
            var button = $(this);
            var roleId = button.data('role-id');
            $.ajax({
                type: 'POST',
                url: '{{ route('toggle.status') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'role_id': roleId
                },
                success: function (data) {
                    if (data.status === 'success') {
                        toggleStatus(button);
                    } else {
                        alert('Error: ' + data.message);
                    }
                },
                error: function () {
                    alert('An unexpected error occurred.');
                }
            });
        });

        function toggleStatus(button) {
            if (button.text() === "active") {
                button.text("inactive");
                button.addClass("btn-danger");
            } else {
                button.text("active");
                button.removeClass("btn-danger");
            }
        }
    });
</script>
@endsection