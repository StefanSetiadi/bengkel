@extends('component.main')

@section('title', 'Index')

@section('content')
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
            <!-- slider progress start -->
            <div class="slider-progress"></div>
            <!-- slider progress end -->
            <!-- slider caption start -->
            <div class="slider-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- layer 1 -->
                            <div class="layer-1-1">
                                <h2 class="title-1">Best Car Repair </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2">
                                <h2 class="title-2"> and Maintenance Service </h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <p class="title-3"> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etctrro dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation Lorem ipsum dolor</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-1-4">
                                <a href="#" class="title-4">contact us </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider caption end -->
        </div>
        <!-- slider 2 direction -->
        <div id="slider-direction-2" class="t-cn slider-direction">
            <!-- slider progress start -->
            <div class="slider-progress"></div>
            <!-- slider progress end -->
            <!-- slider caption start -->
            <div class="slider-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- layer 1 -->
                            <div class="layer-2-1">
                                <h2 class="title-1">Best Car Repair </h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2-2">
                                <h2 class="title-2"> and Maintenance Service </h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-2-3">
                                <p class="title-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etctrro dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation</p>
                            </div>
                            <!-- layer 4 -->
                            <div class="layer-2-4">
                                <a href="#" class="title-4">contact us </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider caption end -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-6">
                <!-- discount offer start -->
                <div class="discount-offer">
                    <!-- section title start -->
                    <div class="discount-title">
                        <h2>Get <span> 30%</span> Discount !</h2>
                    </div>
                    <!-- section title end -->
                    <!-- discount content start -->
                    <div class="discount-content">
                        <div class="input-box name">
                            <label>Name*</label>
                            <input type="text">
                        </div>
                        <div class="input-box phone">
                            <label>Phone*</label>
                            <input type="text">
                        </div>
                        <div class="input-box repair">
                            <label>Repair*</label>
                            <div class="select-box">
                                <select>
                                    <option value="wheel_alignment">-Wheel Alignment</option>
                                    <option value="car_wash">Car wash</option>
                                    <option value="repair_glass">Repair glass</option>
                                    <option value="repair_seat">Repair seat</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-button">
                            <button type="submit" class="default-button">get discount</button>
                        </div>
                    </div>
                    <!-- discount content end -->
                </div>
                <!-- discount offer end -->
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->
<!-- about us area start -->
<div class="about-us-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- section title start -->
                <div class="section-heading">
                    <h2>About <span> Tinker</span></h2>
                </div>
                <!-- section title end -->
                <!-- about content start -->
                <div class="about-us-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incdunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerciti aulamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehederit essete cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum perspiciatis. aliquip ex ea commodo consequat. Duis aute irure dolor in reprehederit laborum.</p>
                    <a href="about-us.html" class="default-button">learn more</a>
                </div>
                <!-- about content end -->
            </div>
            <div class="col-md-6 hidden-xs">
                <!-- about us img start -->
                <div class="about-us-img">
                    <img src="img/about/1.png" alt="">
                </div>
                <!-- about us img end -->
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->
<!-- service area start -->
<div class="service-area section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading light text-center no-margin">
                    <h2>Tinker Best <span> Services</span></h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-car"></i>
                        <h3> Car Wash</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-cogs"></i>
                        <h3> Engine repair</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-soccer-ball-o"></i>
                        <h3> wheel alignment</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-compass"></i>
                        <h3> suspension repair</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-cubes"></i>
                        <h3> brake service</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- single service start -->
                <div class="single-service">
                    <div class="icon-title">
                        <i class="fa fa-life-ring"></i>
                        <h3> tire balance</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                </div>
                <!-- single service end -->
            </div>
        </div>
    </div>
