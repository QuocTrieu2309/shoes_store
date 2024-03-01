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
    
        <div class="container shop-off-canvas">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Men</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                </ol>
            </nav>
    
            <div class="row">
                <div class="col-lg-12">
                    <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                        <div class="toolbox-left">
                            <a href="#" class="sidebar-toggle d-inline-flex"><svg data-name="Layer 3" id="Layer_3"
                                    viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                    <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                    <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                    <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                    <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                    <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                    <path
                                        d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                        class="cls-2"></path>
                                    <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                    <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                    <path
                                        d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                        class="cls-2"></path>
                                </svg>
                                <span>Filter</span>
                            </a>
                        </div>
                        <!-- End .toolbox-left -->
    
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-sort ml-lg-auto">
                                <label>Sort By:</label>
    
                                <div class="select-custom">
                                    <select name="orderby" class="form-control">
                                        <option value="default" selected="selected">Default sorting</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->   
                            <div class="toolbox-item layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                            </div>
                            <!-- End .layout-modes -->
                        </div>
                        <!-- End .toolbox-right -->
                    </nav>
    
                    <div class="row">
                        <div class="default row">
                            @if (isset($data) &&!empty($data)) 
                            @foreach ($data as $item)
                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="product-default">
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
                            </div>
                            @endforeach            
                            @else               
                            <p>Khong co san pham nao phu hop</p>
                            @endif
                        </div>
                        <!-- End .col-sm-4 -->
                        <div class="filter row">
                        </div>
                    </div>
                    <!-- End .row -->
    
                    <nav class="toolbox toolbox-pagination">
                        <!-- End .toolbox-item -->
    
                        <ul class="pagination toolbox-item">
                            {{$data->links()}}
                        </ul>
                    </nav>
                </div>
                <!-- End. col-lg-9 -->
    
                <div class="sidebar-overlay"></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar custom-scrollbar position-fixed ">
                    <div class="sidebar-wrapper position-static">
    
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                            </h3>
    
                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body pb-0">
                                    <form action="#">
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div>
                                            <!-- End #price-slider -->
                                        </div>
                                        <!-- End .price-slider-wrapper -->
    
                                        <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="filter-price-text">
                                                Price:
                                                <span id="filter-price-range"></span>
                                            </div>
                                            <!-- End .filter-price-text -->
    
                                            <button class="btn btn-primary btn-filter">Filter</button>
                                        </div>
                                        <!-- End .filter-price-action -->
                                    </form>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
    
                        <div class="widget widget-color">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Color</a>
                            </h3>
    
                            <div class="collapse show" id="widget-body-4">
                                <div class="widget-body pb-0">
                                    <ul class="config-swatch-list">
                                        @foreach ($colors as $color)    
                                        <li>
                                            <a href="javascript:void(0)" style="background-color:{{$color->name}};" data-id='{{$color->id}}' class="color-id"></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
    
                        <div class="widget widget-size">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
                            </h3>
    
                            <div class="collapse show" id="widget-body-5">
                                <div class="widget-body pb-0">
                                    <ul class="config-size-list">
                                        @foreach ($sizes as $size)    
                                        <li>
                                            <a href="javascript:void(0)" data-id ='{{$size->id}}' class="size-id">{{$size->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <a href="javascript:void(0)" class="btn btn-danger btn-reset">Reset All</a>
                    </div>
                    <!-- End .sidebar-wrapper -->
                </aside>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    
        <div class="mb-4"></div>
        <!-- margin -->
    </div>
</main>
<script src="{{asset('porto_ecommerce/assets/js/nouislider.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        var priceArray = [];
        var colorId = null;
        var sizeId = null;
        var sortValue = null;
        $('.filter').hide();
       $('.btn-filter').on('click',function(e){
            var price = $('#filter-price-range').text();
            var price = price.replaceAll('đ','');
                priceArray = price.split('-');
            filter();
       });
       $('.color-id').on('click',function(){
          colorId = $(this).data('id');
          parentElement = $(this).parent();
          $('.color-id').parent().removeClass('active');
          parentElement.addClass('active');
         filter();
       });
       $('.size-id').on('click',function(){
          sizeId = $(this).data('id');
          filter();
       });
       $('select[name="orderby"]').change(function() {
          sortValue = $(this).val();
          if(sortValue == 'default'){
            sortValue = null;
          }
          filter();
       });
       $('.btn-reset').on('click',function(){
          location.reload();
       });
       function filter(){
           $.ajax({
            type: 'GET',
            url: '{{route('shop.filter')}}',
            data:{
                '_token':'{{csrf_token()}}',
                'price': priceArray,
                'color_id':colorId,
                'size_id':sizeId,
                'sort': sortValue
            },
            success: function(data){
                if(data.status == 'success'){
                    console.log(data.data)
                    $('.filter').html('');
                    $('.default').hide();
                    $('.filter').show();
                    data.data.forEach(item => {
    $('.filter').append(`
        <div class="col-6 col-sm-4 col-md-3">
            <div class="product-default">
                <figure>
                    <a href="/detailProduct/${item.product_id}">
                        <img src="/storage/images/${item.image.url}" alt="product" width="300" height="300">
                    </a>
                    <div class="label-group">
                        <span class="product-label label-hot">HOT</span>
                    </div>
                </figure>
                <div class="product-details">
                    <div class="category-list">
                    </div>
                    <h3 class="product-title"> <a href="demo9-product.html">${item.product.name}</a> </h3>
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
                   ${item.promotional_price ? 
                   `<span class="old-price">${item.price}đ</span>
                   <span class="product-price">${item.promotional_price}đ</span>` 
                   : `<span class="product-price">${item.price}đ</span>`
                     }
                     </div>
                    <!-- End .price-box -->
                    <div class="product-action">
                        <a href="#" class="btn-icon btn-add-cart product-type-simple" data-id="${item.product_id}"><i
                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                    </div>
                </div>
                <!-- End .product-details -->
            </div>
        </div>
    `);
});       
            }     
            },
            error:function(){
                alert('Co loi!');
            }
           });
       }
    });
</script>
@endsection