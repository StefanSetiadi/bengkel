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
    public function bookingView()
    {
        $id_customer = Auth::user()->id_customer;
        $bookings = Booking::where('id_customer', $id_customer)->get();
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
            return view('landingpage.booking', compact('carts','total', 'bookings'));
        } else {
            return view('landingpage.booking');
        }        
    }

    public function historyBooking()
    {
        $id_customer = Auth::user()->id_customer;
        $bookings = Booking::where('id_customer', $id_customer)->get();
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
            return view('landingpage.history.history-booking', compact('carts','total', 'bookings'));
        } else {
            return view('landingpage.history.history-booking', compact('bookings'));
        }        
    }

    public function addBooking(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Booking::create([
            'id_customer' => $id_customer,
            'id_admin' => 1,
            'no_kendaraan' => strtoupper($request->no_kendaraan),
            'deskripsi' => $request->deskripsi,
            'waktu' => $request->waktu,
            'status_booking' => 'waiting'
        ]);
        return redirect()->back();
    }

    public function removeBooking(Request $request)
    {
        $booking = Booking::find($request->id_booking);

        if ($booking) {
            $booking->delete();
            return redirect()->back()->with('message', 'Booking deleted succesfully');
        } else {
            return redirect()->back()->with('message', 'Booking not found');
        }
    }

    public function acceptBooking(Request $request)
    {
        $data = Booking::where('id_booking', $request->id_booking)->first();
        $data->status_booking = 'accepted';
        $data->save();
        return redirect()->back();
    }

    public function rejectBooking(Request $request)
    {
        $data = Booking::where('id_booking', $request->id_booking)->first();
        $data->status_booking = 'rejected';
        $data->save();
        return redirect()->back();
    }

    public function bookingDashboardView()
    {
        $bookings = Booking::all();
        return view('dashboard.bookings', compact('bookings'));
    }

    
}
