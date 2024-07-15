@extends('landingpage.component.main')

@section('title', 'History Transaction')

@section('content')
<!-- page title area start -->
<div class="page-title-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- page title start -->
                <div class="page-title">
                    <h2>history transaction</h2>
                </div>
                <!-- page title end -->
                <!-- page title menu start -->
                <div class="page-title-menu">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a> <span> / </span> </li>
                        <li><a href="{{ route('historyTransaction') }}">History Transaction</a></li>
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
                                <th class="item-img">Total</th>
                                <!-- product img title -->
                                <th class="item-img">Payment status</th>
                                <!-- product name title -->
                                <th class="product-name">Date</th>
                                <!-- remove button -->
                                <th class="remove-icon text-center">Action</th>
                                <th class="item-img">Invoice</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if ($transactions->isEmpty())
							    <td align="center" colspan="7">You haven't made a transaction yet</td>
                            @else
							@foreach ($transactions as $index => $transaction)
                                <tr>
                                    <td class="cart-product-name text-left" width=100>
                                        <a>{{ $index+1 }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=200>
                                        <a>Rp. {{ number_format($transaction->total_biaya, 0, ',', '.') }}</a>
                                    </td>
                                    <td class="cart-product-name text-left" width=150>
                                        @if($transaction->status_pembayaran == "1")
                                            <a>Paid</a>
                                        @else
                                            <a>Unpaid</a>
                                        @endif
                                    </td>
                                    <td class="cart-product-name text-left" width=300>
                                        <a>{{ $transaction->created_at }}</a>
                                    </td>
                                    <!-- remove icon start -->
                                    <td class="remove-icon">
                                        <form action="{{ route('detailHistoryTransaction') }}" method="post" style="display:inline-block;">
                                            @csrf
                                            <input name="id_transaksi" value="{{ $transaction->id_transaksi }}" hidden>
                                            <button type="submit">
                                            <svg fill="#000000" width="25px" height="25px" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M830 850H170q-8 0-14-6t-6-14V170q0-8 6-14t14-6h660q8 0 14 6t6 14v660q0 8-6 14t-14 6zM70 90v820q0 8 6 14t14 6h820q8 0 14-6t6-14V90q0-8-6-14t-14-6H90q-8 0-14 6t-6 14zm200 160h61q8 0 13.5 6t5.5 14v61q0 8-5.5 13.5T331 350h-61q-8 0-14-5.5t-6-13.5v-61q0-8 6-14t14-6zm200 0h260q8 0 14 6t6 14v61q0 8-6 13.5t-14 5.5H470q-9 0-14.5-5.5T450 331v-61q0-8 5.5-14t14.5-6zM270 450h61q8 0 13.5 5.5T350 470v60q0 9-5.5 14.5T331 550h-61q-8 0-14-5.5t-6-14.5v-60q0-9 6-14.5t14-5.5zm200 0h260q8 0 14 5.5t6 14.5v60q0 9-6 14.5t-14 5.5H470q-9 0-14.5-5.5T450 530v-60q0-9 5.5-14.5T470 450zM270 650h61q8 0 13.5 5.5T350 669v61q0 8-5.5 14t-13.5 6h-61q-8 0-14-6t-6-14v-61q0-8 6-13.5t14-5.5zm200 0h260q8 0 14 5.5t6 13.5v61q0 8-6 14t-14 6H470q-9 0-14.5-6t-5.5-14v-61q0-8 5.5-13.5T470 650z"/></svg>
                                            </button>
                                        </form>
                                        <form action="{{ route('removeTransaction') }}" method="post" style="display:inline-block;">
                                            @csrf 
                                            <input name="id_transaksi" value="{{ $transaction->id_transaksi }}" hidden>
                                            @if($transaction->status_pembayaran == '1')
                                            <button type="submit" disabled> <i class="icofont icofont-close-line"></i> </button>
                                            @else
                                            <button type="submit"> <i class="icofont icofont-close-line"></i> </button>
                                            @endif
                                        </form>
                                    </td>
                                    <!-- remove icon end -->
                                     <td>
                                        @if ($transaction->status_pembayaran == 1)
                                        <div class="shopping-button">
                                            <a href="{{ url('history/transaction/invoice/'.$transaction->id_transaksi.'/generate') }}" target="_blank">Download Invoice</a>
                                        </div>
                                        @else
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