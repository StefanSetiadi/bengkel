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
                <form class="form-inline" id="sortForm" action="{{route('shop')}}">
                        <div class="shop-nav width-33 pull-left">
                            <input type="text" class="form-control" name="search" placeholder="Search" size="30" value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                        <!-- shop tab bar start -->
                        <!-- shop tab bar end -->
                        <!-- shop sort start -->
                        <div class="sort-by width-33 pull-left text-center">
                            <label>Sort By: </label>
                            <select id="sortProducts" name="sort" onchange="document.getElementById('sortForm').submit();">
                                <option value="nameASC" {{ request('sort') == 'nameASC' ? 'selected' : '' }}>Name (Ascending)</option>
                                <option value="nameDESC" {{ request('sort') == 'nameDESC' ? 'selected' : '' }}>Name (Descending)</option>
                                <option value="priceASC" {{ request('sort') == 'priceASC' ? 'selected' : '' }}>Price (Ascending)</option>
                                <option value="priceDESC" {{ request('sort') == 'priceDESC' ? 'selected' : '' }}>Price (Descending)</option>
                            </select>
                        </div>
                        <!-- shop sort end -->
                        <!-- shop show product start -->
                        <div class="limit-product width-33 pull-left text-right">
                            <label>Show: </label>
                            <select name="paginate" onchange="document.getElementById('sortForm').submit();">
                                <option value="8" {{ request('paginate') == '8' ? 'selected' : '' }}>8</option>
                                <option value="16" {{ request('paginate') == '16' ? 'selected' : '' }}>16</option>
                                <option value="24" {{ request('paginate') == '24' ? 'selected' : '' }}>24</option>
                            </select>
                        </div>
                    </form>
                <!-- shop bar end -->
            </div>
        </div>
        <div class="row">
            <!-- shop tab content start -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="gird">
                    <!-- gird shop start -->
                    <div class="gird-shop" id="productList">
                        @if ($spareparts->isEmpty())
                            <h3 align="center">No products found matching your search criteria.</h3>
                        @else
                        @foreach ($spareparts as $index => $sparepart)
    @if ($index % 4 == 0)
        <div class="row">
    @endif
    <div class="col-md-3 col-sm-6">
        <!-- single shop start -->
        <div class="single-product hover-style text-center">
            <div class="product-img">
                <!-- product-img -->
                <a href="/shop-details{{$sparepart->id_sparepart}}" class="main-img">
                    @if(!empty($sparepart->image) && file_exists(public_path($sparepart->image)))
                        <img src="{{ $sparepart->image }}" alt="" width="270" height="330">
                    @else
                        <img src="img/product/1.jpg" alt="" width="270" height="330">
                    @endif
                </a>
                <!-- product actions -->
                <div class="product-action">
                    <div class="action-btn">
                        <form action="{{ route('addCart') }}" method="post" style="display:inline-block;">
                            @csrf
                            
                            <input name="id_sparepart" value="{{ $sparepart->id_sparepart }}" hidden>
                            <input name="jumlah" value="1" hidden>
                            <button type="submit" class="btn btn-danger"> add to cart</button>
                        </form>
                        <a class="btn btn-warning" href="/shop-details{{ $sparepart->id_sparepart }}"> View</a>
                    </div>
                </div>
            </div>
            <!-- product-info start -->
            <div class="product-info text-center">
                <div class="product-name">
                    <a href="/shop-details{{$sparepart->id_sparepart}}">{{ $sparepart->nama }}</a>
                </div>
                <div class="product-price">
                    <p>Rp. {{ number_format($sparepart->harga, 0, ',', '.') }}</p>
                </div>
            </div>
            <!-- product-info start -->
        </div>
        <!-- single shop end -->
    </div>
    @if (($index + 1) % 4 == 0 || $index == count($spareparts) - 1)
        </div>
    @endif
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
                {{$spareparts->links()}}
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
