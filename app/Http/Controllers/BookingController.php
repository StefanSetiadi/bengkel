<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    public function bookingView(Request $request)
    {
        if(Auth::check()){
            $id_customer = Auth::user()->id_customer;
            // carts
            $carts = Keranjang::all();
            $total = 0;
            foreach ($carts as $cart) {
                $sparepart = Sparepart::find($cart->id_sparepart);
                $total += $sparepart->harga * $cart->jumlah;
            }
            $id_spareparts = Keranjang::where('id_customer', $id_customer)->pluck('id_sparepart');
            $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
            return view('booking', compact('carts','total'));
        } else {
            return view('booking');
        }        
    }

    public function addBooking(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Booking::create([
            'id_customer' => 1,
            'id_admin' => $id_customer,
            'no_kendaraan' => strtoupper($request->no_kendaraan),
            'deskripsi' => $request->deskripsi,
            'waktu' => $request->waktu,
        ]);
        return view('booking');
    }

    public function bookingDashboardView()
    {
        $bookings = Booking::all();
        return view('dashboard.bookings', compact('bookings'));
    }

    
}
