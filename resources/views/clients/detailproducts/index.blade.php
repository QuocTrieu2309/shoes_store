@extends('clients.layouts.master')
@section('css')
 <style>
    .size-list li {
        display: none;
    }
 </style>
@endsection
@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="demo9.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice ">{{$product->name}}</strong>
                <span class="">has been added to your cart.</span>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <!---->
                            <div class="product-label label-sale">
                                -16%
                            </div>
                        </div>

                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            @foreach ($product->productDetails as $item)
                                
                                <div class="product-item">
                                    <img class="product-single-image" src="{{asset('storage/images/'.$item->image->url)}}" data-zoom-image="{{asset('storage/images/'.$item->image->url)}}" width="468" height="468" alt="product" />
                                </div>
                            @endforeach
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        @foreach ($product->productDetails as $item)
                        <div class="owl-dot">
                            <img src="{{asset('storage/images/'.$item->image->url)}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details mb-1">
                    <h1 class="product-title">{{$product->name}}</h1>
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div>
                    <!-- End .ratings-container -->

                    <hr class="short-divider">
                    @if ($product)
                        
                    @else
                        
                    @endif
                    <div class="price-box">
                        <span class="old-price">$1,999.00</span>
                        <span class="new-price">$1,699.00</span>
                    </div>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                           {{$product->description}}
                        </p>
                    </div>
                    <!-- End .product-desc -->

                    <ul class="single-info-list">
                        <!---->
                        <li>
                            SKU:
                            <strong>654613612</strong>
                        </li>

                        <li>
                            CATEGORY:
                            <strong>
                                <a href="#" class="product-category">SHOES</a>
                            </strong>
                        </li>

                        <li>
                            TAGs:
                            <strong><a href="#" class="product-category">CLOTHES</a></strong>,
                            <strong><a href="#" class="product-category">SWEATER</a></strong>
                        </li>
                    </ul>

                    <div class="product-filters-container">
                        
                        <div class="product-single-filter">
                            <label>Color:</label>
                            <ul class="config-size-list config-color-list config-filter-list">
                                @foreach ($listColor as $key=>$value)            
                                <li>
                                    <a href="javascript:;" class="filter-color border-0 " style="background-color: {{$key}};" data-color="{{$key}}" data-id = {{$product->id}}></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="product-single-filter">
                            <label>Size:</label>
                            <ul class="config-size-list size-list">
                                @foreach ($listColor as $color => $sizes)
                                    @foreach ($sizes['sizes'] as $size)
                                        <li data-color="{{ $color }}">
                                            <a href="javascript:;" class="d-flex align-items-center justify-content-center size-name">{{ $size }}</a>
                                        </li>
                                     @endforeach
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="product-single-filter">
                            <label></label>
                            <a class="font1 text-uppercase clear-btn" href="#">Clear</a>
                        </div>
                        <!---->
                    </div>

                    <div class="product-action">
                        <div class="price-box ">
                            <del class="price-old"><span></span></del>
                            <span class="price-product"></span>
                        </div>

                        <div class="product-single-qty">
                            <button class="quantity-control" data-action="decrement">-</button>
                            <input class=" form-control quantity-value" type="number" value="1" readonly>
                            <button class="quantity-control" data-action="increment">+</button>
                        </div>
                        <!-- End .product-single-qty -->

                        <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to
                            Cart</a>

                        <a href="{{route('cart')}}" class="btn btn-gray view-cart d-none">View cart</a>
                    </div>
                    <!-- End .product-action -->

                    <hr class="divider mb-0 mt-0">

                    <div class="product-single-share mb-1 pb-2 mt-0 pt-2">
                        <label class="sr-only">Share:</label>

                        <div class="social-icons mr-2">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                            <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                            <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                        </div>
                        <!-- End .social-icons -->

                        <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                class="icon-wishlist-2"></i><span>Add to
                                Wishlist</span></a>
                    </div>
                    <!-- End .product single-share -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

         {{-- <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud ipsum consectetur sed do, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                        <ul>
                            <li>Any Product types that You want - Simple, Configurable
                            </li>
                            <li>Downloadable/Digital Products, Virtual Products
                            </li>
                            <li>Inventory Management with Backordered items
                            </li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                    <div class="product-size-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/images/products/single/body-shape.png" alt="body shape" width="217" height="398">
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-md-8">
                                <table class="table table-size">
                                    <thead>
                                        <tr>
                                            <th>SIZE</th>
                                            <th>CHEST (in.)</th>
                                            <th>WAIST (in.)</th>
                                            <th>HIPS (in.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>XS</td>
                                            <td>34-36</td>
                                            <td>27-29</td>
                                            <td>34.5-36.5</td>
                                        </tr>
                                        <tr>
                                            <td>S</td>
                                            <td>36-38</td>
                                            <td>29-31</td>
                                            <td>36.5-38.5</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>38-40</td>
                                            <td>31-33</td>
                                            <td>38.5-40.5</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>40-42</td>
                                            <td>33-36</td>
                                            <td>40.5-43.5</td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td>42-45</td>
                                            <td>36-40</td>
                                            <td>43.5-47.5</td>
                                        </tr>
                                        <tr>
                                            <td>XLL</td>
                                            <td>45-48</td>
                                            <td>40-44</td>
                                            <td>47.5-51.5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .product-size-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    <table class="table table-striped mt-2">
                        <tbody>
                            <tr>
                                <th>Weight</th>
                                <td>23 kg</td>
                            </tr>

                            <tr>
                                <th>Dimensions</th>
                                <td>12 × 24 × 35 cm</td>
                            </tr>

                            <tr>
                                <th>Color</th>
                                <td>Black, Green, Indigo</td>
                            </tr>

                            <tr>
                                <th>Size</th>
                                <td>Large, Medium, Small</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                        <div class="comment-list">
                            <div class="comments">
                                <figure class="img-thumbnail">
                                    <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                                </figure>

                                <div class="comment-block">
                                    <div class="comment-header">
                                        <div class="comment-arrow"></div>

                                        <div class="ratings-container float-sm-right">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>

                                        <span class="comment-by">
                                            <strong>Joe Doe</strong> – April 12, 2018
                                        </span>
                                    </div>

                                    <div class="comment-content">
                                        <p>Excellent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="add-product-review">
                            <h3 class="review-title">Add a review</h3>

                            <form action="#" class="comment-form m-0">
                                <div class="rating-form">
                                    <label for="rating">Your rating <span class="required">*</span></label>
                                    <span class="rating-stars">
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>

                                    <select name="rating" id="rating" required="" style="display: none;">
                                        <option value="">Rate…</option>
                                        <option value="5">Perfect</option>
                                        <option value="4">Good</option>
                                        <option value="3">Average</option>
                                        <option value="2">Not that bad</option>
                                        <option value="1">Very poor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                </div>
                                <!-- End .form-group -->


                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class=" custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-name" />
                                            <label class="custom-control-label mb-0" for="save-name">Save my
                                                name, email, and website in this browser for the next time I
                                                comment.</label>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>  --}}
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Related Products</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                <div class="product-default left-details">
                    <figure>
                        <a href="demo9-product.html">
                            <img src="assets/images/demoes/demo9/products/product-9.jpg" alt="product" width="300" height="300">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo9-shop.html" class="product-category">T-shirts</a>,
                            <a href="demo9-shop.html" class="product-category">Toys</a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo9-product.html">Black Women Underwear</a>
                        </h3>
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
                            <span class="old-price">$1,999.00</span>
                            <span class="product-price">$1,699.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details">
                    <figure>
                        <a href="demo9-product.html">
                            <img src="assets/images/demoes/demo9/products/product-1-2.jpg" alt="product" width="300" height="300">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo9-shop.html" class="product-category">T-shirts</a>,
                            <a href="demo9-shop.html" class="product-category">Toys</a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo9-product.html">Men Trouser</a>
                        </h3>
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
                            <span class="old-price">$1,999.00</span>
                            <span class="product-price">$1,699.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details">
                    <figure>
                        <a href="demo9-product.html">
                            <img src="assets/images/demoes/demo9/products/product-3-2.jpg" alt="product" width="300" height="300">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo9-shop.html" class="product-category">T-shirts</a>,
                            <a href="demo9-shop.html" class="product-category">Toys</a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo9-product.html">Porto Brown Necklet</a>
                        </h3>
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
                            <span class="old-price">$1,999.00</span>
                            <span class="product-price">$1,699.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details">
                    <figure>
                        <a href="demo9-product.html">
                            <img src="assets/images/demoes/demo9/products/product-5-2.jpg" alt="product" width="300" height="300">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo9-shop.html" class="product-category">T-shirts</a>,
                            <a href="demo9-shop.html" class="product-category">Toys</a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo9-product.html">Porto Pink Shoes</a>
                        </h3>
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
                            <span class="old-price">$1,999.00</span>
                            <span class="product-price">$1,699.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details">
                    <figure>
                        <a href="demo9-product.html">
                            <img src="assets/images/demoes/demo9/products/product-11.jpg" alt="product" width="300" height="300">
                            <img src="assets/images/demoes/demo9/products/product-11-2.jpg" alt="product" width="300" height="300">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="demo9-shop.html" class="product-category">T-shirts</a>,
                            <a href="demo9-shop.html" class="product-category">Toys</a>
                        </div>
                        <h3 class="product-title">
                            <a href="demo9-product.html">Women Bag</a>
                        </h3>
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
                            <span class="old-price">$1,999.00</span>
                            <span class="product-price">$1,699.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->

        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
    var selectedColor = null;
    var selectedSize = null;
    var productID = null;
    var quantityValue = null;
    var productDetailID = null;

    $('.filter-color').on('click', function () {
                var color = $(this).data('color');
                productID = $(this).data('id');
                
                    if (selectedColor === null || selectedColor !== color) {
                        selectedColor = color;
                    } else {
                        selectedColor = null;
                    }
            $('.config-size-list li').each(function () {
                var sizeColor = $(this).data('color');
                if (sizeColor === selectedColor || typeof sizeColor === 'undefined') {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
            $('.filter-color').each(function () {
                var otherColor = $(this).data('color');
                if (otherColor !== selectedColor) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });

    $('.size-name').on('click', function (event) {
        var size = $(this).text();
        if (selectedSize === null || selectedSize !== size) {
            selectedSize = size;
        } else {
            selectedSize = null;
        }
        if (selectedColor !== null && selectedSize !== null && productID !== null) {
            $.ajax({
                type: 'GET',
                url: '{{ route('price') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'product_id': productID,
                    'color': selectedColor,
                    'size': selectedSize,
                },
                success: function (data) {
                    productDetailID = data.price.product_detail_id;
                    if (data.price.promotional_price !== null) {
                        $('.price-old').text(data.price.old_price);
                        $('.price-product').text(data.price.promotional_price);
                    } else {
                        $('.price-product').text(data.price.old_price);
                    }
                },
                error: function () {
                    alert('An unexpected error occurred.');
                }
            });
        }
        quantityValue = $('.quantity-value').val();
    });

    $('.quantity-control').on('click', function () {
        var action = $(this).data('action');
        var inputElement = $(this).siblings('.form-control');

        if (action === 'increment') {
            inputElement.val(parseInt(inputElement.val()) + 1);
        } else if (action === 'decrement') {
            var currentValue = parseInt(inputElement.val());
            inputElement.val(currentValue > 1 ? currentValue - 1 : 1);
        }
        quantityValue = inputElement.val();
    });

    $('.add-cart').on('click', function (event) {
        event.stopPropagation();
        if(productDetailID !== null && quantityValue !== null){
            console.log(selectedSize);
            $.ajax({
                type: 'POST',
                url: '{{route('add-cart')}}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'product_detail_id': productDetailID,
                    'quantity': quantityValue
                },
                success: function (data) {
                       if(data.status == 'error'){
                        $('.cart-message').hide();
                       }
                },
                error: function () {
                    alert('An unexpected error occurred.');
                }
            });
        }
    });

    $('.clear-btn').on('click', function () {
        selectedSize = null;
        selectedColor = null;
        $('.filter-color').each(function () {
            $(this).show();
        });
        $('.size-list li').each(function () {
            $(this).hide();
        });
    });
});
</script>
@endsection