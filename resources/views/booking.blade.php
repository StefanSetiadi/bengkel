@extends('component.main')

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
                        <h3 class="contact-title">Location</h3>
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-location-pin"></i></div>
                            <div class="icon-text">
                                <p>28 Green Tower, Street Name <br> New York City, USA</p>
                            </div>
                        </div>
                        <!-- single address end -->
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-phone"></i></div>
                            <div class="icon-text">
                                <p>Phone : +061012345678 <br> Fax : +0061012345678</p>
                            </div>
                        </div>
                        <!-- single address end -->
                        <!-- single address start -->
                        <div class="single-address">
                            <div class="icon"><i class="icofont icofont-envelope"></i></div>
                            <div class="icon-text">
                                <p>Contact@yourename.com <br> Support@yourname.com</p>
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
                            <h3 class="contact-title">Booking</h3>
                            <!-- input plate number -->
                            <input name="no_kendaraan" type="text" placeholder="Plate Number" required oninput="this.value = this.value.toUpperCase()">
                            <!-- input datetime -->
                            <input name="waktu" type="datetime-local" required>
                            <!-- description -->
                            <textarea name="deskripsi" cols="10" rows="5" placeholder="Your description"></textarea>
                            <!-- send button -->
                            <div class="shopping-button">
                                <button type="submit">Booking</button>
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
                                <th class="item-img">No</th>
                                <!-- product img title -->
                                <th class="item-img">Plate Numbers</th>
                                <!-- product img title -->
                                <th class="item-img">Description</th>
                                <!-- product name title -->
                                <th class="product-name">Date</th>
                                <!-- unit price title -->
                                <th class="unit-price">Time</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Status</th>
                                <!-- remove button -->
                                <th class="remove-icon text-center">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($bookings->isEmpty())
							    <td align="center" colspan="7">You haven't made a booking yet</td>
                            @else
							@foreach ($bookings as $index => $booking)
                                <tr>
                                    <td class="unit-price text-left" width=100>
                                        <span>{{ $index+1 }}</span>
                                    </td>
                                    <td class="cart-product-name text-left" width=200>
                                        <a>{{ $booking->no_kendaraan }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <span>{{ $booking->deskripsi }}</span>
                                    </td>
                                    @php
                                        $datetime = $booking->waktu;
                                        $date = \Carbon\Carbon::parse($datetime)->format('Y-m-d');
                                        $time = \Carbon\Carbon::parse($datetime)->format('H:i:s');
                                    @endphp
                                    <td class="cart-product-name text-left" width=300>
                                        <span>{{ $date }}</span>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <span>{{ $time }}</span>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <span>{{ $booking->status_booking }}</span>
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
