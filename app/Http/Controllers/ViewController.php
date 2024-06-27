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
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        $subtotal = $carts->sum('harga');

        return view('index', compact('carts','subtotal'));
    }

    public function aboutView()
    {
        // carts
        $carts = Keranjang::all();
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        $subtotal = $carts->sum('harga');

        return view('about-us', compact('carts','subtotal'));
    }

}
