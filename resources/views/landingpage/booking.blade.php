@extends('landingpage.component.main')

@section('title', 'Booking')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>Booking</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <form action="{{ route('booking') }}" style="display:inline-block;" id="bookingForm" method="post">
                            @csrf
                            <li><a href="#" onclick="document.getElementById('bookingForm').submit(); return false;" type="submit">Booking</a></li>
                        </form>
                    </ul>
                </div>
                <!-- page title menu end -->
            </div>
        </div>
    </div>
</div>
<!-- page title area end -->
<!-- google map area start -->
<div class="google-map-area">
    <!-- google map start -->
    <div id="googleMap"></div>
    <!-- google map end -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <!-- contact box start -->
                <div class="contact-box spacer">
                    <!-- contact address start -->
                    <div class="contact-info">
                        <!-- title -->
                        <h3 class="contact-title">Lokasi</h3>
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-location-pin"></i></div>
                            <div class="icon-text">
                                <p>28 Jln. Tubagus Ismail <br> Dago, Bandung</p>
                            </div>
                        </div>
                        <!-- single address end -->
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-phone"></i></div>
                            <div class="icon-text">
                                <p>Kontak : 0896546778x</p>
                            </div>
                        </div>
                        <!-- single address end -->
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-envelope"></i></div>
                            <div class="icon-text">
                                <p>csbengkel@gmail.com</p>
                            </div>
                        </div>
                        <!-- single address end -->
                    </div>
                    <!-- contact address end -->
                    <!-- contact form start -->
                    <div class="contact-form">
                        <form id="contact-form" action="{{ route('addBooking') }}" method="post">
                            @csrf
                            <!-- title -->
                            <h3 class="contact-title">Halaman Pemesanan</h3>
                            <!-- input plate number -->
                            <input name="no_kendaraan" type="text" placeholder="Plate Number" required oninput="this.value = this.value.toUpperCase()">
                            <!-- input datetime -->
                            <input name="waktu" type="datetime-local" required>
                            <!-- description -->
                            <textarea name="deskripsi" cols="10" rows="5" placeholder="Your description"></textarea>
                            <!-- send button -->
                            <div class="shopping-button">
                                <button type="submit">Pesan</button>
                            </div>
                        </form>
                    </div>
                    <!-- contact form end -->
                </div>
                <!-- contact box end -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- cart table start -->
                <div class="table-responsive">
                    <table class="table-bordered table">
                        <thead>
                            <tr>
                                <th class="item-img text-center">No</th>
                                <!-- product img title -->
                                <th class="item-img text-center">Nomor Plat</th>
                                <!-- product img title -->
                                <th class="item-img text-center">Tanggal</th>
                                <!-- product name title -->
                                <th class="product-name text-center">Deskripsi</th>
                                <!-- unit price title -->
                                <th class="unit-price text-center">Jam</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Status</th>
                                <!-- remove button -->
                                <th class="remove-icon text-center">Hapus</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($bookings->isEmpty())
							    <td align="center" colspan="7">Anda belum melakukan pemesanan</td>
                            @else
							@foreach ($bookings as $index => $booking)
                                <tr>
                                    <td class="cart-product-name text-left" width=100>
                                        <a>{{ $index+1 }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=200>
                                        <a>{{ $booking->no_kendaraan }}</a>
                                    </td>
                                    @php
                                        $datetime = $booking->waktu;
                                        $date = \Carbon\Carbon::parse($datetime)->format('Y-m-d');
                                        $time = \Carbon\Carbon::parse($datetime)->format('H:i:s');
                                    @endphp
                                    <td class="cart-product-name text-left" width=300>
                                        <a>{{ $date }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <a>{{ $booking->deskripsi }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <a>{{ $time }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <a>{{ $booking->status_booking }}</a>
                                    </td>
                                    <!-- remove icon start -->
                                    <td class="remove-icon">
                                        <form action="{{ route('removeBooking') }}" method="post">
                                            @csrf 
                                            <input name="id_booking" value="{{ $booking->id_booking }}" hidden>
                                            @if($booking->status_booking == 'accepted' || $booking->status_booking == 'rejected')
                                            <button type="submit" disabled> <i class="icofont icofont-close-line"></i> </button>
                                            @else
                                            <button type="submit"> <i class="icofont icofont-close-line"></i> </button>
                                            @endif
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
    </div>
</div>
<!-- google map area end -->
@endsection
