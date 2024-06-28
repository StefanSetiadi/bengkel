<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;

class ViewController extends Controller
{
    public function indexView()
    {
        // carts
        $carts = Keranjang::all();
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        

        return view('index', compact('carts','total'));
    }

    public function aboutView()
    {
        // carts
        $carts = Keranjang::all();
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        

        return view('about-us', compact('carts','total'));
    }

}
