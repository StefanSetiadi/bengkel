<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Keranjang;
use App\Models\Sparepart;
use App\Models\Customers;
use App\Models\Service;
use App\Models\DetailService;
use Illuminate\Support\Facades\DB;
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
        $services = Service::where('id_customer', $id_customer)->get();
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
            return view('landingpage.history.history-services', compact('carts','total', 'services'));
        } else {
            return view('landingpage.history.history-services', compact('services'));
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
        $set = $request->biaya_jasa - $service->biaya_jasa;
        $service->biaya_jasa = $service->biaya_jasa + $set;
        $service->total_biaya = $service->total_biaya + $set;
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
        $id_service = $request->id_service;
        $detail_service = DetailService::where('id_service', $id_service)->get();
        
        return view('dashboard.add-spareparts-service', ['spareparts' => $spareparts,
                     'no_kendaraan' => $no_kendaraan, 'id_service' => $id_service, 'detail_service' => $detail_service]);
     }

     public function addDataService(Request $request){
        $sparepart = Sparepart::where('id_sparepart', $request->id_sparepart)->first();

        $dataDetailService = DetailService::where('id_service', $request->id_service)->where('id_sparepart', $request->id_sparepart)->first();
        if($dataDetailService){
            $subtotal = $sparepart->harga * ($dataDetailService->jumlah + 1);
            $dataDetailService->subtotal = $subtotal;
            $dataDetailService->jumlah = $dataDetailService->jumlah + 1;
            $dataDetailService->save();
        } else{
            $subtotal = $sparepart->harga * $request->jumlah;
            $dataDetailService = DetailService::create([
                'id_service' => $request->id_service,
                'id_sparepart' => $request->id_sparepart,
                'jumlah' => $request->jumlah,
                'subtotal' => $subtotal
            ]);
        }

        $service = Service::where('id_service', $dataDetailService->id_service)->first();
        $service->biaya_sparepart = $service->biaya_sparepart + $subtotal;
        $service->total_biaya = $service->biaya_sparepart + $service->biaya_jasa;
        $service->save();

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
        $id_service = $request->id_service;
        $detail_service = DetailService::where('id_service', $id_service)->get();
        
        return view('dashboard.add-spareparts-service', ['spareparts' => $spareparts,
                     'no_kendaraan' => $no_kendaraan, 'id_service' => $id_service, 'detail_service' => $detail_service]);
     }

     public function setQuantitySparepartService(Request $request){
        $detailService = DetailService::where('id_detail_service', $request->id_detail_service)
                                        ->where('id_sparepart',$request->id_sparepart)->first();
        $hargaSparepart = $detailService->subtotal / $detailService->jumlah;
        $selisih = ($hargaSparepart * $request->jumlah) - $detailService->subtotal;
        $detailService->subtotal = $detailService->subtotal + $selisih;
        $detailService->jumlah = $request->jumlah;
        $detailService->save();

        $service = Service::where('id_service', $detailService->id_service)->first();
        $service->biaya_sparepart = $service->biaya_sparepart + $selisih;
        $service->total_biaya = $service->biaya_sparepart + $service->biaya_jasa;
        $service->save();
        
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
        $id_service = $request->id_service;
        $detail_service = DetailService::where('id_service', $id_service)->get();
        
        return view('dashboard.add-spareparts-service', ['spareparts' => $spareparts,
                     'no_kendaraan' => $no_kendaraan, 'id_service' => $id_service, 'detail_service' => $detail_service]);
    }

    public function deleteSparepartService(Request $request){
        $detailService = DetailService::where('id_detail_service', $request->id_detail_service)->first();
        $detailService->delete();

        $service = Service::where('id_service', $detailService->id_service)->first();
        $service->biaya_sparepart = $service->biaya_sparepart - $detailService->subtotal;
        $service->save();
        
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
        $id_service = $request->id_service;
        $detail_service = DetailService::where('id_service', $id_service)->get();
        
        return view('dashboard.add-spareparts-service', ['spareparts' => $spareparts,
                     'no_kendaraan' => $no_kendaraan, 'id_service' => $id_service, 'detail_service' => $detail_service]);
    }

}
