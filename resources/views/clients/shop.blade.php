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
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->
    
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>
    
                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->
    
                            <div class="toolbox-item layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                                <a href="category-list.html" class="layout-btn btn-list" title="List">
                                    <i class="icon-mode-list"></i>
                                </a>
                            </div>
                            <!-- End .layout-modes -->
                        </div>
                        <!-- End .toolbox-right -->
                    </nav>
    
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-1.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-1-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D Bluetooth
                                            Speaker</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i><span>SELECT
                                                OPTIONS</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-2.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-2-2.jpg" width="280" height="280" alt="product" />
                                    </a>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual HandBag</a>
                                    </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="product-price">$33.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i><span>SELECT
                                                OPTIONS</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-3.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-3-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate 3D
                                            Speaker</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
    
                                    </div>
                                    <!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-4.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-4-2.jpg" width="280" height="280" alt="product">
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-sale">-30%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Blue Backpack for the Young -
                                            S</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i><span>SELECT
                                                OPTIONS</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-5.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-5-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Casual Spring Blue Shoes</a>
                                    </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-6.jpg" width="280" height="280" alt="product">
                                        <img src="assets/images/products/product-6-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-sale">-8%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a>
                                    </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-7.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-7-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-sale">-8%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual
                                            Glasses</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-8.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-8-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-sale">-40%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual
                                            Glasses</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-9.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-9-2.jpg" width="280" height="280" alt="product" />
                                    </a>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Black Men Casual Glasses</a>
                                    </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="product.html" class="btn-icon btn-add-cart"><i
                                                class="fa fa-arrow-right"></i><span>SELECT
                                                OPTIONS</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-10.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-10-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-sale">-30%</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Basketball Sports Blue
                                            Shoes</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-11.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-11-2.jpg" width="280" height="280" alt="product" />
                                    </a>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Men Sports Travel Bag</a>
                                    </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
    
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="product-default">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-12.jpg" width="280" height="280" alt="product" />
                                        <img src="assets/images/products/product-12-2.jpg" width="280" height="280" alt="product" />
                                    </a>
    
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
    
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                            <a href="category.html" class="product-category">category</a>
                                        </div>
                                    </div>
    
                                    <h3 class="product-title"> <a href="product.html">Brown HandBag</a> </h3>
    
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:100%"></span>
                                            <!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <!-- End .product-ratings -->
                                    </div>
                                    <!-- End .product-container -->
    
                                    <div class="price-box">
                                        <span class="old-price">$90.00</span>
                                        <span class="product-price">$70.00</span>
                                    </div>
                                    <!-- End .price-box -->
    
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                                <!-- End .product-details -->
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
                    </div>
                    <!-- End .row -->
    
                    <nav class="toolbox toolbox-pagination">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>
    
                            <div class="select-custom">
                                <select name="count" class="form-control">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                            <!-- End .select-custom -->
                        </div>
                        <!-- End .toolbox-item -->
    
                        <ul class="pagination toolbox-item">
                            <li class="page-item disabled">
                                <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End. col-lg-9 -->
    
                <div class="sidebar-overlay"></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar custom-scrollbar position-fixed ">
                    <div class="sidebar-wrapper position-static">
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                            </h3>
    
                            <div class="collapse show" id="widget-body-2">
                                <div class="widget-body">
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#widget-category-1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="widget-category-1">
                                                Accessories<span class="products-count">(3)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse show" id="widget-category-1">
                                                <ul class="cat-sublist">
                                                    <li>Caps<span class="products-count">(1)</span></li>
                                                    <li>Watches<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-2" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-2">
                                                Dress<span class="products-count">(4)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-2">
                                                <ul class="cat-sublist">
                                                    <li>Clothing<span class="products-count">(4)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-3" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-3">
                                                Electronics<span class="products-count">(2)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-3">
                                                <ul class="cat-sublist">
                                                    <li>Headphone<span class="products-count">(1)</span></li>
                                                    <li>Watch<span class="products-count">(1)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-4" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-4">
                                                Fashion<span class="products-count">(6)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-4">
                                                <ul class="cat-sublist">
                                                    <li>Shoes<span class="products-count">(4)</span></li>
                                                    <li>Bag<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Music</a><span class="products-count">(2)</span></li>
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
    
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
    
                                            <button type="submit" class="btn btn-primary">Filter</button>
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
                                        <li class="active">
                                            <a href="#" style="background-color: #000;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #0188cc;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #81d742;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #6085a5;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #ab6e6e;"></a>
                                        </li>
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
                                        <li class="active"><a href="#">XL</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">S</a></li>
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->
    
                        <div class="widget widget-featured">
                            <h3 class="widget-title">Featured</h3>
    
                            <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-4.jpg" width="75" height="75" alt="product" />
                                                    <img src="assets/images/products/product-4-2.jpg" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Blue Backpack for
                                                        the Young - S</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-5.jpg" width="75" height="75" alt="product" />
                                                    <img src="assets/images/products/product-5-2.jpg" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Casual Spring Blue
                                                        Shoes</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-6.jpg" width="75" height="75" alt="product" />
                                                    <img src="assets/images/products/product-6-2.jpg" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Men Black Gentle
                                                        Belt</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                    </div>
                                    <!-- End .featured-col -->
    
                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-1.jpg" width="75" height="75" alt="product" />
                                                    <img src="assets/images/products/product-1-2.jpg" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Ultimate 3D
                                                        Bluetooth Speaker</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-2.jpg" width="75" height="75" alt="product" />
                                                    <img src="assets/images/products/product-2-2.jpg" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Brown Women Casual
                                                        HandBag</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-3.jpg" width="75" height="75" alt="product" />
                                                    <img src="assets/images/products/product-3-2.jpg" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Circled Ultimate
                                                        3D Speaker</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                    </div>
                                    <!-- End .featured-col -->
                                </div>
                                <!-- End .widget-featured-slider -->
                            </div>
                            <!-- End .widget-body -->
                        </div>
                        <!-- End .widget -->
    
                        <div class="widget widget-block">
                            <h3 class="widget-title">Custom HTML Block</h3>
                            <h5>This is a custom sub-title.</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
                        </div>
                        <!-- End .widget -->
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
@endsection