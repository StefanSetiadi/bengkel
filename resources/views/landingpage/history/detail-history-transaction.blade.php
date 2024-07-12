@extends('landingpage.component.main')

@section('title', 'Detail History Transaction')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>detail history transaction</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('historyTransaction') }}" style="color: white;">History Transaction</a> <span> / </span></li>
                        <li><a href="{{ route('detailHistoryTransaction') }}">Detail History Transaction</a></li>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- about us area start -->
<div class="about-us-area section-padding">
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
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($spareparts->isEmpty())
							    <td align="center" colspan="6">There are no spare parts on this bill</td>
                            @else
							@foreach ($spareparts as $index => $sparepart)
                                <tr>
                                    <td class="unit-price text-left">
                                        <span>{{ $index+1 }}</span>
                                    </td>
                                    <!-- product img end -->
                                    <td class="item-img">
                                        <a href="/shop-details{{ $sparepart->id_sparepart }}">
                                            <img src="{{ $sparepart->image }}" alt="">
                                        </a>
                                    </td>
                                    <!-- product img end -->
                                    <!-- product name start -->
                                    <td class="cart-product-name text-left">
                                        <a href="/shop-details{{ $sparepart->id_sparepart }}">{{ $sparepart->nama }}</a>
                                    </td>
                                    <!-- product name end -->
                                    <!-- price start -->
                                    <td class="unit-price text-left" width="250">
                                        <span>Rp. {{ number_format($sparepart->harga, 0, ',', '.') }}</span>
                                    </td>
                                    <!-- price end -->
                                    <!-- quantity start -->
                                    <td class="quantity">
                                        <input name="id_sparepart" value="{{ $sparepart->id_sparepart }}" hidden>
                                        <div class="quantity-wrapper">
                                            @php
                                                $quantity_cart = \App\Models\DetailTransaksi::where('id_transaksi', $id_transaksi)
                                                                            ->where('id_sparepart', $sparepart->id_sparepart)
                                                                            ->value('jumlah');
                                            @endphp
                                            <input type="text" name="jumlah" value="{{ $quantity_cart }}" disabled>
                                        </div>
                                    </td>
                                    <!-- quantity end -->
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- cart table end -->
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->

@endsection