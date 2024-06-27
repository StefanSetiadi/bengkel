<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Sparepart;
use App\Models\Keranjang;

class ShopController extends Controller
{
    public function shopView(Request $request)
    {   
        // carts
        $carts = Keranjang::all();
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        $subtotal = $carts->sum('harga');

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
        
        return view('shop.shop', compact('spareparts', 'carts', 'subtotal'));
    }

    public function shopDetailsView($id_sparepart)
    {
        $sparepart = Sparepart::where('id_sparepart', $id_sparepart)->first();
        return view('shop.shop-details', compact('sparepart'));
    }

    public function addCart(Request $request)
    {
        if(isset($request->jumlah)) {
            $jumlah = $request->jumlah;
        } else{
            $jumlah = 1;
        }
        $data = Keranjang::create([
            'id_customer' => 1,
            'id_sparepart' => $request->id_sparepart,
            'jumlah' => $jumlah,
        ]);

        return redirect()->back()->with('success', 'Spare parts have been successfully added to cart');
        // return redirect()->route('spareparts')->with('success', 'The sparepart data has been successfully added.');
    }

}
