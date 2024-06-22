@extends('component.main')

@section('title', 'Product')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Product</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('products') }}">Product</a></li>
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
                    <form class="form-inline" id="sortForm" action="{{route('products')}}">
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
                                <option value="4" {{ request('paginate') == '4' ? 'selected' : '' }}>4</option>
                                <option value="8" {{ request('paginate') == '8' ? 'selected' : '' }}>8</option>
                                <option value="16" {{ request('paginate') == '16' ? 'selected' : '' }}>16</option>
                                <option value="24" {{ request('paginate') == '24' ? 'selected' : '' }}>24</option>
                            </select>
                        </div>
                    </form>
                    <!-- shop show product end -->
                </div>
                <!-- shop bar end -->
            </div>
        </div>
        
        <div class="row">
            @if ($message = Session::get('success'))
                <style>
                    #alertMessage {
                        transition: opacity 0.8s ease-out;
                    }
                </style>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <br>
                <div id="alertMessage" class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
                <script>
                    setTimeout(() => {
                        const alertElement = document.getElementById('alertMessage');
                        alertElement.style.opacity = '0';
                        setTimeout(() => alertElement.style.display = 'none', 500); // Menunggu transisi selesai
                    }, 5000);
                </script>
            @endif
            <!-- shop tab content start -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="gird">
                    <!-- gird shop start -->
                    <div class="gird-shop" id="productList">
                        @if ($products->isEmpty())
                        <h3 align="center">No products found matching your search criteria.</h3>
                        @else
                        @foreach ($products as $index => $product)
                            <div class="col-md-3 col-sm-6">
                                <!-- single shop start -->
                                <div class="single-product hover-style text-center">
                                    <div class="product-img">
                                        <!-- product-img -->
                                        <a href="/editProduct{{ $product->id_product }}" class="main-img">
                                        @if(!empty($product->image) && file_exists(public_path($product->image)))
                                            <img src="{{ $product->image }}" alt="" width="270" height="330">
                                        @else
                                            <img src="img/product/1.jpg" alt="" width="270" height="330">
                                        @endif
                                        </a>
                                        <!-- product actions -->
                                        <div class="product-action">
                                            <div class="action-btn">
                                                <button onclick="location.href='/editProduct{{ $product->id_product }}'" class="text-button action-single-btn">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-info start -->
                                    <div class="product-info text-center">
                                        <div class="product-name">
                                            <a href="/shop-details{{$product->id_product}}">{{ $product->name }}</a>
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
                        @endif
                    </div>
                    <!-- gird shop end -->
                </div>
            </div>
            <!-- shop tab content end -->
        </div>
        <div class="row">
            <div class="col-md-12 text-center" >
                <!-- toolbar start -->
                {{$products->links()}}
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
