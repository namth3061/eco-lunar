<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Helendo &#8211; Minimalis Furniture eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icons Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/linearicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/fontawesome-all.min.css') }}">

    <!-- Animation Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animation.min.css') }}">

    <!-- Slick Slier Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">

    <!-- Easyzoom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireStyles
</head>

<body class="">
@livewire('components.navigation')

{{--<main>--}}
{{--    {{ $slot }}--}}
{{--</main>--}}

<x-footer/>

<!-- Modal -->
@include('layouts.modal.product-modal')
<!-- Modal end -->

<!-- Modal -->
@include('layouts.modal.authenticate')
<!-- Modal end -->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-close-box text-start">
            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"> <i class="icon-cross2"></i></span>
        </div>
        <div class="mobile-menu-overlay__body">
            <div class="offcanvas-menu-header d-md-block d-none">
                <div class="helendo-language-currency row-flex row section-space--mb_60 ">
                    <div class="widget-language col-md-6">
                        <h6> Language</h6>
                        <ul>
                            <li class="actived"> <a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Arabric</a></li>
                        </ul>
                    </div>
                    <div class="widget-currency col-md-6">
                        <h6> Currencies</h6>
                        <ul>
                            <li class="actived"><a href="#">USD - US Dollar</a></li>
                            <li><a href="#">Euro</a></li>
                            <li><a href="#">Pround</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span>Home V1 – Default</span></a></li>
                            <li><a href="index-7.html"><span>Home V2 – Boxed</span></a></li>
                            <li><a href="index-8.html"><span>Home V3 – Carousel</span></a></li>
                            <li><a href="index-11.html"><span>Home V4 – Categories</span></a></li>
                            <li><a href="index-10.html"><span>Home V5 – Collection</span></a></li>
                            <li><a href="index-5.html"><span>Home V6 – Full Width</span></a></li>
                            <li><a href="index-4.html"><span>Home V7 – Left Sidebar</span></a></li>
                            <li><a href="index-3.html"><span>Home V8 – Metro</span></a></li>
                            <li><a href="index-2.html"><span>Home V9 – Minimal</span></a></li>
                            <li><a href="index-6.html"><span>Home V10 – Parallax</span></a></li>
                            <li><a href="index-12.html"><span>Home V11 – Video Feature</span></a></li>
                            <li><a href="index-9.html"><span>Home V12 – 02 Feature</span></a></li>
                            <li><a href="index-13.html"><span>Home V13 – 03 Feature</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="#"><span>Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html"><span>Shop 3 Columns</span></a></li>
                                    <li><a href="shop-4-column.html"><span>Shop 4 Columns</span></a></li>
                                    <li><a href="shop-5-column.html"><span>Shop 5 Columns</span></a></li>
                                    <li><a href="shop-6-column.html"><span>Shop 6 Columns</span></a></li>
                                    <li><a href="shop-categories.html"><span>Shop Categories</span></a></li>
                                    <li><a href="shop-carousel.html"><span>Shop Carousel</span></a></li>
                                    <li><a href="shop-with-boder.html"><span>Shop With Border</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span>Shop Left Sidebar</span></a></li>
                                    <li><a href="shop-right-sidebar.html"><span>Shop Right Sidebar</span></a></li>
                                    <li><a href="shop-without-gutter.html"><span>Shop Without Gutter</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><span>Product Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="product-details.html"><span>Default</span></a></li>
                                    <li><a href="product-simple.html"><span>Simple</span></a></li>
                                    <li><a href="product-variable.html"><span>Variable</span></a></li>
                                    <li><a href="product-groupped.html"><span>Groupped</span></a></li>
                                    <li><a href="product-on-sale.html"><span>On Sale</span></a></li>
                                    <li><a href="product-out-of-stock.html"><span>Out Of Stock</span></a></li>
                                    <li><a href="product-affiliate.html"><span>Affiliate</span></a></li>
                                    <li><a href="product-image-swatches.html"><span>Image Swatches</span></a></li>
                                    <li><a href="product-countdown-timer.html"><span>With Countdown Timer</span></a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><span>Other Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html"><span>Cart</span></a></li>
                                    <li><a href="checkout.html"><span>Checkout</span></a></li>
                                    <li><a href="my-account.html"><span>My Account</span></a></li>
                                    <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="order-tracking.html"><span>Order Tracking</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html"><span>About Us</span></a></li>
                            <li><a href="contact-us.html"><span>Contact</span></a></li>
                            <li><a href="faq.html"><span>FAQ Pages</span></a></li>
                            <li><a href="coming-soon.html"><span>Coming Soon</span></a></li>
                            <li><a href="404-page.html"><span>404 Page</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html"><span>Blog Grid</span></a></li>
                            <li><a href="blog-listing.html"><span>Blog List</span></a></li>
                            <li><a href="blog-masonry.html"><span>Blog Masonry</span></a></li>
                            <li><a href="blog-left-sidebar.html"><span>Blog Sidebar</span></a></li>
                            <li><a href="single-blog-post.html"><span>Single Post V1</span></a></li>
                            <li><a href="single-blog-post-2.html"><span>Single Post V2</span></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <div class="mobile-menu-contact-info section-space--mt_60">
                <h6>Contact Us</h6>
                <p>69 Halsey St, Ny 10002, New York, United States <br>support.center@unero.co <br>(0091) 8547 632521</p>
            </div>

            <div class="mobile-menu-social-share section-space--mt_60">
                <h6>Follow US On Socials</h6>
                <ul class="social-share">
                    <li><a href="#"><i class="social social_facebook"></i></a></li>
                    <li><a href="#"><i class="social social_twitter"></i></a></li>
                    <li><a href="#"><i class="social social_googleplus"></i></a></li>
                    <li><a href="#"><i class="social social_linkedin"></i></a></li>
                    <li><a href="#"><i class="social social_pinterest"></i></a></li>
                </ul>
            </div>


        </div>


    </div>


