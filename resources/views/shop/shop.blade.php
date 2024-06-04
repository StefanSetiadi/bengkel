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
                    <!-- shop tab bar end -->
                    <!-- shop sort start -->
                    <div class="sort-by width-33 pull-left text-center">
                        <label>Sort By: </label>
                        <select id="sortProducts" >
                            <option value="name">Name</option>
                            <option value="price">Price</option>
                        </select>
                    </div>
                    <!-- shop sort end -->
                    <!-- shop show product start -->
                    <div class="limit-product width-33 pull-left text-right">
                        <label>Show: </label>
                        <select name="show">
                            <option value="#" selected>4</option>
                            <option value="#">8</option>
                            <option value="#">12</option>
                            <option value="#">24</option>
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
                    <div class="gird-shop" id="productList">
                        @php
                            $products = $products->sortBy('name');
                        @endphp
                        @foreach ($products as $index => $product)
                            <div class="col-md-3 col-sm-6">
                                <!-- single shop start -->
                                <div class="single-product hover-style text-center">
                                    <div class="product-img">
                                        <!-- product-img -->
                                        <a href="{{ route('shop-details') }}" class="main-img">
                                            <img src="{{ $product->image }}" alt="">
                                        </a>
                                        <!-- product actions -->
                                        <div class="product-action">
                                            <div class="action-btn">
                                                <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                <button class="text-button action-single-btn"> add to cart</button>
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
                                            <a href="{{ route('shop-details') }}">{{ $product->name }}</a>
                                        </div>
                                        <div class="product-price">
                                            <p>Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <!-- product-info start -->
                                </div>
                                <!-- single shop end -->
                            </div>
                        @endforeach
                    </div>
                    <!-- gird shop end -->
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