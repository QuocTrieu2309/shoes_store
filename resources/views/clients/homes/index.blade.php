@extends('clients.layouts.master')
@section('content')
   <main class="main">
    <div class="container">
        <div class="row m-b-3">
            <div class="home-slider-container col-lg-9 offset-lg-3">
                <div class="home-slider owl-carousel owl-carousel-lazy owl-theme slide-animate" data-owl-options="{
                    'nav': false
                }">
                    <div class="home-slide banner">
                        <a href="demo9-shop.html">
                            <img class="slide-bg" src="porto_ecommerce/assets/images/demoes/demo9/slider/slide-1.jpg" style="background-color: #ccc;" alt="banner" width="835" height="410" />
                        </a>
                        <div class="banner-layer slide-1 text-xl-right banner-layer-middle">
                            <h4 class="text-xl-right slide-title appear-animate" data-animation-delay="100" data-animation-name="fadeInUpShorter">Find the Boundaries. Push Through!</h4>
                            <h2 class="text-xl-right text-uppercase sub-title appear-animate" data-animation-delay="300" data-animation-name="fadeInUpShorter">Shoes Sale</h2>
                            <div class="row">
                                <div class="col-auto col-md-6 appear-animate" data-animation-delay="500" data-animation-name="fadeInRightShorter">
                                    <h3 class="sale-label line-height-1 mb-0 d-inline-block text-center">
                                        40<small><sup>%</sup><sub>OFF</sub></small></h3>
                                </div>
                                <div class="col-auto col-md-6 content-right appear-animate" data-animation-delay="700" data-animation-name="fadeInRightShorter">
                                    <h4 class="d-inline-block text-left text-uppercase line-height-1 d-inline-block">
                                        Starting At</h4>
                                    <h5 class="text-left coupon-sale-text">$<b>119</b>99</h5>
                                    <div class="mb-0">
                                        <a href="demo9-shop.html" class="btn btn-modern btn-md btn-dark">SHOP
                                            NOW!
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="home-slide banner">
                        <a href="demo9-shop.html">
                            <img class="slide-bg" src="porto_ecommerce/assets/images/demoes/demo9/slider/slide-2.jpg" style="background-color: #444;" alt="banner" width="835" height="410" />
                        </a>
                        <div class="banner-layer slide-2 text-right banner-layer-middle">
                            <div>
                                <h2 class="text-right text-uppercase text-primary ls-n-20 m-b-2 appear-animate" data-animation-delay="100" data-animation-name="fadeInUpShorter">FLASH SALE
                                </h2>
                                <h4 class="text-right m-b-2 appear-animate" data-animation-delay="300" data-animation-name="fadeInUpShorter">TOP BRANDS<br>SUMMER SUNGLASSES
                                </h4>
                                <h3 class="text-right text-uppercase text-light ls-n-20 m-b-4 appear-animate" data-animation-delay="500" data-animation-name="fadeInUpShorter">
                                    STARTING<br>AT<sup class="pl-2 ml-1">$</sup>199<sup>99</sup></h3>
                                <div class="pt-1">
                                    <a href="demo9-shop.html" class="btn btn-modern btn-lg btn-light appear-animate" data-animation-delay="700" data-animation-name="fadeInUpShorter">View
                                        Sale</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .home-slider -->
            </div>
            <!-- End .col-lg-9 -->
        </div>
        <!-- End .row -->

        <section class="featured-products-section">
            <h2 class="section-title title-decorate text-center d-flex align-items-center appear-animate" data-animation-delay="100" data-animation-duration="1500">Featured Products</h2>

            <div class="owl-carousel owl-theme nav-image-center" data-owl-options="{
                    'margin': 20,
                    'dots': false,
                    'nav': true,
                    'loop': false,
                    'autoplay': false,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">
                @foreach ($data as $item)
                    
                <div class="product-default left-details">
                    <figure>
                        <a href="{{route('detailProduct',$item->id)}}">
                            <img src="{{ asset('storage/images/' . ($item->productDetails)[0]->image->url) }}" alt="product" width="300" height="300">
                        </a>
                        <div class="label-group">
                            <span class="product-label label-hot">HOT</span>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                        </div>
                        <h3 class="product-title"> <a href="demo9-product.html">{{$item->name}}</a> </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            @if ($item->min_price ==$item->max_price)
                                <span class="product-price">{{$item->min_price}}đ</span>   
                            @else
                                <span class="product-price">{{$item->min_price}}đ – {{$item->max_price}}đ</span>
                            @endif
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            @if ($item->min_price ==$item->max_price)
                            <a href="#" class="btn-icon btn-add-cart product-type-simple" data-id="{{$item->id}}"><i
                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>   
                            @else
                            <a href="{{route('detailProduct',$item->id)}}" class="btn-icon btn-add-cart"><i
                                class="fa fa-arrow-right"></i><span>SELECT
                                OPTIONS</span></a>
                            @endif
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                @endforeach
            </div>
        </section>
        <!-- End .row.home-products -->

        <div class="mb-3"></div>
        <!-- margin -->

        <div class="m-b-1"></div>
        <!-- margin -->
    </div>
    <!-- End .container -->
  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.btn-add-cart').on('click',function(){
        var productID = $(this).data('id');
        $.ajax({
           type: 'POST',
           url: '{{route('add-cart')}}',
           data: {
            '_token':'{{csrf_token()}}',
            'product_id': productID,
            'quantity': 1
           },
           success: function(data){
                console.log(data.data);
           },
           error: function(){

           }

        });
      });
    });
  </script>
@endsection