</div>
<!-- service area end -->
<!-- shop area start -->
<div class="shop-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading text-center">
                    <h2>Tinker <span> Shop</span> </h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="shop-tab-area">
            <!-- Shop tabs -->
            <ul class="shop-tab" role="tablist">
                <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">NEW ARRIVAL</a></li>
                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">POPULAR PRODUCTS</a></li>
                <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">BEST SELLING</a></li>
            </ul>
            <!-- Shop Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/2.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Three Ball Bearing</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 320</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/4.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Car Exhaust Pipe</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 220.50</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/1.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Starter Parst Car</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 1170</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/3.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Disk Break</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 950</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab2">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/5.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Car Exhaust Pipe</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 220.50</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/6.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Disk Break</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 950</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/7.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Three Ball Bearing</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 320</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/8.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Starter Parst Car</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 1170</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab3">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/4.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Starter Parst Car</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 1170</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/1.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Three Ball Bearing</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 320</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/2.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Disk Break</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 950</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single product start -->
                            <div class="single-product hover-style text-center">
                                <div class="product-img">
                                    <!-- product-img -->
                                    <a href="single-shop.html" class="main-img">
                                        <img src="img/product/3.jpg" alt="">
                                    </a>
                                    <!-- product actions -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info start -->
                                <div class="product-info text-center">
                                    <div class="product-name">
                                        <a href="#">Car Exhaust Pipe</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 220.50</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single product end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop area end -->
<!-- features area start -->
<div class="features-area section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <div class="feature-icon">
                        <i class="icofont icofont-tea"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Cup of coffee</h3>
                        <p>For Lovely Customers</p>
                    </div>
                </div>
                <!-- single feature start -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <!-- feature icon -->
                    <div class="feature-icon">
                        <i class="icofont icofont-dart"></i>
                    </div>
                    <!-- feature content -->
                    <div class="feature-content">
                        <h3>GUARANTY</h3>
                        <p>For All Services</p>
                    </div>
                </div>
                <!-- single feature end -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <!-- feature icon -->
                    <div class="feature-icon">
                        <i class="icofont icofont-badge"></i>
                    </div>
                    <!-- feature content -->
                    <div class="feature-content">
                        <h3>achievement</h3>
                        <p>10 Years Experience</p>
                    </div>
                </div>
                <!-- single feature end -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- single feature start -->
                <div class="single-feature text-center">
                    <!-- feature icon -->
                    <div class="feature-icon">
                        <i class="icofont icofont-ui-settings"></i>
                    </div>
                    <!-- feature content -->
                    <div class="feature-content">
                        <h3>PARTS</h3>
                        <p>Always in Stock</p>
                    </div>
                </div>
                <!-- single feature end -->
            </div>
        </div>
    </div>
</div>
<!-- features area end -->
<!-- team member area start -->
<div class="team-member section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading text-center">
                    <h2>Tinker Team <span> Members</span></h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <!-- single team start -->
            <div class="col-sm-4">
                <div class="single-team hover-style pull-left">
                    <div class="team-img">
                        <!-- team img start -->
                        <a href="#" class="main-img">
                            <img src="img/team/1.jpg" alt="">
                        </a>
                        <!-- team img end -->
                        <!-- team info start -->
                        <div class="team-info">
                            <h3>Hridoy Roy</h3>
                            <p>chief executive officer</p>
                        </div>
                        <!-- team info end -->
                        <!-- team social start -->
                        <div class="team-social">
                            <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                        </div>
                        <!-- team social end -->
                    </div>
                </div>
            </div>
            <!-- single team end -->
            <!-- single team start -->
            <div class="col-sm-4">
                <div class="single-team hover-style">
                    <div class="team-img">
                        <!-- team img start -->
                        <a href="#" class="main-img">
                            <img src="img/team/2.jpg" alt="">
                        </a>
                        <!-- team img end -->
                        <!-- team info start -->
                        <div class="team-info">
                            <h3>Judy Bailey</h3>
                            <p>Engine Mechanic</p>
                        </div>
                        <!-- team info end -->
                        <!-- team social start -->
                        <div class="team-social">
                            <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                        </div>
                        <!-- team social end -->
                    </div>
                </div>
            </div>
            <!-- single team end -->
            <!-- single team start -->
            <div class="col-sm-4">
                <div class="single-team hover-style pull-right">
                    <div class="team-img">
                        <!-- team img start -->
                        <a href="#" class="main-img">
                            <img src="img/team/3.jpg" alt="">
                        </a>
                        <!-- team img end -->
                        <!-- team info start -->
                        <div class="team-info">
                            <h3>MSN TRIO</h3>
                            <p>Creative Director</p>
                        </div>
                        <!-- team info end -->
                        <!-- team social start -->
                        <div class="team-social">
                            <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                            <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                        </div>
                        <!-- team social end -->
                    </div>
                </div>
            </div>
            <!-- single team end -->
        </div>
    </div>
