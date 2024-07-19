@extends('landingpage.component.main')

@section('title', 'Daftar Orderdil')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Onderdil</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Beranda</a> <span> / </span> </li>
                        <li><a href="{{ route('service') }}" style="color: white;">Servis</a> <span> / </span> </li>
                        <li><a href="{{ route('spareparts') }}">Spareparts</a></li>
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
        </div>
        <div class="row">
            <!-- shop tab content start -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="gird">
                    <!-- gird shop start -->
                    <div class="gird-shop" id="productList">
                        @if ($spareparts->isEmpty())
                        <h3 align="center">Suku cadangnya belum tersedia</h3>
                        @else
                        @foreach ($spareparts as $index => $sparepart)
                            <div class="col-md-3 col-sm-6">
                                <!-- single shop start -->
                                <div class="single-product hover-style text-center">
                                    <div class="product-img">
                                        <!-- product-img -->
                                        <a href="/shop-details{{$sparepart->id_service}}" class="main-img">
                                        @if(!empty($sparepart->image) && file_exists(public_path($sparepart->image)))
                                            <img src="{{ $sparepart->image }}" alt="" width="270" height="330">
                                        @else
                                            <img src="img/product/1.jpg" alt="" width="270" height="330">
                                        @endif
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
                                            <a href="/shop-details{{$sparepart->id_kategori_service}}">{{ $sparepart->nama }}</a>
                                        </div>
                                        <div class="product-price">
                                            <p>Rp. {{ number_format($sparepart->harga, 0, ',', '.') }}</p>
                                        </div>
                                    </div>
                                    <!-- product-info start -->
                                </div>
                                <!-- single shop end -->
                            </div>
                        @endforeach
                        @endif
                    </div>
                    <!-- gird shop end -->
                </div>
            </div>
            <!-- shop tab content end -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <!-- toolbar start -->
                <div class="toolbar-bottom">
                </div>
                <!-- toolbar end -->
            </div>
        </div>
    </div>
</div>
<!-- shop area end -->

<style>
    .pagination .page-item.active .page-link {
        background-color: #EE2050;
        border-color: #EE2050;
        color: white;
    }

    .pagination .page-link {
        color: #EE2050;
    }
</style>

@endsection
