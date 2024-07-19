@extends('landingpage.component.main')

@section('title', 'History Services')

@section('content')
<script type="text/javascript"
		src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-OndwIWbOjxSues4X"></script>
    
<div id="snap-container"></div>

<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>riwayat servis</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Beranda</a> <span> / </span> </li>
                        <li><a href="{{ route('historyServices') }}">Riwayat Servis</a></li>
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
                                <th class="quantity">Plat Nomor</th>
                                <!-- product img title -->
                                <th class="quantity">Tanggal</th>
                                <!-- product img title -->
                                <th class="quantity">Harga Sparepart</th>
                                <!-- product name title -->
                                <th class="quantity">Harga Servis</th>
                                <!-- unit price title -->
                                <th class="quantity">Total</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Detail</th>
                                <!-- quantity -->
                                <th class="quantity text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($services->isEmpty())
							    <td align="center" colspan="7">Belum ada riwayat servis</td>
                            @else
							@foreach ($services as $index => $service)
                            @if ($service->biaya_jasa > 0)
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
                                    <td class="remove-icon">
                                        <form action="{{ route('detailHistoryService') }}" method="post" style="display:inline-block;">
                                            @csrf
                                            <input name="id_service" value="{{ $service->id_service }}" hidden>
                                            <button type="submit">
                                            <svg fill="#000000" width="25px" height="25px" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M830 850H170q-8 0-14-6t-6-14V170q0-8 6-14t14-6h660q8 0 14 6t6 14v660q0 8-6 14t-14 6zM70 90v820q0 8 6 14t14 6h820q8 0 14-6t6-14V90q0-8-6-14t-14-6H90q-8 0-14 6t-6 14zm200 160h61q8 0 13.5 6t5.5 14v61q0 8-5.5 13.5T331 350h-61q-8 0-14-5.5t-6-13.5v-61q0-8 6-14t14-6zm200 0h260q8 0 14 6t6 14v61q0 8-6 13.5t-14 5.5H470q-9 0-14.5-5.5T450 331v-61q0-8 5.5-14t14.5-6zM270 450h61q8 0 13.5 5.5T350 470v60q0 9-5.5 14.5T331 550h-61q-8 0-14-5.5t-6-14.5v-60q0-9 6-14.5t14-5.5zm200 0h260q8 0 14 5.5t6 14.5v60q0 9-6 14.5t-14 5.5H470q-9 0-14.5-5.5T450 530v-60q0-9 5.5-14.5T470 450zM270 650h61q8 0 13.5 5.5T350 669v61q0 8-5.5 14t-13.5 6h-61q-8 0-14-6t-6-14v-61q0-8 6-13.5t14-5.5zm200 0h260q8 0 14 5.5t6 13.5v61q0 8-6 14t-14 6H470q-9 0-14.5-6t-5.5-14v-61q0-8 5.5-13.5T470 650z"/></svg>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        @if ($service->status_pembayaran == 1)
                                        <div class="shopping-button">
                                            <a href="{{ url('history/service/invoice/'.$service->id_service.'/generate') }}" target="_blank">Invoice</a>
                                        </div>
                                        @else
                                        <div class="shopping-button">
                                            <button id="pay-button{{ $index+1 }}">Pay</button>
                                        </div>
                                        @endif

                                        <script type="text/javascript">
                                            // For example trigger on button clicked, or any time you need
                                            var payButton = document.getElementById('pay-button{{ $index+1 }}');
                                            payButton.addEventListener('click', function () {
                                                // Trigger snap popup
                                                window.snap.embed('{{ $service->snap_token }}', {
                                                    embedId: 'snap-container',
                                                    onSuccess: function (result) {
                                                        // Send AJAX request to update transaction status
                                                        fetch('http://127.0.0.1:8000/updateService', {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json',
                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                            },
                                                            body: JSON.stringify({
                                                                id_service: '{{ $service->id_service }}'
                                                            })
                                                        })
                                                        .catch(error => console.error('Error:', error));
                                                        window.location.href = "http://127.0.0.1:8000/historyServices";
                                                    }
                                                });
                                            });
                                            </script>
                                     </td>
                                </tr>
                            @endif
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

 <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
 <style>
    #snap-container {
      position: fixed; /* Stay fixed on the screen */
      top: 50%; /* Center vertically */
      left: 50%; /* Center horizontally */
      transform: translate(-50%, -50%); /* Adjust to center perfectly */
      background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
      color: white; /* Optional: white text color */
      z-index: 1000; /* Ensure it stays on top */
    }
  </style>

@endsection