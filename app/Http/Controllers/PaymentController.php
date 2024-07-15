<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Booking;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;
use App\Models\Transaksi;
use App\Models\Service;
use App\Models\DetailTransaksi;
use App\Models\DetailService;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;


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

    public function detailHistoryService(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $id_service = $request->id_service;
        $id_spareparts = DetailService::where('id_service', $request->id_service)->pluck('id_sparepart')->toArray();
        $hasil = DetailService::where('id_service', $request->id_service)->select('jumlah')->get();
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
            return view('landingpage.history.detail-history-service', compact('carts','total', 'spareparts','id_service'));
        } else {
            return view('landingpage.history.detail-history-service', compact('spareparts','id_service'));
        }        
    }

    public function dashboardTransaction()
    {
        $spareparts = Sparepart::select('sparepart.*', 'detail_transaksi.jumlah')
        ->join('detail_transaksi', 'sparepart.id_sparepart', '=', 'detail_transaksi.id_sparepart')
        ->join('transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id_transaksi')
        ->where('transaksi.status_pembayaran', '!=', 0)
        ->paginate(10);
    

        return view('dashboard.history-transaction', compact('spareparts'));      
    }


    public function generateInvoiceTransaction(int $idTransaction){
        $transaction = Transaksi::findOrFail($idTransaction);
        $todayDate = Carbon::now()->format('d-m-Y');

        $spareparts = DB::table('transaksi')
        ->join('detail_transaksi', 'transaksi.id_transaksi', '=', 'detail_transaksi.id_transaksi')
        ->join('sparepart', 'detail_transaksi.id_sparepart', '=', 'sparepart.id_sparepart')
        ->where('transaksi.id_transaksi', $idTransaction)
        ->select('sparepart.*', 'detail_transaksi.jumlah', 'detail_transaksi.subtotal')
        ->get();
    

        $data = ['transaction' => $transaction, 'spareparts' => $spareparts];
        $pdf = Pdf::loadView('landingpage.invoice.transaction', $data);

        // Stream the PDF to the browser
        return $pdf->stream('invoice' . $transaction->id_transaksi . '-' . $todayDate . '.pdf');
    
    }

    public function generateInvoiceService(int $idService){
        $service = Service::findOrFail($idService);
        $todayDate = Carbon::now()->format('d-m-Y');

        $spareparts = DB::table('service')
        ->join('detail_service', 'service.id_service', '=', 'detail_service.id_service')
        ->join('sparepart', 'detail_service.id_sparepart', '=', 'sparepart.id_sparepart')
        ->where('service.id_service', $idService)
        ->select('sparepart.*', 'detail_service.jumlah', 'detail_service.subtotal')
        ->get();
        
        $biaya_jasa = Service::where('id_service', $idService)->value('biaya_jasa');

        $data = ['service' => $service, 'spareparts' => $spareparts, 'biaya_jasa' => $biaya_jasa];
        $pdf = Pdf::loadView('landingpage.invoice.service', $data);

        // Stream the PDF to the browser
        return $pdf->stream('invoice' . $service->id_transaksi . '-' . $todayDate . '.pdf');
    
    }






}