</div>
<!-- team member area end -->
<!-- testimonial area start -->
<div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- testimonial slider start -->
                <div class="testimonial-slider owl-preview-1">
                    <!-- single testimonial start -->
                    <div class="single-testimonial">
                        <!-- testimonil img -->
                        <div class="testimonial-img hidden-xs">
                            <div class="writer-img">
                                <img src="img/testimonial/1.jpg" alt="">
                            </div>
                        </div>
                        <!-- testimonial content -->
                        <div class="testimonial-content">
                            <div class="test-writer">
                                <h3>MSN TRIO</h3>
                                <p>Creative Director</p>
                            </div>
                            <div class="test-spech">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolorem magnadw aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodog consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testimonial">
                        <!-- testimonial img -->
                        <div class="testimonial-img hidden-xs">
                            <div class="writer-img">
                                <img src="img/testimonial/2.jpg" alt="">
                            </div>
                        </div>
                        <!-- testimonial content -->
                        <div class="testimonial-content">
                            <div class="test-writer">
                                <h3>Hridoy roy</h3>
                                <p>chief executive officer</p>
                            </div>
                            <div class="test-spech">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolorem magnadw aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodog consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial end -->
                    <!-- single testimonial start -->
                    <div class="single-testimonial">
                        <!-- testimonial img -->
                        <div class="testimonial-img hidden-xs">
                            <div class="writer-img">
                                <img src="img/testimonial/3.jpg" alt="">
                            </div>
                        </div>
                        <!-- testimonial content -->
                        <div class="testimonial-content">
                            <div class="test-writer">
                                <h3>Judy Bailey</h3>
                                <p>Engine Mechanic</p>
                            </div>
                            <div class="test-spech">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolorem magnadw aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodog consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single testimonial end -->
                </div>
                <!-- testimonial slider end -->
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->
<!-- blog area start -->
<div class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- section title start -->
                <div class="section-heading text-center">
                    <h2>Latest <span> Blog</span></h2>
                </div>
                <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <!-- blog slider start -->
            <div class="blog-slider owl-preview-2">
                <div class="col-md-12">
                    <!-- single blog start -->
                    <div class="single-blog">
                        <!-- blog img start -->
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="img/blog/1.jpg" alt="">
                                <span class="post-date">
                                    07 <br> Oct
                                </span>
                            </a>
                        </div>
                        <!-- blog img end -->
                        <!-- blog content start -->
                        <div class="blog-info">
                            <!-- post title -->
                            <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                            <!-- post info -->
                            <p class="post-info">
                                <span> <i class="icofont icofont-user"></i> By admin</span>
                                <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                            </p>
                            <!-- post summary -->
                            <p class="post-summary">
                                Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                            </p>
                            <!-- read post button -->
                            <a href="single-blog.html" class="read-post">Continue Reading</a>
                        </div>
                        <!-- blog content end -->
                    </div>
                    <!-- single blog start -->
                </div>
                <div class="col-md-12">
                    <!-- single blog start -->
                    <div class="single-blog">
                        <!-- blog img start -->
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="img/blog/2.jpg" alt="">
                                <span class="post-date">
                                    07 <br> Oct
                                </span>
                            </a>
                        </div>
                        <!-- blog img end -->
                        <!-- blog content start -->
                        <div class="blog-info">
                            <!-- post title -->
                            <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                            <!-- post info -->
                            <p class="post-info">
                                <span> <i class="icofont icofont-user"></i> By admin</span>
                                <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                            </p>
                            <!-- post summary -->
                            <p class="post-summary">
                                Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                            </p>
                            <!-- read post button -->
                            <a href="single-blog.html" class="read-post">Continue Reading</a>
                        </div>
                        <!-- blog content end -->
                    </div>
                    <!-- single blog start -->
                </div>
                <div class="col-md-12">
                    <!-- single blog start -->
                    <div class="single-blog">
                        <!-- blog img start -->
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="img/blog/3.jpg" alt="">
                                <span class="post-date">
                                    07 <br> Oct
                                </span>
                            </a>
                        </div>
                        <!-- blog img end -->
                        <!-- blog content start -->
                        <div class="blog-info">
                            <!-- post title -->
                            <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                            <!-- post info -->
                            <p class="post-info">
                                <span> <i class="icofont icofont-user"></i> By admin</span>
                                <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                            </p>
                            <!-- post summary -->
                            <p class="post-summary">
                                Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                            </p>
                            <!-- read post button -->
                            <a href="single-blog.html" class="read-post">Continue Reading</a>
                        </div>
                        <!-- blog content end -->
                    </div>
                    <!-- single blog start -->
                </div>
                <div class="col-md-12">
                    <!-- single blog start -->
                    <div class="single-blog">
                        <!-- blog img start -->
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="img/blog/1.jpg" alt="">
                                <span class="post-date">
                                    07 <br> Oct
                                </span>
                            </a>
                        </div>
                        <!-- blog img end -->
                        <!-- blog content start -->
                        <div class="blog-info">
                            <!-- post title -->
                            <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                            <!-- post info -->
                            <p class="post-info">
                                <span> <i class="icofont icofont-user"></i> By admin</span>
                                <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                            </p>
                            <!-- post summary -->
                            <p class="post-summary">
                                Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                            </p>
                            <!-- read post button -->
                            <a href="single-blog.html" class="read-post">Continue Reading</a>
                        </div>
                        <!-- blog content end -->
                    </div>
                    <!-- single blog start -->
                </div>
                <div class="col-md-12">
                    <!-- single blog start -->
                    <div class="single-blog">
                        <!-- blog img start -->
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="img/blog/2.jpg" alt="">
                                <span class="post-date">
                                    07 <br> Oct
                                </span>
                            </a>
                        </div>
                        <!-- blog img end -->
                        <!-- blog content start -->
                        <div class="blog-info">
                            <!-- post title -->
                            <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                            <!-- post info -->
                            <p class="post-info">
                                <span> <i class="icofont icofont-user"></i> By admin</span>
                                <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                            </p>
                            <!-- post summary -->
                            <p class="post-summary">
                                Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                            </p>
                            <!-- read post button -->
                            <a href="single-blog.html" class="read-post">Continue Reading</a>
                        </div>
                        <!-- blog content end -->
                    </div>
                    <!-- single blog start -->
                </div>
                <div class="col-md-12">
                    <!-- single blog start -->
                    <div class="single-blog">
                        <!-- blog img start -->
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="img/blog/3.jpg" alt="">
                                <span class="post-date">
                                    07 <br> Oct
                                </span>
                            </a>
                        </div>
                        <!-- blog img end -->
                        <!-- blog content start -->
                        <div class="blog-info">
                            <!-- post title -->
                            <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                            <!-- post info -->
                            <p class="post-info">
                                <span> <i class="icofont icofont-user"></i> By admin</span>
                                <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                            </p>
                            <!-- post summary -->
                            <p class="post-summary">
                                Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                            </p>
                            <!-- read post button -->
                            <a href="single-blog.html" class="read-post">Continue Reading</a>
                        </div>
                        <!-- blog content end -->
                    </div>
                    <!-- single blog start -->
                </div>
            </div>
            <!-- blog slider end -->
        </div>
    </div>
</div>
<!-- blog area end -->

@endsection
