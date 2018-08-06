@extends('layouts.main')

@section('content')

<!-- scroll item menu start -->
<div class="scroll-item">
    <nav class="collapse navbar-collapse">
        <ul>
            <li><a href="#electronics" class="smooth"><img src="img/icon/icon_electronics.jpg" alt=""></a></li>
            <li><a href="#fashion" class="smooth"><img src="img/icon/icon_fashion.jpg" alt=""></a></li>
            <li><a href="#furniture" class="smooth"><img src="img/icon/icon_Furniture.jpg" alt=""></a></li>
            <li><a href="#accessories" class="smooth"><img src="img/icon/icon_sunglass.jpg" alt=""></a></li>
            <li id="scrollUp"> <a href="#"><i class="fa fa-angle-double-up"></i><span>back to top</span></a></li>
        </ul>
    </nav>
</div>
<!-- scroll item menu end -->

<!-- slide show area start -->
<div class="slide-show ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-3">
                <!-- slider area start -->
                <div class="slider-area">
                    <div class="bend niceties preview-1">
                        <!-- slider images start -->
                        <div id="nivoslider" class="slides">
                            <img src="img/slider/1.jpg" alt="slider_1" title="#slider-direction-1"/>
                            <img src="img/slider/2.jpg" alt="slider_2" title="#slider-direction-2"/>
                        </div>
                        <!-- slider images end -->
                        <!-- slider 1 direction -->
                        <div id="slider-direction-1" class="t-cn slider-direction">
                            <!-- slider caption start -->
                            <div class="slider-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <!-- layer 1 -->
                                            <div class="layer-1-1">
                                                <h2 class="title-1">sale up to 40% with </h2>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-1-2">
                                                <h2 class="title-2"> LED Smart TV </h2>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-1-3">
                                                <p class="title-3"> From: $520 only on our store</p>
                                            </div>
                                            <!-- layer 4 -->
                                            <div class="layer-1-4">
                                                <a href="#" class="title-4">shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider caption end -->
                        </div>
                        <!-- slider 2 direction -->
                        <div id="slider-direction-2" class="t-cn slider-direction">
                            <!-- slider caption start -->
                            <div class="slider-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <!-- layer 1 -->
                                            <div class="layer-2-1">
                                                <h2 class="title-1">New Design</h2>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2-2">
                                                <h2 class="title-2"> Sport creek <span> bicycle.</span> </h2>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-2-3">
                                                <p class="title-3">Sale all bicycle up to 20% off</p>
                                            </div>
                                            <!-- layer 4 -->
                                            <div class="layer-2-4">
                                                <a href="#" class="title-4">shop now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slider caption end -->
                        </div>
                    </div>
                </div>
                <!-- slider area end -->
            </div>
        </div>
        <!-- info area start -->
        <div class="row">
            <div class="col-sm-4">
                <div class="single-info">
                    <div class="img">
                        <img src="img/info/info1.png" alt="">
                        <img src="img/info/info1_hover.png" alt="">
                    </div>
                    <div class="info-content">
                        <h3>Free Fast Delivery</h3>
                        Free shipping on all Uk order
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-info">
                    <div class="img">
                        <img src="img/info/info2.png" alt="">
                        <img src="img/info/info2_hover.png" alt="">
                    </div>
                    <div class="info-content">
                        <h3>Money Guarantee</h3>
                        30 days money back guarantee
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-info">
                    <div class="img">
                        <img src="img/info/info3.png" alt="">
                        <img src="img/info/info3_hover.png" alt="">
                    </div>
                    <div class="info-content">
                        <h3>24/7 Support</h3>
                        Support online 24 hours day
                    </div>
                </div>
            </div>
        </div>
        <!-- info area end -->
    </div>
</div>
<!-- slide show area end -->

