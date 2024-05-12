@extends('component.main')

@section('title', 'Wishlist')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>wishlist</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- wishlist area start -->
<div class="wishlist-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- wishlist table start -->
                <div class="table-responsive">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <!-- item img -->
                                <th class="item-img"></th>
                                <!-- item name title -->
                                <th class="product-name">Product</th>
                                <!-- item price title -->
                                <th class="unit-price">Price</th>
                                <!-- item stock status title -->
                                <th class="stock text-center">stock status</th>
                                <!-- item cart title -->
                                <th class="add-to-cart text-center">add to cart</th>
                                <!-- item remove title -->
                                <th class="remove-icon text-center">remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <!-- item img -->
                                <td class="item-img">
                                    <a href="single-product.html">
                                        <img src="img/product/1.jpg" alt="">
                                    </a>
                                </td>
                                <!-- item name -->
                                <td class="cart-product-name text-left">
                                    <a href="single-product.html">Starter Parst Car</a>
                                </td>
                                <!-- item price -->
                                <td class="unit-price text-left">
                                    <span>$1170</span>
                                </td>
                                <!-- item stock status -->
                                <td class="stock">
                                    <span>in stock</span>
                                </td>
                                <!-- item cart -->
                                <td class="add-to-cart">
                                    <button class="cart-btn">add to cart</button>
                                </td>
                                <!-- item remove button -->
                                <td class="remove-icon">
                                    <button> <i class="icofont icofont-close-line"></i> </button>
                                </td>
                            </tr>
                            <tr>
                                <!-- item img -->
                                <td class="item-img">
                                    <a href="single-product.html">
                                        <img src="img/product/2.jpg" alt="">
                                    </a>
                                </td>
                                <!-- item name -->
                                <td class="cart-product-name text-left">
                                    <a href="single-product.html">Car Exhaust Pipe</a>
                                </td>
                                <!-- item price -->
                                <td class="unit-price text-left">
                                    <span>$220.50</span>
                                </td>
                                <!-- item stock status -->
                                <td class="stock">
                                    <span>in stock</span>
                                </td>
                                <!-- item cart -->
                                <td class="add-to-cart">
                                    <button class="cart-btn">add to cart</button>
                                </td>
                                <!-- item romobe button -->
                                <td class="remove-icon">
                                    <button> <i class="icofont icofont-close-line"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- wishlist table end -->
            </div>
        </div>
    </div>
</div>
<!-- wishlist area end -->
@endsection
