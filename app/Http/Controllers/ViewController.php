<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function indexView()
    {
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
            return view('landingpage.index', compact('carts','total'));

        } else {
            return view('landingpage.index');
        }
    }

    public function aboutView()
    {
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
            return view('landingpage.about-us', compact('carts','total'));
        } else {
            return view('landingpage.about-us');
        }
    }

}
