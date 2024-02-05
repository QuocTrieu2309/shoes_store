<header class="header mb-0" data-y="0">
    <div class="container">
        <div class="pre-header w-100">
            <div class="owl-carousel owl-theme feature-box-carousel" data-toggle="owl" data-owl-options="{
                'margin': 1,
                'autoplay': false,
                'autoplayTimeout': 3000,
                'nav': false,
                'dots': false,
                'loop': true,
                'responsive' : {
                    '0' : {
                        'items' : 1
                    },
                    '576' : {
                        'items' : 2
                    },
                    '768' : {
                        'items' : 3
                    },
                    '992' : {
                        'items' : 4
                    }
                }
            }">
                <div class="info-box info-box-icon-left">
                    <i class="icon-shipping line-height-1"></i>

                    <div class="info-box-content">
                        <h4 class="ls-n-25 line-height-1">FREE SHIPPING &amp; RETURN</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <div class="info-box info-box-icon-left">
                    <i class="icon-money line-height-1"></i>

                    <div class="info-box-content">
                        <h4 class="ls-n-25 line-height-1">MONEY BACK GUARANTEE</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <div class="info-box info-box-icon-left">
                    <i class="icon-support line-height-1"></i>

                    <div class="info-box-content">
                        <h4 class="ls-n-25 line-height-1">ONLINE SUPPORT 24/7</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
                <div class="info-box info-box-icon-left">
                    <i class="icon-secure-payment line-height-1"></i>

                    <div class="info-box-content">
                        <h4 class="ls-n-25 line-height-1">SECURE PAYMENT</h4>
                    </div>
                    <!-- End .info-box-content -->
                </div>
            </div>
        </div>
    </div>

    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                    <a href="#"><i class="flag-us flag"></i>ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                            </li>
                            <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
                <div class="header-dropdown">
                    <a href="#" class="pl-0">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div>
                    <!-- End .header-menu -->
                </div>
            </div>
            <!-- End .header-left -->

            <div class="header-right">
                <ul class="top-links mega-menu show-arrow d-none d-lg-inline-block mt-0 mb-0">
                    <li class="item-menu narrow"><a href="dashboard.html">My Account</a></li>
                    <li class="item-menu narrow"><a href="demo9-about.html">About Us</a></li>
                    <li class="item-menu narrow"><a href="blog.html">Blog</a></li>
                    <li class="item-menu narrow"><a href="#">My Wishlist</a></li>
                    <li class="item-menu narrow"><a href="cart.html">Cart</a></li>
                    <li class="item-menu">
                        <a class="login" href="#">Log In</a>
                    </li>
                </ul>
                <span class="separator d-none d-lg-block"></span>
                <div class="social-icons d-flex align-items-center">
                    <a target="_blank" rel="nofollow" class="social-icon social-facebook icon-facebook" href="#" title="Facebook"></a>
                    <a target="_blank" rel="nofollow" class="social-icon social-twitter icon-twitter" href="#" title="Twitter"></a>
                    <a target="_blank" rel="nofollow" class="social-icon social-instagram icon-instagram" href="#" title="Instagram"></a>
                </div>
            </div>
            <!-- End .header-right -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .header-top -->

    <div class="container">
        <div class="header-middle sticky-header d-flex w-100">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler text-white mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="demo9.html" class="logo">
                        <img src="{{asset('porto_ecommerce/assets/images/logo-white.png')}}" alt="Porto Logo" width="110" height="46" />
                    </a>
                </div>
                <!-- End .header-left -->

                <div class="header-center flex-1 ml-lg-0 justify-content-end justify-content-lg-start  w-lg-max">
                    <div class="header-icon header-search header-search-inline header-search-category w-lg-max d-none d-sm-block">
                        <a href="#" class="search-toggle text-white" role="button"><i
                                class="icon-search-3 pt-md-1 pr-2 mr-3 d-none d-sm-inline-block"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required="">
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option value="">All Categories</option>
                                        <option value="4">Fashion</option>
                                        <option value="12">- Women</option>
                                        <option value="13">- Men</option>
                                        <option value="66">- Jewellery</option>
                                        <option value="67">- Kids Fashion</option>
                                        <option value="5">Electronics</option>
                                        <option value="21">- Smart TVs</option>
                                        <option value="22">- Cameras</option>
                                        <option value="63">- Games</option>
                                        <option value="7">Home &amp; Garden</option>
                                        <option value="11">Motors</option>
                                        <option value="31">- Cars and Trucks</option>
                                        <option value="32">- Motorcycles &amp; Powersports</option>
                                        <option value="33">- Parts &amp; Accessories</option>
                                        <option value="34">- Boats</option>
                                        <option value="57">- Auto Tools &amp; Supplies</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                                <button class="btn icon-magnifier" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->
                </div>
                <div class="header-right ml-0 ml-lg-auto">
                    <div class="header-contact d-none d-lg-flex align-items-center">
                        <i class="icon-phone-2"></i>
                        <h6>Call us now<a href="tel:#" class="font1">+123 5678 890</a></h6>
                    </div>

                    <a href="login.html" class="header-icon header-icon-user text-white"><i
                            class="icon-user-2 d-inline-flex-center"></i></a>

                    <a href="wishlist.html" class="header-icon d-inline-flex text-white"><i
                            class="icon-wishlist-2 d-inline-flex-center line-height-1"></i></a>

                    <div class="dropdown cart-dropdown">
                        <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle d-flex align-items-center" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="minicart-icon"></i>
                            <span class="cart-count badge-circle">3</span>
                        </a>

                        <div class="cart-overlay"></div>

                        <div class="dropdown-menu mobile-cart">
                            <a href="#" title="Close (Esc)" class="btn-close">×</a>

                            <div class="dropdownmenu-wrapper custom-scrollbar">
                                <div class="dropdown-cart-header">Shopping Cart</div>
                                <!-- End .dropdown-cart-header -->

                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo9-product.html">Ultimate 3D Bluetooth Speaker</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span> × $99.00
                                            </span>
                                        </div>
                                        <!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo9-product.html" class="product-image">
                                                <img src="assets/images/products/product-1.jpg" alt="product" width="80" height="80">
                                            </a>

                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div>
                                    <!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo9-product.html">Brown Women Casual HandBag</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span> × $35.00
                                            </span>
                                        </div>
                                        <!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo9-product.html" class="product-image">
                                                <img src="assets/images/products/product-2.jpg" alt="product" width="80" height="80">
                                            </a>

                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div>
                                    <!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo9-product.html">Circled Ultimate 3D Speaker</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span> × $35.00
                                            </span>
                                        </div>
                                        <!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo9-product.html" class="product-image">
                                                <img src="assets/images/products/product-3.jpg" alt="product" width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div>
                                    <!-- End .product -->
                                </div>
                                <!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>SUBTOTAL:</span>

                                    <span class="cart-total-price float-right">$134.00</span>
                                </div>
                                <!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                        Cart</a>
                                    <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                </div>
                                <!-- End .dropdown-cart-total -->
                            </div>
                            <!-- End .dropdownmenu-wrapper -->
                        </div>
                        <!-- End .dropdown-menu -->
                    </div>
                    <!-- End .dropdown -->
                </div>
                <!-- End .header-right -->
            </div>
        </div>
    </div>
    <!-- End .container -->
    <div class="container d-none  d-lg-block">
        <div class="row">
            <aside class="sidebar-home col-lg-3 mobile-sidebar toggle-menu-wrap">
                @if (isset($title))
                <div class="side-menu-wrapper text-uppercase d-none d-lg-block">
                    <h2 class="side-menu-title cursor-pointer">
                        <a class="collpased d-block btn-dark" data-toggle="collapse" href="#side-nav" role="button" aria-expanded="true" aria-controls="side-nav">
                            <i class="fas fa-bars"></i>Shop By Category
                        </a>
                    </h2>
                    <div class="collapse w-100 bg-white" id="side-nav">
                        <nav class="side-nav bg-white">
                            <ul class="menu menu-vertical sf-arrows">
                                <li class="active"><a href="demo9.html"><i class="sicon-home"></i>Home</a></li>
                                <li>
                                    <a href="demo9-shop.html" class="sf-with-ul"><i
                                            class="sicon-briefcase"></i>Categories</a>
                                    <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 1</a>
                                                <ul class="submenu">
                                                    <li><a href="category.html">Fullwidth Banner</a></li>
                                                    <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                            Banner</a>
                                                    </li>
                                                    <li><a href="category-banner-boxed-image.html">Boxed Image
                                                            Banner</a>
                                                    </li>
                                                    <li><a href="category.html">Left Sidebar</a></li>
                                                    <li><a href="category-sidebar-right.html">Right Sidebar</a>
                                                    </li>
                                                    <li><a href="category-off-canvas.html">Off Canvas Filter</a>
                                                    </li>
                                                    <li><a href="category-horizontal-filter1.html">Horizontal
                                                            Filter1</a>
                                                    </li>
                                                    <li><a href="category-horizontal-filter2.html">Horizontal
                                                            Filter2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">VARIATION 2</a>
                                                <ul class="submenu">
                                                    <li><a href="category-list.html">List Types</a></li>
                                                    <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                            Scroll</a>
                                                    </li>
                                                    <li><a href="category.html">3 Columns Products</a></li>
                                                    <li><a href="category-4col.html">4 Columns Products</a></li>
                                                    <li><a href="category-5col.html">5 Columns Products</a></li>
                                                    <li><a href="category-6col.html">6 Columns Products</a></li>
                                                    <li><a href="category-7col.html">7 Columns Products</a></li>
                                                    <li><a href="category-8col.html">8 Columns Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner">
                                                    <figure>
                                                        <img src="assets/images/menu-banner.jpg" alt="Menu banner">
                                                    </figure>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                            <i>OFF</i>
                                                        </h4>
                                                        <a href="category.html" class="btn btn-sm btn-dark">SHOP
                                                            NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="demo9-product.html" class="sf-with-ul"><i
                                            class="sicon-present"></i>Products</a>
                                    <div class="megamenu megamenu-fixed-width">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                                <ul class="submenu">
                                                    <li><a href="demo9-product.html">SIMPLE PRODUCT</a></li>
                                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a>
                                                    </li>
                                                    <li><a href="demo9-product.html">SALE PRODUCT</a></li>
                                                    <li><a href="demo9-product.html">FEATURED & ON SALE</a></li>
                                                    <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a>
                                                    </li>
                                                    <li><a href="product-sidebar-left.html">WITH LEFT
                                                            SIDEBAR</a>
                                                    </li>
                                                    <li><a href="product-sidebar-right.html">WITH RIGHT
                                                            SIDEBAR</a>
                                                    </li>
                                                    <li><a href="product-addcart-sticky.html">ADD CART
                                                            STICKY</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End .col-lg-4 -->

                                            <div class="col-lg-4">
                                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                                <ul class="submenu">
                                                    <li><a href="product-extended-layout.html">EXTENDED
                                                            LAYOUT</a>
                                                    </li>
                                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a>
                                                    </li>
                                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                    <li><a href="product-sticky-both.html">LEFT & RIGHT
                                                            STICKY</a>
                                                    </li>
                                                    <li><a href="product-transparent-image.html">TRANSPARENT
                                                            IMAGE</a></li>
                                                    <li><a href="product-center-vertical.html">CENTER
                                                            VERTICAL</a>
                                                    </li>
                                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                                </ul>
                                            </div>
                                            <!-- End .col-lg-4 -->

                                            <div class="col-lg-4 p-0">
                                                <div class="menu-banner menu-banner-2">
                                                    <figure>
                                                        <img src="assets/images/menu-banner-1.jpg" alt="Menu banner" class="product-promo">
                                                    </figure>
                                                    <i>OFF</i>
                                                    <div class="banner-content">
                                                        <h4>
                                                            <span class="">UP TO</span><br />
                                                            <b class="">50%</b>
                                                        </h4>
                                                    </div>
                                                    <a href="category.html" class="btn btn-sm btn-dark">SHOP
                                                        NOW</a>
                                                </div>
                                            </div>
                                            <!-- End .col-lg-4 -->
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul"><i class="sicon-docs"></i>Pages</a>
                                    <ul>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="demo9-about.html">About Us</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single.html">Blog Post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="demo9-contact.html">Contact Us</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html"><i class="sicon-book-open"></i>blog</a></li>
                                <li><a href="demo9-about.html"><i class="sicon-users"></i>About Us</a></li>
                                <li class="item-menu-sale"><a href="#" class="border-top-0">HUGE SALE – 70%
                                        OFF</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                @else                   
                <div class="side-menu-wrapper text-uppercase d-none d-lg-block">
                    <h2 class="side-menu-title">
                        <a class="d-block btn-dark" href="#">
                            <i class="fas fa-bars"></i>Shop By Category
                        </a>
                    </h2>

                    <nav class="side-nav">
                        <ul class="menu menu-vertical sf-arrows">
                            <li class="active"><a href="demo9.html"><i class="sicon-home"></i>Home</a></li>
                            <li>
                                <a href="demo9-shop.html" class="sf-with-ul"><i
                                        class="sicon-briefcase"></i>Categories</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 1</a>
                                            <ul class="submenu">
                                                <li><a href="demo9-shop.html">Fullwidth Banner</a></li>
                                                <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                        Banner</a>
                                                </li>
                                                <li><a href="category-banner-boxed-image.html">Boxed Image
                                                        Banner</a>
                                                </li>
                                                <li><a href="demo9-shop.html">Left Sidebar</a></li>
                                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                <li><a href="category-off-canvas.html">Off Canvas Filter</a>
                                                </li>
                                                <li><a href="category-horizontal-filter1.html">Horizontal
                                                        Filter1</a>
                                                </li>
                                                <li><a href="category-horizontal-filter2.html">Horizontal
                                                        Filter2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 2</a>
                                            <ul class="submenu">
                                                <li><a href="category-list.html">List Types</a></li>
                                                <li><a href="category-infinite-scroll.html">Ajax Infinite
                                                        Scroll</a>
                                                </li>
                                                <li><a href="demo9-shop.html">3 Columns Products</a></li>
                                                <li><a href="category-4col.html">4 Columns Products</a></li>
                                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                                <li><a href="category-8col.html">8 Columns Products</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner">
                                                <figure>
                                                    <img src="porto_ecommerce/assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                                </figure>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                        <i>OFF</i>
                                                    </h4>
                                                    <a href="demo9-shop.html" class="btn btn-sm btn-dark">SHOP
                                                        NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="demo9-product.html" class="sf-with-ul"><i
                                        class="sicon-present"></i>Products</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">PRODUCT PAGES</a>
                                            <ul class="submenu">
                                                <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                                <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                                <li><a href="product.html">SALE PRODUCT</a></li>
                                                <li><a href="product.html">FEATURED & ON SALE</a></li>
                                                <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                                <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a>
                                                </li>
                                                <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a>
                                                </li>
                                                <li><a href="product-addcart-sticky.html">ADD CART STICKY</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                            <ul class="submenu">
                                                <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a>
                                                </li>
                                                <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                                <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a>
                                                </li>
                                                <li><a href="product-transparent-image.html">TRANSPARENT
                                                        IMAGE</a></li>
                                                <li><a href="product-center-vertical.html">CENTER VERTICAL</a>
                                                </li>
                                                <li><a href="#">BUILD YOUR OWN</a></li>
                                            </ul>
                                        </div>
                                        <!-- End .col-lg-4 -->

                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner menu-banner-2">
                                                <figure>
                                                    <img src="porto_ecommerce/assets/images/menu-banner-1.jpg" alt="Menu banner" class="product-promo">
                                                </figure>
                                                <i>OFF</i>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                    </h4>
                                                </div>
                                                <a href="demo9-shop.html" class="btn btn-sm btn-dark">SHOP
                                                    NOW</a>
                                            </div>
                                        </div>
                                        <!-- End .col-lg-4 -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul"><i class="sicon-docs"></i>Pages</a>
                                <ul>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="demo9-about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="demo9-contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html"><i class="sicon-book-open"></i>blog</a></li>
                            <li><a href="demo9-about.html"><i class="sicon-users"></i>About Us</a></li>
                            <li class="item-menu-sale"><a href="#" class="border-top-0">HUGE SALE – 70% OFF</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                @endif
                <!-- End .side-menu-container -->
            </aside>
            <!-- End .col-lg-3 -->
            <div class="col-lg-9">
                <div class="menu-custom-block text-right">
                    <a href="#">Woman Shoes</a>
                    <a href="#">50% OFF FASHION</a>
                    <a target="_blank" href="https://1.envato.market/rNg2d">Buy Porto!</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End .header -->