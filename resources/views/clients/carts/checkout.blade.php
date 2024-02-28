@extends('clients.layouts.master')
@section('css')
@endsection
@section('content')
<main class="main main-test">
    <div class="container checkout-container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li>
                <a href="cart.html">Shopping Cart</a>
            </li>
            <li class="active">
                <a href="checkout.html">Checkout</a>
            </li>
            <li class="disabled">
                <a href="#">Order Complete</a>
            </li>
        </ul>
        <div class="checkout-discount">
            <h4>Have a coupon?
                <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle">ENTER YOUR CODE</button>
            </h4>

            <div id="collapseTwo" class="collapse">
                <div class="feature-box">
                    <div class="feature-box-content">
                        <p>If you have a coupon code, please apply it below.</p>

                        <form action="#" id="form-voucher">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm w-auto voucher-input" placeholder="Coupon code" required="" />
                                <div class="input-group-append">
                                    <button class="btn btn-sm mt-0" type="submit">
                                        Apply Coupon
                                    </button>
                                    <span class="voucher-message ml-5"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <ul class="checkout-steps">
                    <li>
                        <h2 class="step-title">Billing details</h2>

                        <form action="#" id="checkout-form">
                            <div class="form-group">
                                <label>Address:</label>
                                <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control address-input" value="{{session('user')->address}}" />
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- End .col-lg-8 -->

            <div class="col-lg-5">
                <div class="order-summary">
                    <h3>YOUR ORDER</h3>

                    <table class="table table-mini-cart">
                        <thead>
                            <tr>
                                <th colspan="2">Product</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->cartDetails as $cartDetail)            
                            <tr>
                                <td class="product-col">
                                    <h3 class="product-title">
                                        {{$cartDetail->productDetail->product->name}} -
                                        <span class="product-qty">{{$cartDetail->productDetail->size->name}} -</span>
                                        <span class="product-qty">{{$cartDetail->productDetail->color->name}} x</span>
                                        <span class="product-qty">{{$cartDetail->quantity}} </span>
                                    </h3>
                                </td>

                                <td class="price-col">
                                    <span class='total-price'>{{($cartDetail->productDetail->promotional_price)? ($cartDetail->productDetail->promotional_price)*($cartDetail->quantity):($cartDetail->productDetail->price)*($cartDetail->quantity)}}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <td>
                                    <h4>Subtotal</h4>
                                </td>
                                
                                <td class="price-col">
                                    <span class = 'subtotal-price'></span>
                                </td>
                            </tr>
                            <tr class="voucher">
                                <td class="product-col">
                                    <h3 class="voucher-title">
                                        
                                    </h3>
                                </td>

                                <td class="price-col">
                                    <span class="reduced-value"></span>
                                </td>
                            </tr>
                            <tr class="order-shipping">
                                <td class="text-left" colspan="2">
                                    <h4 class="m-b-sm">Payment</h4>
                                    
                                    <div class="form-group form-group-custom-control">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="pay_method"  value="Vnpay"/>
                                            <label class="custom-control-label">VnPay</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .form-group -->

                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio d-flex mb-0">
                                            <input type="radio" name="pay_method" class="custom-control-input" value="Thanh toán khi nhận hàng">
                                            <label class="custom-control-label">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                    <!-- End .form-group -->
                                </td>

                            </tr>

                            <tr class="order-total">
                                <td>
                                    <h4>Total</h4>
                                </td>
                                <td>
                                    <b class="order-total-price"><span>$1,603.80</span></b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <button type="submit" class="btn btn-dark btn-place-order" form="checkout-form">
                        Place order
                    </button>
                </div>
                <!-- End .cart-summary -->
            </div>
            <!-- End .col-lg-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script> 
$(document).ready(function() {
    subTotal();

    $('#form-voucher').on('submit', function(event) {
        event.preventDefault();
        var voucher = $('.voucher-input').val();
        if (voucher) {
            $.ajax({
                type: 'GET',
                url: '{{ route('vouchers.check') }}',
                data: {
                    'name': voucher
                },
                success: function(data) {
                    console.log(data.data)
                    if (data.status == 'success') {
                        $('.voucher-message').text('Voucher Hợp Lệ!!!');
                        $('.voucher-message').addClass('text-success');
                        var voucherTitle = "Giảm " + data.data.reduced_value + " đ áp dụng cho đơn hàng có giá trị " + data.data.type + ' trên ' + data.data.minimum_amount;
                        $('.voucher-title').text(voucherTitle);
                        $('.reduced-value').text(-parseFloat(data.data.reduced_value));
                        subTotal();
                        payment();
                    } else {
                        $('.voucher-message').text('Voucher Không Hợp Lệ!!!');
                        $('.voucher-message').addClass('text-warning');
                    }
                },
                error: function() {
                    alert('An unexpected error occurred.');
                }
            });
        }
    });

    $('.btn-place-order').on('click', function() {
        payment();
    });

    function subTotal() {
        var totalPrice = 0;
        $('.total-price').each(function() {
            totalPrice += parseFloat($(this).text());
        });
        var reducedPrice = $('.reduced-value').text();
        if (reducedPrice !== "") {
            $('.subtotal-price').text(totalPrice);
            $('.order-total-price').text(totalPrice + parseFloat(reducedPrice));
        } else {
            $('.subtotal-price').text(totalPrice);
            $('.order-total-price').text(totalPrice);
        }
    }

    function payment() {
        const selectedValue = $('input[name="pay_method"]:checked').val();
        var totalMoney = $('.order-total-price').text();
        var address = $('.address-input').val();
        
        if (selectedValue && totalMoney) {
            $.ajax({
                type: "POST",
                url: '{{ route('payment.request') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'payment_method': selectedValue,
                    'total_money': totalMoney,
                    'address': address
                },
                success: function(data) {
                   if(data.status == 'success'){
                    if(data.payment_url){
                        window.location.href = data.payment_url;
                    }
                    if(data.payment_success_url){
                        window.location.href = data.payment_success_url;
                    }
                   }else{
                    alert('Thanh toan khong thanh cong vui long thu lai');
                   }
                },
                error: function() {
                   alert('Viec thanh toan găp lỗi . Vui lòng thử lại sau.');
                }
            });
        }
    }
});

</script>

@endsection