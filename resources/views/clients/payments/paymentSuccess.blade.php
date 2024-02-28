<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán thành công</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Thanh toán thành công!</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Thông tin đơn hàng</h3>
                        <p class="card-text">Mã đơn hàng: {{ $order->id }}</p>
                        <p class="card-text">Tổng tiền: {{ $order->total_money }}</p>
                        <p class="card-text">Địa chỉ giao hàng: {{ $order->address }}</p>
                        <p class="card-text">Phương thức thanh toán: {{ $order->payment_method }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Danh sách sản phẩm</h3>
                        <ul class="list-group">
                            @foreach($order->orderDetails as $orderDetail)
                                <li class="list-group-item">{{ $orderDetail->productDetail->product->name }} - Số lượng: {{ $orderDetail->quantity }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Thông tin người mua</h3>
                <p class="card-text">Tên: {{ $order->user->name }}</p>
                <p class="card-text">Email: {{ $order->user->email }}</p>
                <p class="card-text">Số điện thoại: {{ $order->user->phone }}</p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Thông tin thanh toán</h3>
                <p class="card-text">Số tiền thanh toán: {{ $order->total_money }}</p>
                <p class="card-text">Phương thức thanh toán: {{ $order->payment_method }}</p>
                <p class="card-text">Ngày thanh toán: {{ ($order->payment_method=="Vnpay")? $order->transaction->created_at: "Chua thanh toan" }}</p>
            </div>
        </div>
        <a href="{{route('home')}}" class="btn btn-success mb-5">Continue Shopping</a>
    </div>
</body>
</html>
