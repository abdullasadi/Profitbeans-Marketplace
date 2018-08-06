<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alice Fashion Responsive Bootstrap Theme</title>
    <meta name="description" content="">
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.ico
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- All CSS
    ============================================ -->
    <!-- normalize css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    <!-- font-awesome css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- material css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">

    <!-- bootstrap css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- animate css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <!-- TimeCircles css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/TimeCircles.css') }}">

    <!-- owl carousel css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">

    <!-- slicknav css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <!-- nivo-slider css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">

    <!-- jquery ui css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">

    <!-- style css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- responsive css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- user custom css
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- modernizr-2 js
    ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

  </head>
  <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- top banner area start -->
    <div class="top-banner-area top-banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="description">
                        <div class="icon">
                            <img src="img/icon/icon_freeshipping.png" alt="">
                        </div>
                        Free Shipping on order of $150+ and $8.00 flat rate shipping on order under $150
                    </div>
                </div>
                <div class="col-sm-3 text-right">
                    <div class="learn-more-btn">
                        <a href="#">Learn more</a>
                    </div>
                <div class="close-section-btn"><i class="zmdi zmdi-close"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- top banner area end -->

    @include('includes.navbar')

    @yield('content')


    <!-- footer area start -->
    <footer class="footer-area mt-40">
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="newsletter-title">
                            <h2>Sign Up for Newsletters</h2>
                            Get e-mail updates about our latest shop and special offers.
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-7 xs-mt-20">
                        <div class="newsletter-form">
                            <form action="#" method="POST">
                                <input type="email" placeholder="enter your email">
                                <button type="submit">subscribe !</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5 xs-mt-20">
                        <div class="social-icons text-right">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 xs-mt-40">
                        <div class="widget-title">
                            <h3>about us</h3>
                        </div>
                        <div class="widget-address">
                            <p> <span> address : </span> 123 Main Street, Anytown, CA 12345 USA.</p>
                            <p> <span> Phone  : </span>  <a href="tel:880123456789"></a> (800) 123 456 789</p>
                            <p> <span> Email  : </span>  <a href="mailto:demo@yourdomain.com"></a> demo@yourdomain.com</p>
                            <p> <span> Fax : </span>  (800) 123 456 789</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 xs-mt-40">
                        <div class="widget-title">
                            <h3>my account</h3>
                        </div>
                        <div class="widget-menu">
                            <a href="#">my orders</a>
                            <a href="#">my account</a>
                            <a href="#">my credit slips</a>
                            <a href="#">my addresses</a>
                            <a href="#">my personal info</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 sm-mt-40 xs-mt-40">
                        <div class="widget-title">
                            <h3>information</h3>
                        </div>
                        <div class="widget-menu">
                            <a href="#">specials</a>
                            <a href="#">new products</a>
                            <a href="#">best sellers</a>
                            <a href="#">our stores</a>
                            <a href="#">contact us</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 sm-mt-40 xs-mt-40">
                        <div class="widget-title">
                            <h3>categories</h3>
                        </div>
                        <div class="widget-menu">
                            <a href="#">fashion</a>
                            <a href="#">electronics</a>
                            <a href="#">furnitured & decor</a>
                            <a href="#">jewelry  & warches</a>
                            <a href="#">health & beauty</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-bottom-area">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="footer-copyright">
                            Copyright &copy; <a href="#">devitems</a>. All Rights Reserved
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 sm-mt-40 text-right xs-mt-40">
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Product item details Modal start -->
    <div class="modal fade" id="item-modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <!-- close button start -->
            <div class="close-button" data-dismiss="modal"><i class="fa fa-times-circle"></i></div>
            <!-- product modal details start -->
            <div class="product-modal">
                <!-- single product item start -->
                <div class="single-product-item floating">
                    <a href="product-details.html" class="item-img">
                        <img src="img/products/1.jpg" alt="">
                        <span class="sale"></span>
                    </a>
                    <div class="item-info">
                        <h2><span class="item-title large">Special sales Cotton stretch Men T shirt men's o-neck short-sleeve</span></h2>
                        <div class="info">
                            <p>Reference: <span>demo_33</span></p>
                            <p>Condition: <span>New product</span></p>
                        </div>
                        <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                        <p class="product-descriptions"> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                        <div class="cart-plus-minus">
                            <label>Quantity: </label>
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                        </div>
                        <div class="actions">
                            <a href="#" class="single-action">add to cart</a>
                            <a href="#" class="single-action"> <i class="fa fa-envelope"></i> </a>
                            <a href="#" class="single-action"> <i class="fa fa-print"></i> </a>
                            <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                        </div>
                        <div class="size">
                            size
                            <form action="#">
                                <select name="size" id="size">
                                    <option value="1">s</option>
                                    <option value="2">m</option>
                                    <option value="3">l</option>
                                </select>
                            </form>
                        </div>
                        <div class="color">
                            color
                            <form action="#">
                                <div class="single-color">
                                    <span></span>
                                    <input type="radio" name="color" value="color1">
                                </div>
                                <div class="single-color">
                                    <span></span>
                                    <input type="radio" name="color" value="color2">
                                </div>
                                <div class="single-color">
                                    <span></span>
                                    <input type="radio" name="color" value="color3">
                                </div>
                                <div class="single-color">
                                    <span></span>
                                    <input type="radio" name="color" value="color4">
                                </div>
                            </form>
                        </div>
                        <div class="stock">
                            <p> 300 Items <span>In stock</span></p>
                        </div>
                        <div class="social-share">
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i> twitter</a>
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i> share</a>
                            <a href="#" target="_blank"><i class="fa fa-google-plus"></i> Google+</a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i> pinterest</a>
                        </div>
                    </div>
                </div>
                <!-- single product item end -->
            </div>
            <!-- product modal details end -->
          </div>
            <!-- close button end -->
        </div>
      </div>
    </div>
    <!-- Product item details Modal end -->


    <!-- All JS
    =========================================== -->
    <!-- JQuery library
    =========================================== -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- Bootstrap js
    =========================================== -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- price slider js
    =========================================== -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>

    <!-- TimeCircles js
    =========================================== -->
    <script src="{{ asset('js/TimeCircles.js') }}"></script>

    <!-- scrollUp js
    =========================================== -->
    <script src="{{ asset('js/jquery.easing.js') }}"></script>

    <!-- slicknav js
    =========================================== -->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- owl carousel js
    =========================================== -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- nivo.slider js
    =========================================== -->
    <script src="{{ asset('js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>

    <!-- plugins js
    =========================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- Main js
    =========================================== -->
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
