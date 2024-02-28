@extends('clients.layouts.master')
@section('css')
@endsection
@section('content')
<main class="main">
    <div class="container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <a href="cart.html">Shopping Cart</a>
            </li>
            <li>
                <a href="checkout.html">Checkout</a>
            </li>
            <li class="disabled">
                <a href="cart.html">Order Complete</a>
            </li>
        </ul>

        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table-container">
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th class="thumbnail-col"></th>
                                <th class="product-col">Product</th>
                                <th class="product-col">Size</th>
                                <th class="product-col">Color</th>
                                <th class="price-col">Price</th>
                                <th class="qty-col">Quantity</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->cartDetails as $cartDetail)                            
                            <tr class="product-row">
                                <td>
                                    <figure class="product-image-container">
                                        <a href="#" class="product-image">
                                            <img src="{{asset('storage/images/'.$cartDetail->productDetail->image->url)}}" width="100px" alt="product">
                                        </a>
                                    </figure>
                                </td>
                                <td class="product-col">
                                    <h5 class="product-title"  data-id = "{{$cartDetail->id}}">
                                        <a href="#">{{$cartDetail->productDetail->product->name}}</a>
                                    </h5>
                                </td>
                                <td class="product-col">
                                    <h5 class="product-size">
                                        <a href="#">{{$cartDetail->productDetail->size->name}}</a>
                                    </h5>
                                </td>
                                <td class="product-col">
                                    <h5 class="product-color">
                                        <a href="#">{{$cartDetail->productDetail->color->name}}</a>
                                    </h5>
                                </td>
                                <td>
                                    @if (!$cartDetail->productDetail->promotional_price)
                                        {{$cartDetail->productDetail->price}}
                                    @else
                                    {{$cartDetail->productDetail->promotional_price}}
                                    @endif
                                    đ
                                </td>
                                <td>
                                    <div class="product-single-qty">
                                        <button class="quantity-control" data-action="decrement">-</button>
                                        <input class=" form-control quantity-value" type="number" value="{{$cartDetail->quantity}}" min=0 readonly>
                                        <button class="quantity-control" data-action="increment">+</button>
                                    </div>
                                </td>
                                <td class="text-right"><span class="subtotal-price">{{($cartDetail->quantity)*($cartDetail->productDetail->price)}}</span><strong>đ</strong></td>
                            </tr>
                            @endforeach

                        </tbody>


                        {{-- <tfoot>
                            <tr>
                                <td colspan="5" class="clearfix">
                                    <div class="float-left">
                                        <div class="cart-discount">
                                            <form action="#" >
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm voucher-input"
                                                        placeholder="Coupon Code" required>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-sm btn-voucher">Apply
                                                        Coupon</button>
                                                        <span class="voucher-message ml-5"></span>
                                                    </div>
                                                </div><!-- End .input-group -->
                                            </form>
                                        </div>
                                    </div><!-- End .float-left -->
                                </td>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->

            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3>CART TOTALS</h3>

                    <table class="table table-totals">
                        <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td><span id="total-price"></span>đ</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="checkout-methods">
                        <a href="{{route('checkout')}}" class="btn btn-block btn-dark">Proceed to Checkout
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div><!-- End .cart-summary -->
            </div><!-- End .col-lg-4 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        updateTotalPrice();
        $(".quantity-control").on("click", function () {
            var action = $(this).data("action");
            var productRow = $(this).closest(".product-row");
            var quantityValueInput = productRow.find(".quantity-value");
            var priceElement = productRow.find("td:nth-child(5)");
            var subtotalElement = productRow.find(".subtotal-price");
            var cartDetail = productRow.find(".product-title");
            var cartDetailID = cartDetail.data('id');

            var currentQuantity = parseInt(quantityValueInput.val());
            var price = parseFloat(priceElement.text());

            if (action === "increment") {
                currentQuantity++;
            } else if (action === "decrement" && currentQuantity > 0) {
                currentQuantity--;
            }

            var quantity = (quantityValueInput.val(currentQuantity)).val();

            var subtotal = currentQuantity * price;
            subtotalElement.text(subtotal.toFixed(2));
            console.log(quantity,cartDetailID);
            updateTotalPrice();
            if(quantity > 0){
                if(cartDetail){
                    $.ajax({
                        type: "PUT",
                        url: '{{route('cart-update')}}',
                        data:{
                          '_token': '{{csrf_token()}}',
                          'cart_detail_id':cartDetailID,
                          'quantity': quantity  
                        },
                        success: function (data){
                               console.log(data.data);
                        },
                        error: function () {
                            alert('An unexpected error occurred.');
                        }

                    });
                }
                
            }else{
                var checkDelete = confirm('Ban co muon xoa hay khong?');
                if(cartDetail && checkDelete){
                    $.ajax({
                        type: "DELETE",
                        url: '{{route('cart-destroy')}}',
                        data:{
                          '_token': '{{csrf_token()}}',
                          'cart_detail_id':cartDetailID,  
                        },
                        success: function (data){
                               if(data.status == 'success'){
                                productRow.remove();
                               }
                        },
                        error: function () {
                            alert('An unexpected error occurred.');
                        }

                    });
                }

            }
        });
        // $('form').on('submit', function(event) {
        //    event.preventDefault(); 
        //    var voucher = $('.voucher-input').val();
        //    if(voucher){
        //     $.ajax({
        //         type:'GET',
        //         url:'{{route('vouchers.check')}}',
        //         data:{
        //             'name': voucher
        //         },
        //         success: function (data){
        //             if(data.status == 'success'){
        //                 $('.voucher-message').text('Voucher Hợp Lệ!!!');
        //                 $('.voucher-message').addClass('text-success');
        //             }else{
        //                 $('.voucher-message').text('Voucher Không Hợp Lệ!!!');
        //                 $('.voucher-message').addClass('text-warning');
        //             }
        //         },
        //         error: function () {
        //                     alert('An unexpected error occurred.');
        //                 }
        //     });
        //    }
        // });

        function updateTotalPrice() {
            var subtotalElements = $(".subtotal-price");
            var totalPriceElement = $("#total-price");
            var totalPrice = 0;

            subtotalElements.each(function () {
                totalPrice += parseFloat($(this).text());
            });

            totalPriceElement.text(totalPrice.toFixed(2));
        }
    });
</script>

@endsection