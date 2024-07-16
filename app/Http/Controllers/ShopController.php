<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Sparepart;
use App\Models\Keranjang;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Support\Facades\Auth;


class ShopController extends Controller
{
    public function shopView(Request $request)
    {   
        if ($request->has('search')) {
            $spareparts = Sparepart::where('nama', 'LIKE', '%' . $request->search . '%');
        } else {
            $spareparts = Sparepart::query();
        }
        if ($request->has('sort')) {
            $sort = $request->sort;
            switch ($sort) {
                case 'nameASC':
                    $spareparts->orderBy('nama', 'asc');
                    break;
                case 'nameDESC':
                    $spareparts->orderBy('nama', 'desc');
                    break;
                case 'priceASC':
                    $spareparts->orderBy('harga', 'asc');
                    break;
                case 'priceDESC':
                    $spareparts->orderBy('harga', 'desc');
                    break;
            }
        }
        if ($request->has('paginate')) {
            $paginate = $request->paginate;
            $spareparts = $spareparts->paginate($paginate);
        } else {
            $spareparts = $spareparts->paginate(8);        
        }
        $spareparts->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
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
            return view('landingpage.shop.shop', compact('spareparts', 'carts', 'total'));
        } else {
            return view('landingpage.shop.shop', compact('spareparts'));
        }
        
    }

    public function shopDetailsView($id_sparepart)
    {
        $spareparts = Sparepart::where('id_sparepart', $id_sparepart)->first();
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
            return view('landingpage.shop.shop-details', compact('spareparts', 'carts', 'total'));
        } else {
            return view('landingpage.shop.shop-details', compact('spareparts'));
        }
    }

    public function addCart(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Keranjang::where('id_customer', $id_customer)
                      ->where('id_sparepart', $request->id_sparepart)
                      ->first();
        $spareparts = Sparepart::where('id_sparepart', $request->id_sparepart)->first();
        $spareparts->jumlah = $spareparts->jumlah - $request->jumlah;
        $spareparts->save();

        if ($data) {
            $data->jumlah += $request->jumlah;
            $data->save();
        } else {
            $data = Keranjang::create([
                'id_customer' => $id_customer,
                'id_sparepart' => $request->id_sparepart,
                'jumlah' => $request->jumlah,
            ]);
        }
        return redirect()->back();
    }

    public function editCart(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Keranjang::where('id_customer', $id_customer)
                      ->where('id_sparepart', $request->id_sparepart)
                      ->first();
        $data->jumlah = $request->after_jumlah;
        $data->save();
        $spareparts = Sparepart::where('id_sparepart', $request->id_sparepart)->first();
        $jumlah = $request->after_jumlah - $request->before_jumlah;
        $spareparts->jumlah = $spareparts->jumlah - $jumlah;
        $spareparts->save();
        return redirect()->back();
    }

    public function viewCart()
    {
        $id_customer = Auth::user()->id_customer;
        $carts = Keranjang::where('id_customer', $id_customer)->get();
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $id_spareparts = Keranjang::where('id_customer', $id_customer)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        

        return view('landingpage.shop.cart', compact('carts','total'));
    }

    public function removeCart(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $deletedRows = Keranjang::where('id_customer', $id_customer)
                                ->where('id_sparepart', $request->id_sparepart)
                                ->delete();
        $spareparts = Sparepart::where('id_sparepart', $request->id_sparepart)->first();
        $spareparts->jumlah = $spareparts->jumlah + $request->jumlah;
        $spareparts->save();
        return redirect()->back();
    }

    public function actionCheckout()
    {   
        $id_customer = Auth::user()->id_customer;
        // carts
        $carts = Keranjang::where('id_customer', $id_customer)->get();
        if ($carts->isEmpty()) {
            return redirect()->back()->with('failed', 'No items in the cart.');
        } else {
            $total_biaya = 0;
            $transaksi = Transaksi::create([
                'id_customer' => $id_customer,
                'total_biaya' => $total_biaya,
                'status_pembayaran' => 0
            ]);
            foreach ($carts as $cart) {
                $sparepart = Sparepart::find($cart->id_sparepart);
                $subtotal = $cart->jumlah * $sparepart->harga;
                $total_biaya = $total_biaya + $subtotal;
                $detail_transaksi = DetailTransaksi::create([
                    'id_transaksi' => $transaksi->id_transaksi,
                    'id_sparepart' => $cart->id_sparepart,
                    'jumlah' => $cart->jumlah,
                    'subtotal' => $subtotal
                ]);
            }
            $transaksi->total_biaya = $total_biaya;

             // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = 'SB-Mid-server-r2cx2L-n8Lb1Comkha1NpZ5D';
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $total_biaya,
                ),
                'customer_details' => array(
                    'name' => Auth::user()->nama,
                    'email' => Auth::user()->email
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $transaksi->snap_token = $snapToken;
            $transaksi->save();

            $deletedRows = Keranjang::where('id_customer', $id_customer)->delete();
            return redirect()->back()->with('success', 'Your transaction has been successful, please make a payment');
        }
    }

    public function removeTransaction(Request $request)
    {
        $detail_transaksi = DetailTransaksi::where('id_transaksi',$request->id_transaksi)->get();
        $transaction = Transaksi::where('id_transaksi',$request->id_transaksi);

        if ($transaction) {
            foreach ($detail_transaksi as $detail) {
                $spareparts = Sparepart::where('id_sparepart', $detail->id_sparepart)->first();
                $spareparts->jumlah = $spareparts->jumlah + $detail->jumlah;
                $spareparts->save();
            }
            
            $detail_transaksi = DetailTransaksi::where('id_transaksi',$request->id_transaksi);
            $detail_transaksi->delete();
            $transaction->delete();
            return redirect()->back()->with('message', 'Transaction deleted succesfully');
        } else {
            return redirect()->back()->with('message', 'Transaction not found');
        }
    }
}
