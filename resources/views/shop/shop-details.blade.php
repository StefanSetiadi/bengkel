@extends('component.main')

@section('title', 'Shop Details')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Shop details</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="#">shop details</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- shop details area start -->
<div class="shop-details section-padding">
    <div class="container">
        <div class="row">
            <div class="single-list-shop">
                <div class="col-md-5 col-sm-6">
                    <!-- product img start -->
                    <div class="product-img">
                        @if(!empty($sparepart->image) && file_exists(public_path($sparepart->image)))
                            <img src="{{ $sparepart->image }}" alt="" height="520">
                        @else
                            <img src="img/product/1.jpg" alt="" height="520">
                        @endif
                    </div>
                    <!-- product img end -->
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="single-product">
                        <div class="product-name">
                            <a href="#">{{ $sparepart->nama }}</a>
                        </div>
                        <div class="price-rating">
                            <div class="product-price pull-left">
                                <p>Rp. {{ number_format($sparepart->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="product-text">
                            <p>{{ $sparepart->deskripsi }}</p>
                        </div>
                        <!-- cart plus minus start -->
                        <div class="cart-plus-minus">
                            <label>Quantity: </label>
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                        </div>
                        <!-- cart plus minus end -->
                        <!-- product action start -->
                        <div class="product-action">
                            <div class="action-btn">
                                <button class="btn btn-danger"> add to cart</button>
                                <button class="btn btn-success"> Check Out</button>
                            </div>
                        </div>
                        <!-- product action end -->
                        <!-- shop details social start -->
                        <div class="shop-details-social">
                            <ul>
                                <li> <span> share on: </span></li>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                        <!-- shop details social end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop details area end -->
@endsection
