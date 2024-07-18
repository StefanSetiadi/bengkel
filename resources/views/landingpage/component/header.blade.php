<!-- header area start -->
<header id="sticker">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- welcome message start -->
                    <div class="welcome-msg">
                        <ul>
                            <li> <p> <span> Kontak: </span>089-234-567-890</p></li>
                            <li> <p> <span> Buka: </span>Senin-Sabtu: 08:30-17.00</p></li>
                        </ul>
                    </div>
                    <!-- welcome message end -->
                </div>
                <div class="col-md-5">
                    <div class="header-top-menu">
                        <!-- cart menu start -->
                        <div class="cart-menu">
                            <ul>
                                <li>
                                    @isset($carts)
                                    <a href="#"> <i class="fa fa-shopping-cart"></i>({{ $carts->count() }})</a>
                                    <div class="cart-items">
                                        <ul>
                                            @foreach ($carts as $index => $cart)
                                            <!-- single cart item start -->
                                            <li>
                                                <!-- cart item img -->
                                                <div class="cart-item-img">
                                                    <a href="#">
                                                        <img src="{{ $cart->image }}" alt="">
                                                    </a>
                                                </div>
                                                <!-- cart item info -->
                                                <div class="cart-info">
                                                    <a href="\shop-details{{ $cart->id_sparepart }}" class="cart-item-name">
                                                        {{ $cart->nama }}
                                                    </a>
                                                    <p class="quantity">quantity: <strong> 
                                                    @php
                                                        $id_customer = Auth::user()->id_customer;

                                                        $quantity_cart = \App\Models\Keranjang::where('id_customer', $id_customer)
                                                                                    ->where('id_sparepart', $cart->id_sparepart)
                                                                                    ->value('jumlah');
                                                    @endphp
                                                    {{ $quantity_cart }}
                                                    </strong></p>
                                                    <p class="price">price: <strong>Rp. {{ number_format($cart->harga, 0, ',', '.') }}</strong></p>
                                                    <form action="{{ route('removeCart') }}" method="post">
                                                        @csrf
                                                        <input name="jumlah" value="{{ $quantity_cart }}" hidden>
                                                        <input name="id_sparepart" value="{{ $cart->id_sparepart }}" hidden>
                                                        <button type="submit" class="remove"><i class="fa fa-trash-o"></i></button>
                                                    </form>
                                                </div>
                                            </li>
                                            <!-- single cart item end -->
                                            @endforeach
                                            <li>
                                                <div class="subtotal">
                                                    <div class="subtotal-title">
                                                        <h3>Total <span class="pull-right">Rp. {{ number_format($total, 0, ',', '.') }}</span> </h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-btns">
                                                    <span class="default-btn">
                                                        <a href="{{ route('view-cart') }}">view cart</a>
                                                    </span>
                                                    <!-- <span class="default-btn pull-right">
                                                        <a href="checkout.html">checkout</a>
                                                    </span> -->
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                    <a href="#"> <i class="fa fa-shopping-cart"></i></a>
                                    <div class="cart-items">
                                        <ul>
                                        </ul>
                                    </div>
                                    @endisset
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
                                    <li><a href="{{ route('shop') }}">Shop</a></li>
                                    @if (Auth::check())
                                        <!-- single menu -->
                                        <form action="{{ route('booking') }}" style="display:inline-block;" id="bookingForm" method="get">
                                            @csrf
                                            
                                            <li><a href="#" onclick="document.getElementById('bookingForm').submit(); return false;" type="submit">Booking</a></li>
                                        </form>
                                        <!-- single menu
                                        <li><a href="{{ route('service') }}">Services</a></li> -->
                                        <!-- single menu with dropdown -->
                                        <li class="has-mega"><a href="#">History<i class="icofont icofont-simple-down"></i></a>
                                            <!-- mega-menu start -->
                                            <div class="mega-menu" style="width:40%;transform: translateX(-20%); position: absolute;">
                                                <span>
                                                    <a href="{{ route('historyTransaction') }}">Transaction</a>
                                                </span>
                                                <span>
                                                    <a href="{{ route('historyServices') }}">Services</a>
                                                </span>
                                            </div>
                                            <!-- mega-menu end -->
                                        </li>

                                    @endif
                                    @if (Auth::check())
                                    <!-- single menu -->
                                    <li><a href="{{ route('view-cart') }}">Cart</a></li>
                                    <!-- single menu -->
                                    <li><a href="{{ route('actionlogout') }}">Logout</a></li>
                                    @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    @endif
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
                                <li><a href="{{ route('service') }}">Services</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="{{ route('about-us') }}">about us</a></li>
                                        <li><a href="{{ route('service') }}">services</a></li>
                                        <li><a href="/view-cart1">shopping cart</a></li>
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