</div>
<!--====================  End of mobile menu overlay  ====================-->


<!--  offcanvas Minicart Start -->
<div class="offcanvas-minicart_wrapper" id="miniCart">
    <div class="offcanvas-menu-inner">
        <div class="close-btn-box">
            <a href="#" class="btn-close"><i class="icon-cross2"></i></a>
        </div>
        <div class="minicart-content">
            <ul class="minicart-list">
                <li class="minicart-product">
                    <a class="product-item_remove" href="javascript:void(0)"><i class="icon-cross2"></i></a>
                    <a class="product-item_img">
                        <img class="img-fluid" src="assets/images/product/small/cart-01.webp" alt="Product Image">
                    </a>
                    <div class="product-item_content">
                        <a class="product-item_title" href="product-details.html">Plant pots</a>
                        <label>Qty : <span>1</span></label>
                        <label class="product-item_quantity">Price: <span> $20.00</span></label>
                    </div>
                </li>
                <li class="minicart-product">
                    <a class="product-item_remove" href="javascript:void(0)"><i class="icon-cross2"></i></a>
                    <a class="product-item_img">
                        <img class="img-fluid" src="assets/images/product/small/cart-02.webp" alt="Product Image">
                    </a>
                    <div class="product-item_content">
                        <a class="product-item_title" href="product-details.html">Teapot with black tea</a>
                        <label>Qty : <span>1</span></label>
                        <label class="product-item_quantity">Price: <span> $20.00</span></label>
                    </div>
                </li>
                <li class="minicart-product">
                    <a class="product-item_remove" href="javascript:void(0)"><i class="icon-cross2"></i></a>
                    <a class="product-item_img">
                        <img class="img-fluid" src="assets/images/product/small/cart-03.webp" alt="Product Image">
                    </a>
                    <div class="product-item_content">
                        <a class="product-item_title" href="product-details.html">Simple Chair</a>
                        <label>Qty : <span>1</span></label>
                        <label class="product-item_quantity">Price: <span> $20.00</span></label>
                    </div>
                </li>

            </ul>
        </div>
        <div class="minicart-item_total">
            <span class="font-weight--reguler">Subtotal:</span>
            <span class="ammount font-weight--reguler">$60.00</span>
        </div>
        <div class="minicart-btn_area">
            <a href="cart.html" class="btn btn--full btn--border_1">View cart</a>
        </div>
        <div class="minicart-btn_area">
            <a href="checkout.html" class="btn btn--full btn--black">Checkout</a>
        </div>
    </div>

    <div class="global-overlay"></div>
</div>
<!--  offcanvas Minicart End -->


<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-8">
                    <div class="search-title">
                        <h4 class="font-weight--normal">Search</h4>
                    </div>
                </div>
                <div class="col-md-6 ms-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-end">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"><i class="icon-cross"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of search overlay  ====================-->


<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top icon-arrow-up"></i>
    <i class="arrow-bottom icon-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

@livewireScripts

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>

<!-- Fullpage JS -->
<script src="{{ asset('assets/js/plugins/fullpage.min.js') }}"></script>

<!-- Slick Slider JS -->
<script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>

<!-- Countdown JS -->
<script src="{{ asset('assets/js/plugins/countdown.min.js') }}"></script>

<!-- Magnific Popup JS -->
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>

<!-- Easyzoom JS -->
<script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>

<!-- ImagesLoaded JS -->
<script src="{{ asset('assets/js/plugins/images-loaded.min.js') }}"></script>

<!-- Isotope JS -->
<script src="{{ asset('assets/js/plugins/isotope.min.js') }}"></script>

<!-- YTplayer JS -->
<script src="{{ asset('assets/js/plugins/YTplayer.js') }}"></script>

<!-- Instagramfeed JS -->
<!-- <script src="assets/js/plugins/jquery.instagramfeed.min.js"></script> -->

<!-- Ajax Mail JS -->
<script src="{{ asset('assets/js/plugins/ajax.mail.js') }}"></script>

<!-- wow JS -->
<script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>


<!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

<script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
