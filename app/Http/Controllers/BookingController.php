<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;

class BookingController extends Controller
{
    public function bookingView()
    {
        // carts
        $carts = Keranjang::all();
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        $subtotal = $carts->sum('harga');

        return view('booking', compact('carts','subtotal'));
    }

    public function addBooking(Request $request)
    {
        $data = Booking::create([
            'id_customer' => 1,
            'id_admin' => 1,
            'no_kendaraan' => $request->no_kendaraan,
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
