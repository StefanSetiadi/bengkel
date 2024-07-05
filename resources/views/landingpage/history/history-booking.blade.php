@extends('landingpage.component.main')

@section('title', 'History Booking')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>history booking</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('historyBooking') }}">History Booking</a></li>
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
                                    <td class="cart-product-name text-left" width=100>
                                        <a>{{ $index+1 }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=200>
                                        <a>{{ $booking->no_kendaraan }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <a>{{ $booking->deskripsi }}</a>
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
<!-- about us area end -->

@endsection