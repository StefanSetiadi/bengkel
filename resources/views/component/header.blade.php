<!-- header area start -->
<header id="sticker">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- welcome message start -->
                    <div class="welcome-msg">
                        <ul>
                            <li> <p> <span> Contact: </span>0088-234-567-890</p></li>
                            <li> <p> <span> Opening Hours: </span>Mon-Fri:  8:30am-6:30pm</p></li>
                        </ul>
                    </div>
                    <!-- welcome message end -->
                </div>
                <div class="col-md-5">
                    <div class="header-top-menu">
                        <!-- top social start -->
                        <div class="top-social">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                        <!-- top social end -->
                        <!-- cart menu start -->
                        <div class="cart-menu">
                            <ul>
                                <li><a href="#"> <i class="fa fa-shopping-cart"></i>(2)</a>
                                    <div class="cart-items">
                                        <ul>
                                            <!-- single cart item start -->
                                            <li>
                                                <!-- cart item img -->
                                                <div class="cart-item-img">
                                                    <a href="#">
                                                        <img src="img/product/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <!-- cart item info -->
                                                <div class="cart-info">
                                                    <a href="#" class="cart-item-name">
                                                        Three Ball Bearing
                                                    </a>
                                                    <p class="quantity">quantity: <strong> 1</strong></p>
                                                    <p class="price">price: <strong> $ 320</strong></p>
                                                    <button class="remove"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <!-- single cart item end -->
                                            <!-- single cart item start -->
                                            <li>
                                                <!-- cart item img -->
                                                <div class="cart-item-img">
                                                    <a href="#">
                                                        <img src="img/product/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <!-- cart item info -->
                                                <div class="cart-info">
                                                    <a href="#" class="cart-item-name">
                                                        Car Exhaust Pipe
                                                    </a>
                                                    <p class="quantity">quantity: <strong> 2</strong></p>
                                                    <p class="price">price: <strong> $ 441</strong></p>
                                                    <button class="remove"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </li>
                                            <!-- single cart item end -->
                                            <li>
                                                <div class="subtotal">
                                                    <div class="subtotal-title">
                                                        <h3>subtotal <span class="pull-right"> $ 661 </span> </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-btns">
                                                    <span class="default-btn">
                                                        <a href="cart.html">view cart</a>
                                                    </span>
                                                    <span class="default-btn pull-right">
                                                        <a href="checkout.html">checkout</a>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- cart menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mainmenu area start -->
    <div class="main-menu-area hidden-xs">
        <div class="container">
            <div class="menu-position">
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <!-- logo start -->
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-md-9 col-sm-10 static">
                        <!-- main-menu start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <!-- single menu -->
                                    <li class="has-sub"><a href="{{ route('index') }}">Home</a></li>
                                    <!-- single menu -->
                                    <li><a href="{{ route('about-us') }}">About us</a></li>
                                    
                                    <!-- single menu -->
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    <!-- single menu -->
                                    <li class="has-mega"><a href="#">pages<i class="icofont icofont-simple-down"></i></a>
                                        <!-- mega-menu start -->
                                        <div class="mega-menu">
                                            <span>
                                                <a href="{{ route('about-us') }}">about us</a>
                                                <a href="{{ route('blog') }}">blog</a>
                                            </span>
                                            <span>
                                                <a href="{{ route('blog-details') }}">blog details</a>
                                                <a href="{{ route('our-services') }}">our services</a>
                                                <a href="{{ route('contact') }}">contact us</a>
                                                <a href="{{ route('shop') }}">shop</a>
                                            </span>
                                            <span>
                                                <a href="{{ route('shop-details') }}">shop details</a>
                                            </span>
                                            <span>
                                                <a href="{{ route('cart') }}">shopping cart</a>
                                                <a href="{{ route('checkout') }}">checkout</a>
                                                <a href="{{ route('wishlist') }}">wishlist</a>
                                                <a href="{{ route('error-404') }}">eror 404</a>
                                                <a href="{{ route('error-500') }}">eror 500</a>
                                            </span>
                                        </div>
                                        <!-- mega-menu end -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mainmenu area end -->
    <!-- mobile menu area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="logo">
                        <a href="{{ route('index') }}">
                            <img src="img/logo-light.png" alt="">
                        </a>
                    </div>
                    <div class="mobile-menu">
                        <nav>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('shop') }}">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('about-us') }}">about us</a></li>
                                        <li><a href="{{ route('blog') }}">blog</a></li>
                                        <li><a href="{{ route('blog-details') }}">blog details</a></li>
                                        <li><a href="{{ route('our-services') }}">our services</a></li>
                                        <li><a href="{{ route('contact') }}">contact us</a></li>
                                        <li><a href="{{ route('shop') }}">shop</a></li>
                                        <li><a href="{{ route('shop-details') }}">shop details</a></li>
                                        <li><a href="{{ route('cart') }}">shopping cart</a></li>
                                        <li><a href="{{ route('checkout') }}">checkout</a></li>
                                        <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                                        <li><a href="{{ route('error-404') }}">eror 404</a></li>
                                        <li><a href="{{ route('error-500') }}">eror 500</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</header>
<!-- header area end -->