<!-- products area start -->
<div class="pt-40">
    <div class="container">
        <!--  deal and new arrival items start -->
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <!-- section title start -->
                <div class="section-heading">
                    <h2> <img src="img/icon/icon_title_special.png" alt=""> Deal of the days</h2>
                </div>
                <!-- section title start -->
                <!-- deals day items start -->
                <div class="deals-day-items color-bordered mt-30">
                    <!-- single product item start -->
                    <div class="single-product-item floating">
                        <a href="product-details.html" class="item-img">
                            <img src="img/products/1.jpg" alt="">
                            <span class="sale"></span>
                        </a>
                        <div class="item-info">
                            <h2><a href="product-details.html" class="item-title large">Special sales Cotton stretch Men T shirt men's o-neck short-sleeve</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <p class="product-descriptions"> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                            <div class="countdown">
                                <div class="DateCountdown" data-date="2018-01-01 00:00:00"></div>
                            </div>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->

                    <!-- single product item start -->
                    <div class="single-product-item floating">
                        <a href="product-details.html" class="item-img">
                            <img src="img/products/2.jpg" alt="">
                            <span class="sale"></span>
                        </a>
                        <div class="item-info">
                            <h2><a href="product-details.html" class="item-title large">Samsung galaxy J5 Dual Sim Unlocked Cell Phone 5.0</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $24.30 <span class="old-price">$27.00</span> </h3>
                            <p class="product-descriptions"> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                            <div class="countdown">
                                <div class="DateCountdown" data-date="2018-01-01 00:00:00"></div>
                            </div>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->

                    <!-- single product item start -->
                    <div class="single-product-item floating">
                        <a href="product-details.html" class="item-img">
                            <img src="img/products/3.jpg" alt="">
                            <span class="sale"></span>
                        </a>
                        <div class="item-info">
                            <h2><a href="product-details.html" class="item-title large">Replica Modern Classical Furniture Arne Jacobsen series 7 chair</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                            <p class="product-descriptions"> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                            <div class="countdown">
                                <div class="DateCountdown" data-date="2018-01-01 00:00:00"></div>
                            </div>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->

                    <!-- single product item start -->
                    <div class="single-product-item floating">
                        <a href="product-details.html" class="item-img">
                            <img src="img/products/4.jpg" alt="">
                            <span class="sale"></span>
                        </a>
                        <div class="item-info">
                            <h2><a href="product-details.html" class="item-title large">Paracord Parachute Cord Emergency Kit Survival Bracelet Rope</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $20.98 <span class="old-price">$22.51</span> </h3>
                            <p class="product-descriptions"> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                            <div class="countdown">
                                <div class="DateCountdown" data-date="2018-01-01 00:00:00"></div>
                            </div>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->

                    <!-- single product item start -->
                    <div class="single-product-item floating">
                        <a href="product-details.html" class="item-img">
                            <img src="img/products/5.jpg" alt="">
                            <span class="sale"></span>
                        </a>
                        <div class="item-info">
                            <h2><a href="product-details.html" class="item-title large">New 2017 boys star wars clothing t shirt girls kids nova star wars</a></h2>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3 class="item-price"> $15.19 <span class="old-price">$16.51</span> </h3>
                            <p class="product-descriptions"> Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                            <div class="countdown">
                                <div class="DateCountdown" data-date="2018-01-01 00:00:00"></div>
                            </div>
                            <div class="actions">
                                <a href="#" class="single-action">add to cart</a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <!-- single product item end -->
                </div>
                <!-- deals day items end -->
            </div>
            <div class="col-lg-3 col-md-4 xs-mt-40">
                <!-- section title start -->
                <div class="section-heading sm-mt-40">
                    <h2> <img src="img/icon/icon_title_new.png" alt=""> New arrivals</h2>
                </div>
                <!-- section title start -->
                <!-- new arrival start -->
                <div class="new-arrival-items grey-bordered mt-30">

                    <!-- list items start -->
                    <div class="list-items">
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/7.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">10FT Paracord 7 Strand Parachute Cord...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $50.78 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/8.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">Butterfly Mid-Century Dining Chair...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $20.71 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/9.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $30.98 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                    </div>
                    <!-- list items start -->

                    <!-- list items start -->
                    <div class="list-items">
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/10.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">10FT Paracord 7 Strand Parachute Cord...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $50.78 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/11.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">Butterfly Mid-Century Dining Chair...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $20.71 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/12.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $30.98 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                    </div>
                    <!-- list items start -->

                    <!-- list items start -->
                    <div class="list-items">
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/13.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">10FT Paracord 7 Strand Parachute Cord...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $50.78 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/3.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">Butterfly Mid-Century Dining Chair...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $20.71 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                        <!-- single product item start -->
                        <div class="single-product-item floating">
                            <a href="product-details.html" class="item-img">
                                <img src="img/products/14.jpg" alt="">
                            </a>
                            <div class="item-info">
                                <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3 class="item-price"> $30.98 </h3>
                            </div>
                        </div>
                        <!-- single product item end -->
                    </div>
                    <!-- list items start -->

                </div>
                <!-- new arrival end -->
            </div>
        </div>
        <!--  deal and new arrival items end -->

        <!-- electronics section heading start -->
        <div class="row" id="electronics">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-lg-3 col-sm-5">
                            <h2 class="blue small-icon-size"> <img src="img/icon/icon_electronics.jpg" alt=""> electronics</h2>
                        </div>
                        <!-- section title end -->
                        <div class="col-md-8 col-lg-9 col-sm-7 col-xs-12">
                            <!-- tab menu start -->
                            <ul class="product-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> bestseller </a></li>
                                <li><a data-toggle="tab" href="#tab-2"> featured </a></li>
                                <li><a data-toggle="tab" href="#tab-3"> speical </a></li>
                            </ul>
                            <!-- tab menu end -->

                            <!-- category menu start -->
                                <div class="category-item-menu">
                                    <ul>
                                        <li>
                                            <a href="shop.html">laptops</a>
                                            <a href="shop.html">camera</a>
                                            <a href="shop.html">smart phone</a>
                                            <a href="shop.html">television</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- category menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- electronics section heading end -->

        <!-- electronics items start -->
        <div class="row">
            <div class="hidden-md hidden-sm hidden-xs col-lg-3">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="tab-content mt-30">
                    <div class="tab-pane active fade in" id="tab-1">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/2.jpg" alt="">
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/12.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/9.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/16.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/17.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/18.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/12.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/2.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/17.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/19.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/9.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/16.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/18.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/12.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/20.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/20.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/16.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/13.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/11.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/7.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/5.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- electronics items end -->

        <!-- banner start -->
        <div class="row mt-40">
            <div class="col-sm-6">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 xs-mt-20">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner3.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- banner end -->

        <!-- fashion section heading start -->
        <div class="row" id="fashion">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-lg-3 col-sm-5">
                            <h2 class="sweet small-icon-size"> <img src="img/icon/icon_fashion.jpg" alt=""> fashion</h2>
                        </div>
                        <!-- section title end -->
                        <div class="col-md-8 col-lg-9 col-sm-7 col-xs-12">
                            <!-- tab menu start -->
                            <ul class="product-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-4"> bestseller </a></li>
                                <li><a data-toggle="tab" href="#tab-5"> featured </a></li>
                                <li><a data-toggle="tab" href="#tab-6"> speical </a></li>
                            </ul>
                            <!-- tab menu end -->

                            <!-- category menu start -->
                                <div class="category-item-menu">
                                    <ul>
                                        <li>
                                            <a href="shop.html">dresses</a>
                                            <a href="shop.html">handbags</a>
                                            <a href="shop.html">shoes</a>
                                            <a href="shop.html">clothing</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- category menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fashion section heading end -->

        <!-- fashion items start -->
        <div class="row">
            <div class="hidden-md hidden-sm hidden-xs col-lg-3">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="tab-content mt-30">
                    <div class="tab-pane active fade in" id="tab-4">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/21.jpg" alt="">
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/23.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/24.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/27.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/28.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/29.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-5">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/28.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/24.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/26.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/29.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/23.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/31.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/32.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/28.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/25.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-6">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/33.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/34.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/31.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/26.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/23.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/27.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fashion items end -->

        <!-- banner start -->
        <div class="row mt-40">
            <div class="col-sm-4">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-4 xs-mt-20">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-4 xs-mt-20">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner7.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- banner end -->

        <!-- Furnitured section heading start -->
        <div class="row" id="furniture">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-lg-3 col-sm-5">
                            <h2 class="brown small-icon-size"> <img src="img/icon/icon_Furniture.jpg" alt=""> Furnitured & Decor</h2>
                        </div>
                        <!-- section title end -->
                        <div class="col-md-8 col-lg-9 col-sm-7 col-xs-12">
                            <!-- tab menu start -->
                            <ul class="product-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-7"> bestseller </a></li>
                                <li><a data-toggle="tab" href="#tab-8"> featured </a></li>
                                <li><a data-toggle="tab" href="#tab-9"> speical </a></li>
                            </ul>
                            <!-- tab menu end -->

                            <!-- category menu start -->
                                <div class="category-item-menu">
                                    <ul>
                                        <li>
                                            <a href="shop.html">chair</a>
                                            <a href="shop.html">lighting</a>
                                            <a href="shop.html">sofa</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- category menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Furnitured section heading end -->

        <!-- Furnitured items start -->
        <div class="row">
            <div class="hidden-md hidden-sm hidden-xs col-lg-3">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner8.jpg" alt="">
                </a>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="tab-content mt-30">
                    <div class="tab-pane active fade in" id="tab-7">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/35.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/36.jpg" alt="">
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/37.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/38.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/39.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/3.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-8">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/39.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/41.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/3.jpg" alt="">
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/38.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/35.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/36.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/43.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/44.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-9">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/44.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/43.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/38.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/11.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/39.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/40.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Furnitured items end -->

        <!-- banner start -->
        <div class="row mt-40">
            <div class="col-sm-6">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner9.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 xs-mt-20">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner10.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- banner end -->

        <!-- accessories section heading start -->
        <div class="row" id="accessories">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-lg-3 col-sm-5">
                            <h2 class="green small-icon-size"> <img src="img/icon/icon_sunglass.jpg" alt=""> Accessories</h2>
                        </div>
                        <!-- section title end -->
                        <div class="col-md-8 col-lg-9 col-sm-7 col-xs-12">
                            <!-- tab menu start -->
                            <ul class="product-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-10"> bestseller </a></li>
                                <li><a data-toggle="tab" href="#tab-11"> featured </a></li>
                                <li><a data-toggle="tab" href="#tab-12"> speical </a></li>
                            </ul>
                            <!-- tab menu end -->

                            <!-- category menu start -->
                                <div class="category-item-menu">
                                    <ul>
                                        <li>
                                            <a href="shop.html">bags & Belts</a>
                                            <a href="shop.html">socks & tights</a>
                                            <a href="shop.html">scarves & gloves</a>
                                        </li>
                                    </ul>
                                </div>
                            <!-- category menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- accessories section heading end -->

        <!-- Accessories items start -->
        <div class="row">
            <div class="hidden-md hidden-sm hidden-xs col-lg-3">
                <a href="#" class="banner-hover">
                    <img src="img/banner/banner11.jpg" alt="">
                </a>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="tab-content mt-30">
                    <div class="tab-pane active fade in" id="tab-10">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/45.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/46.jpg" alt="">
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/48.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/50.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/51.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-11">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/49.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/4.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/46.jpg" alt="">
                                    <span class="sale"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/48.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/52.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/50.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/51.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Original New Samsung Galaxy On7 G6000G6100...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/45.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Blackview A8 mobile phone MTK6580 5.0" IPS HD</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $32.08 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-12">
                        <div class="multiple-items">
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/4.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Samsung galaxy J5 Dual Sim Unlocked Cell...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $28.98 <span class="old-price">$30.51</span> </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->

                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/7.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Skmei Luxury Brand Mens Sports Watches...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $27.00 </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/47.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Customized 19Inch Computer Screen...</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $30.58</h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                            <!-- single product item start -->
                            <div class="single-product-item">
                                <a href="product-details.html" class="item-img">
                                    <img src="img/products/50.jpg" alt="">
                                    <span class="new"></span>
                                </a>
                                <div class="item-info text-center">
                                    <h2><a href="product-details.html" class="item-title">Chuwi LapBook 15.6'' LapTop 1920x1080 RAM 4G</a></h2>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h3 class="item-price"> $18.98  </h3>
                                    <div class="actions">
                                        <a href="#" class="single-action">add to cart</a>
                                    </div>
                                    <div class="hover-content">
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-favorite-outline"></i> </a>
                                        <a href="#" class="single-action"> <i class="zmdi zmdi-refresh-alt"></i> </a>
                                        <a href="#" class="single-action" data-toggle="modal" data-target="#item-modal"> <i class="zmdi zmdi-search"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <!-- single product item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accessories items end -->

        <!-- category section heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading mt-40">
                    <div class="row">
                        <!-- section title start -->
                        <div class="col-md-4 col-lg-3">
                            <h2> <img src="img/icon/icon_categories.png" alt=""> Our Categories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- category section heading end -->

        <!-- box items area start -->
        <div class="row mt-30">
            <div class="col-md-12">
                <div class="box-items">
                    <!-- box item start -->
                    <div class="box-item">
                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/53.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->

                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/56.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#" class="title">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->
                    </div>
                    <!-- box item end -->
                    <!-- box item start -->
                    <div class="box-item">
                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/54.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->

                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/57.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#" class="title">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->
                    </div>
                    <!-- box item end -->
                    <!-- box item start -->
                    <div class="box-item">
                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/55.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->

                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/58.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#" class="title">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->
                    </div>
                    <!-- box item end -->
                    <!-- box item start -->
                    <div class="box-item">
                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/59.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->

                        <!-- single box item start -->
                        <div class="single-box-item">
                            <div class="box-item-img">
                                <a href="#"><img src="img/products/60.jpg" alt=""></a>
                            </div>
                            <div class="box-content">
                                <a href="#" class="title">television</a>
                                <ul class="item-list">
                                    <li><a href="shop.html" target="_blank">All-in-One Computers</a></li>
                                    <li><a href="shop.html" target="_blank">towers only</a></li>
                                    <li><a href="shop.html" target="_blank">Refurbished Desktops</a></li>
                                    <li><a href="shop.html" target="_blank">Gaming Desktops</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single box item end -->
                    </div>
                    <!-- box item end -->
                </div>
            </div>
        </div>
        <!-- box items area end -->

        <!-- blog area start -->
        <div class="row mt-40">
            <div class="col-md-8 col-sm-6">
                <!-- section title start -->
                <div class="section-heading">
                    <h2> <img src="img/icon/icon_title_blog.png" alt=""> From the blog</h2>
                </div>
                <!-- section title start -->

                <!-- blog area start -->
                <div class="blog-posts-slider mt-30">
                    <!-- single blog post start -->
                    <div class="single-blog">
                        <a href="blog-details.html" class="blog-img">
                            <img src="img/blog/1.jpg" alt="blog image">
                        </a>
                        <div class="blog-content">
                            <div class="blog-info">
                                <div class="date">28 <span>dec</span> </div>
                                <a href="blog-details.html">What is Bootstrap? – The History and the Hype</a>
                                <p class="view-count"><i class="fa fa-eye"></i>views(47)</p>
                            </div>
                            <p class="blog-description">
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum...
                            </p>
                        </div>
                    </div>
                    <!-- single blog post end -->

                    <!-- single blog post start -->
                    <div class="single-blog">
                        <a href="blog-details.html" class="blog-img">
                            <img src="img/blog/2.jpg" alt="blog image">
                        </a>
                        <div class="blog-content">
                            <div class="blog-info">
                                <div class="date">28 <span>aug</span> </div>
                                <a href="blog-details.html">What is Bootstrap? – The History and the Hype</a>
                                <p class="view-count"><i class="fa fa-eye"></i>views(47)</p>
                            </div>
                            <p class="blog-description">
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum...
                            </p>
                        </div>
                    </div>
                    <!-- single blog post end -->
                </div>
                <!-- blog area end -->
            </div>
            <div class="col-md-4 col-sm-6 xs-mt-40">
                <!-- section title start -->
                <div class="section-heading">
                    <h2> <img src="img/icon/icon_title_logo.png" alt=""> Our Brands</h2>
                </div>
                <!-- section title start -->
                <!-- clients logo start -->
                <div class="clients-logo mt-30">
                    <div class="logos">
                        <a href="#">
                            <img src="img/client-logo/1.jpg" alt="">
                        </a>
                        <a href="#">
                            <img src="img/client-logo/2.jpg" alt="">
                        </a>
                        <a href="#">
                            <img src="img/client-logo/3.jpg" alt="">
                        </a>
                        <a href="#">
                            <img src="img/client-logo/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="logos">
                        <a href="#">
                            <img src="img/client-logo/5.jpg" alt="">
                        </a>
                        <a href="#">
                            <img src="img/client-logo/6.jpg" alt="">
                        </a>
                        <a href="#">
                            <img src="img/client-logo/7.jpg" alt="">
                        </a>
                        <a href="#">
                            <img src="img/client-logo/8.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- clients logo end -->
            </div>
        </div>
        <!-- blog area end -->

    </div>
</div>
<!-- products area end -->

@endsection
