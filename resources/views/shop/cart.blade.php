@extends('component.main')

@section('title', 'Cart')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>cart</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="/view-cart1">cart</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- cart area start -->
<div class="cart-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- cart table start -->
                <div class="table-responsive">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th class="item-img">No</th>
                                <!-- product img title -->
                                <th class="item-img">Image</th>
                                <!-- product name title -->
                                <th class="product-name">Spareparts</th>
                                <!-- unit price title -->
                                <th class="unit-price">Price</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Quantity</th>
                                <!-- remove button -->
                                <th class="remove-icon text-center">remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($carts->isEmpty())
							    <td align="center" colspan="5">No spare parts have been put in the cart yet</td>
                            @else
							@foreach ($carts as $index => $cart)
                                <tr>
                                    <td class="unit-price text-left">
                                        <span>{{ $index+1 }}</span>
                                    </td>
                                    <!-- product img end -->
                                    <td class="item-img">
                                        <a href="/shop-details{{ $cart->id_sparepart }}">
                                            <img src="{{ $cart->image }}" alt="">
                                        </a>
                                    </td>
                                    <!-- product img end -->
                                    <!-- product name start -->
                                    <td class="cart-product-name text-left">
                                        <a href="/shop-details{{ $cart->id_sparepart }}">{{ $cart->nama }}</a>
                                    </td>
                                    <!-- product name end -->
                                    <!-- price start -->
                                    <td class="unit-price text-left" width="250">
                                        <span>Rp. {{ number_format($cart->harga, 0, ',', '.') }}</span>
                                    </td>
                                    <!-- price end -->
                                    <!-- quantity start -->
                                    <td class="quantity">
                                    <form action="{{ route('editCart') }}" method="post">
                                        @csrf
                                        <input name="id_sparepart" value="{{ $cart->id_sparepart }}" hidden>
                                        <div class="quantity-wrapper">
                                            <button type="button" onclick="decreaseQuantity({{ $index+1 }})">-</button>
                                            @php
                                                $id_customer = Auth::user()->id_customer;

                                                $quantity_cart = \App\Models\Keranjang::where('id_customer', $id_customer)
                                                                            ->where('id_sparepart', $cart->id_sparepart)
                                                                            ->value('jumlah');
                                            @endphp
                                            <input id="quantityInput{{ $index+1 }}" type="text" name="jumlah" value="{{ $quantity_cart }}">
                                            <button type="button" onclick="increaseQuantity({{ $index+1 }})">+</button>
                                        </div>
                                        <button type="submit"><i class="fa fa-check"></i></button>
                                    </form>
                                    </td>
                                    <!-- quantity end -->
                                    <!-- remove icon start -->
                                    <td class="remove-icon">
                                        <form action="{{ route('removeCart') }}" method="post">
                                            @csrf 
                                            <input name="id_sparepart" value="{{ $cart->id_sparepart }}" hidden>
                                            <button type="submit"> <i class="icofont icofont-close-line"></i> </button>
                                        </form>
                                    </td>
                                    <!-- remove icon end -->
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- cart table end -->
            </div>
        </div>
        <!-- cart addition info area start -->
        <div class="row">
            <div class="cart-addition-area">
                <div class="col-md-12">
                    <!-- cart total start -->
                    <div class="cart-total">
                        <p class="total-price">Total <span class="pull-right">Rp. {{ number_format($total, 0, ',', '.') }}</span> </p>
                        <div class="shopping-button text-right">
                            <a href="checkout.html">procced to checkout</a>
                        </div>
                    </div>
                    <!-- cart total end -->
                </div>
            </div>
        </div>
        <!-- cart addition info area end -->
    </div>
</div>
<!-- cart area end -->
<script>
    function decreaseQuantity(index) {
        var qtyInput = document.getElementById('quantityInput' + index);
        var currentValue = parseInt(qtyInput.value);
        if (currentValue > 1) {
            qtyInput.value = currentValue - 1;
        }
    }

    function increaseQuantity(index) {
        var qtyInput = document.getElementById('quantityInput' + index);
        var currentValue = parseInt(qtyInput.value);
        qtyInput.value = currentValue + 1;
    }
</script>
<style>
.quantity-wrapper {
    display: flex;
    align-items: center;
}

.quantity-wrapper button {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 5px 10px;
    cursor: pointer;
}

.quantity-wrapper input {
    width: 50px;
    text-align: center;
    border: 1px solid #ccc;
    margin: 0 5px;
}
</style>
@endsection
