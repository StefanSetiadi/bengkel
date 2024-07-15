@extends('landingpage.component.main')

@section('title', 'History Services')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>history services</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('historyServices') }}">History Services</a></li>
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
                                <th class="quantity">Plate Numbers</th>
                                <!-- product img title -->
                                <th class="quantity">Date</th>
                                <!-- product img title -->
                                <th class="quantity">Spare parts cost</th>
                                <!-- product name title -->
                                <th class="quantity">Service Fee</th>
                                <!-- unit price title -->
                                <th class="quantity">Total</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($services->isEmpty())
							    <td align="center" colspan="7">No service history found</td>
                            @else
							@foreach ($services as $index => $service)
                                <tr>
                                    <td class="cart-product-name text-left" width=100>
                                        <a>{{ $index+1 }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=200>
                                        <a>{{ $service->no_kendaraan }}</a>
                                    </td>
                                    @php
                                        $datetime = $service->created_at;
                                        $date = \Carbon\Carbon::parse($datetime)->format('Y-m-d');
                                    @endphp
                                    <td class="cart-product-name text-left">
                                        <a>{{ $date }}</a>
                                    </td>
                                    <td class="cart-product-name text-left">
                                        <a>Rp. {{ number_format($service->biaya_sparepart, 0, ',', '.') }}</a>
                                    </td>
                                    <td class="cart-product-name text-left">
                                        <a>Rp. {{ number_format($service->biaya_jasa, 0, ',', '.') }}</a>
                                    </td>
                                    <td class="cart-product-name text-left">
                                        <a>Rp. {{ number_format($service->total_biaya, 0, ',', '.') }}</a>
                                    </td>
                                    <td class="cart-product-name text-left">
                                        @if (($service->biaya_sparepart > 0) && ($service->status_pembayaran == 1))
                                        <div class="shopping-button">
                                            <button href="#" target="_blank">Invoice</button>
                                        </div>
                                        @elseif ($service->biaya_sparepart > 0)
                                        <div class="shopping-button">
                                            <form action="#">
                                                <button type="submit">Pay</button>
                                            </form>
                                        </div>
                                        @endif
                                    </td>
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