<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function serviceView(Request $request)
    {   
        if ($request->has('search')) {
            $services = Services::where('nama', 'LIKE', '%' . $request->search . '%');
        } else {
            $services = Services::query();
        }
        if ($request->has('sort')) {
            $sort = $request->sort;
            switch ($sort) {
                case 'nameASC':
                    $services->orderBy('nama', 'asc');
                    break;
                case 'nameDESC':
                    $services->orderBy('nama', 'desc');
                    break;
            }
        }
        if ($request->has('paginate')) {
            $paginate = $request->paginate;
            $services = $services->paginate($paginate);
        } else {
            $services = $services->paginate(8);        
        }
        $services->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
        
        return view('service.service', ['services' => $services]);
    }

    public function serviceDetailsView($id_service)
    {
        $service = service::where('id_service', $id_service)->first();
        return view('service.service-details', compact('service'));
    }


    public function historyServices()
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
            return view('landingpage.history.history-services', compact('carts','total', 'bookings'));
        } else {
            return view('landingpage.history.history-services', compact('bookings'));
        }        
    }

    public function servicesDashboardView()
    {
        $services = Service::all();
        return view('dashboard.services', compact('services'));
    }

    public function createBill(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Service::create([
            'id_customer' => $id_customer,
            'id_admin' => 1,
            'no_kendaraan' => strtoupper($request->no_kendaraan),
            'biaya_jasa' => 0,
            'total_biaya' => 0,
            'status_pembayaran' => 0
        ]);

        $booking = Booking::where('id_booking', $request->id_booking);
        $booking->delete();

        return redirect()->back();
    }

    public function setServiceFee(Request $request){
        $service = Service::where('id_service', $request->id_service)->first();
        $service->biaya_jasa = $request->biaya_jasa;
        $service->save();
        
        return redirect()->back();
    }

    public function addSparepartService(Request $request)
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
            $spareparts = $spareparts->paginate(100);        
        }
        $spareparts->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
        $no_kendaraan = $request->no_kendaraan;
        
        return view('dashboard.add-spareparts-service', ['spareparts' => $spareparts, 'no_kendaraan' => $no_kendaraan]);
     }

}
