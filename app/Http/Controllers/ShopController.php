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
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        

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
        
        return view('shop.shop', compact('spareparts', 'carts', 'total'));
    }

    public function shopDetailsView($id_sparepart)
    {
        // carts
        $carts = Keranjang::all();
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $id_spareparts = Keranjang::where('id_customer', 1)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();

        $sparepart = Sparepart::where('id_sparepart', $id_sparepart)->first();
        return view('shop.shop-details', compact('sparepart', 'carts', 'total'));
    }

    public function addCart(Request $request)
    {
        $data = Keranjang::where('id_customer', $request->id_customer)
                      ->where('id_sparepart', $request->id_sparepart)
                      ->first();
        if ($data) {
            $data->jumlah += $request->jumlah;
            $data->save();
        } else {
            $data = Keranjang::create([
                'id_customer' => $request->id_customer,
                'id_sparepart' => $request->id_sparepart,
                'jumlah' => $request->jumlah,
            ]);
        }
        return redirect()->back();
    }

    public function viewCart($id_customer)
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
        

        return view('shop.cart', compact('carts','total'));
    }

    public function removeCart(Request $request)
    {
        $deletedRows = Keranjang::where('id_customer', $request->id_customer)
                                ->where('id_sparepart', $request->id_sparepart)
                                ->delete();
        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        $deletedRows = Keranjang::where('id_customer', $request->id_customer)
                                ->where('id_sparepart', $request->id_sparepart)
                                ->delete();
        return redirect()->back();
    }
}
