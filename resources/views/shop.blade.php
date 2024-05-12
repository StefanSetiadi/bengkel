@extends('component.main')

@section('title', 'Shop')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Shop</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- shop area start -->
<div class="shop-area pages section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- shop bar start -->
                <div class="shop-bar">
                    <!-- shop tab bar start -->
                    <div class="shop-nav width-33 pull-left">
                        <ul class="shop-navigation" role="tablist">
                            <li role="presentation" class="active gird">
                                <a href="#gird" aria-controls="gird" role="tab" data-toggle="tab">
                                    <i class="fa fa-th"></i>
                                </a>
                            </li>
                            <li role="presentation" class="list">
                                <a href="#list" aria-controls="list" role="tab" data-toggle="tab">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- shop tab bar end -->
                    <!-- shop sort start -->
                    <div class="sort-by width-33 pull-left text-center">
                        <label>Sort By: </label>
                        <select name="sort" >
                            <option value="#" selected >Position</option>
                            <option value="#">Name</option>
                            <option value="#">Price</option>
                        </select>
                    </div>
                    <!-- shop sort end -->
                    <!-- shop show product start -->
                    <div class="limit-product width-33 pull-left text-right">
                        <label>Show: </label>
                        <select name="show">
                            <option value="#" selected>9</option>
                            <option value="#">12</option>
                            <option value="#">24</option>
                            <option value="#">36</option>
                        </select>
                    </div>
                    <!-- shop show product end -->
                </div>
                <!-- shop bar end -->
            </div>
        </div>
        <div class="row">
            <!-- shop tab content start -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="gird">
                    <!-- gird shop start -->
                    <div class="gird-shop">
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                                        <a href="#">Disk Break Pad</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 1170</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                                        <a href="#">Car Exhaust Pipe</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 320</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                                        <a href="#">Wheel with Tire</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 950</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                                        <a href="#">Car Suspension</a>
                                    </div>
                                    <div class="product-price">
                                        <p>$ 220.50</p>
                                    </div>
                                </div>
                                <!-- product-info start -->
                            </div>
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <!-- single shop start -->
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
                            <!-- single shop end -->
                        </div>
                    </div>
                    <!-- gird shop end -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="list">
                    <!-- list shop start -->
                    <div class="list-shop">
                        <!-- single list shop start -->
                        <div class="single-list-shop">
                            <div class="col-md-3 col-sm-5">
                                <!-- product img start -->
                                <div class="product-img">
                                    <a href="single-shop.html"><img src="img/product/1.jpg" alt=""></a>
                                </div>
                                <!-- product img end -->
                            </div>
                            <div class="col-md-9 col-sm-7">
                                <div class="single-product">
                                    <div class="product-name">
                                        <a href="#">Starter Parst Car</a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="product-price pull-left">
                                            <p>$ 1170</p>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnage aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatese Duis aute irure dolor in reprehenderit in voluptate istadio</p>
                                    </div>
                                    <!-- cart plus minus start -->
                                    <div class="cart-plus-minus">
                                        <label>Quantity: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                    <!-- cart plus minus end -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single list shop end -->
                        <!-- single list shop start -->
                        <div class="single-list-shop">
                            <div class="col-md-3 col-sm-5">
                                <!-- product img start -->
                                <div class="product-img">
                                    <a href="single-shop.html"><img src="img/product/2.jpg" alt=""></a>
                                </div>
                                <!-- product img end -->
                            </div>
                            <div class="col-md-9 col-sm-7">
                                <div class="single-product">
                                    <div class="product-name">
                                        <a href="#">Three Ball Bearing</a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="product-price pull-left">
                                            <p>$ 320</p>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnage aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatese Duis aute irure dolor in reprehenderit in voluptate istadio</p>
                                    </div>
                                    <!-- cart plus minus start -->
                                    <div class="cart-plus-minus">
                                        <label>Quantity: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                    <!-- cart plus minus end -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single list shop end -->
                        <!-- single list shop start -->
                        <div class="single-list-shop">
                            <div class="col-md-3 col-sm-5">
                                <!-- product img start -->
                                <div class="product-img">
                                    <a href="single-shop.html"><img src="img/product/3.jpg" alt=""></a>
                                </div>
                                <!-- product img end -->
                            </div>
                            <div class="col-md-9 col-sm-7">
                                <div class="single-product">
                                    <div class="product-name">
                                        <a href="#">Disk Break</a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="product-price pull-left">
                                            <p>$ 950</p>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnage aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatese Duis aute irure dolor in reprehenderit in voluptate istadio</p>
                                    </div>
                                    <!-- cart plus minus start -->
                                    <div class="cart-plus-minus">
                                        <label>Quantity: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                    <!-- cart plus minus end -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single list shop end -->
                        <!-- single list shop start -->
                        <div class="single-list-shop">
                            <div class="col-md-3 col-sm-5">
                                <!-- product img start -->
                                <div class="product-img">
                                    <a href="single-shop.html"><img src="img/product/4.jpg" alt=""></a>
                                </div>
                                <!-- product img end -->
                            </div>
                            <div class="col-md-9 col-sm-7">
                                <div class="single-product">
                                    <div class="product-name">
                                        <a href="#">Car Exhaust Pipe</a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="product-price pull-left">
                                            <p>$ 220.50</p>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnage aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatese Duis aute irure dolor in reprehenderit in voluptate istadio</p>
                                    </div>
                                    <!-- cart plus minus start -->
                                    <div class="cart-plus-minus">
                                        <label>Quantity: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                    <!-- cart plus minus end -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single list shop end -->
                        <!-- single list shop start -->
                        <div class="single-list-shop">
                            <div class="col-md-3 col-sm-5">
                                <!-- product img start -->
                                <div class="product-img">
                                    <a href="single-shop.html"><img src="img/product/5.jpg" alt=""></a>
                                </div>
                                <!-- product img end -->
                            </div>
                            <div class="col-md-9 col-sm-7">
                                <div class="single-product">
                                    <div class="product-name">
                                        <a href="#">Disk Break Pad</a>
                                    </div>
                                    <div class="price-rating">
                                        <div class="product-price pull-left">
                                            <p>$ 1170</p>
                                        </div>
                                        <!-- ratings -->
                                        <div class="ratings pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <span>(Based on 04 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnage aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatese Duis aute irure dolor in reprehenderit in voluptate istadio</p>
                                    </div>
                                    <!-- cart plus minus start -->
                                    <div class="cart-plus-minus">
                                        <label>Quantity: </label>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                    <!-- cart plus minus end -->
                                    <div class="product-action">
                                        <div class="action-btn">
                                            <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                            <button class="text-button action-single-btn"> add to cart</button>
                                            <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single list shop end -->
                    </div>
                    <!-- list shop end -->
                </div>
            </div>
            <!-- shop tab content end -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- toolbar start -->
                <div class="toolbar-bottom">
                    <ul>
                        <li><a href="#"> <i class="fa fa-angle-left"></i> </a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="current"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"> <i class="fa fa-angle-right"></i> </a></li>
                    </ul>
                </div>
                <!-- toolbar end -->
            </div>
        </div>
    </div>
</div>
<!-- shop area end -->
@endsection
