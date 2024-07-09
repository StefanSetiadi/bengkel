<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Booking;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class PaymentController extends Controller
{
    public function historyTransaction()
    {
        $id_customer = Auth::user()->id_customer;
        $transactions = Transaksi::where('id_customer', $id_customer)->get();
        if(Auth::check()){
            $id_customer = Auth::user()->id_customer;
            // carts
            $carts = Keranjang::where('id_customer', $id_customer)->get();
            $total = 0;
            foreach ($carts as $cart) {
                $sparepart = Sparepart::find($cart->id_sparepart);
                $total += $sparepart->harga * $cart->jumlah;
            }
            $id_spareparts = Keranjang::where('id_customer', $id_customer)->pluck('id_sparepart');
            $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
            return view('landingpage.history.history-transaction', compact('carts','total', 'transactions'));
        } else {
            return view('landingpage.history.history-transaction', compact('transactions'));
        }        
    }

    public function detailHistoryTransaction(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $id_transaksi = $request->id_transaksi;
        $id_spareparts = DetailTransaksi::where('id_transaksi', $request->id_transaksi)->pluck('id_sparepart')->toArray();
        $hasil = DetailTransaksi::where('id_transaksi', $request->id_transaksi)->select('jumlah')->get();
        $spareparts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();

        if(Auth::check()){
            $id_customer = Auth::user()->id_customer;
            // carts
            $carts = Keranjang::where('id_customer', $id_customer)->get();
            $total = 0;
            foreach ($carts as $cart) {
                $sparepart = Sparepart::find($cart->id_sparepart);
                $total += $sparepart->harga * $cart->jumlah;
            }
            $id_spareparts = Keranjang::where('id_customer', $id_customer)->pluck('id_sparepart');
            $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
            return view('landingpage.history.detail-history-transaction', compact('carts','total', 'spareparts','id_transaksi'));
        } else {
            return view('landingpage.history.detail-history-transaction', compact('spareparts','id_transaksi'));
        }        
    }


    public function viewInvoice(int $idTransaction){
        $transaction = Transaksi::findOrFail($idTransaction);
        return view('landingpage.invoice.generate');
    }
    public function generateInvoice(int $idTransaction){
        $transaction = Transaksi::findOrFail($idTransaction);
        $data = ['transaction' => $transaction];
        $pdf = Pdf::loadView('landingpage.invoice.generate', $data);
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('invoice'.$transaction->id_transaksi.'-'.$todayDate.'.pdf');
    }





}
