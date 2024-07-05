<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Sparepart;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;


class ShopController extends Controller
{
    public function shopView(Request $request)
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
            $spareparts = $spareparts->paginate(8);        
        }
        $spareparts->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
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
            return view('shop.shop', compact('spareparts', 'carts', 'total'));
        } else {
            return view('shop.shop', compact('spareparts'));
        }
        
    }

    public function shopDetailsView($id_sparepart)
    {
        $spareparts = Sparepart::where('id_sparepart', $id_sparepart)->first();
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
            return view('shop.shop-details', compact('spareparts', 'carts', 'total'));
        } else {
            return view('shop.shop-details', compact('spareparts'));
        }
    }

    public function addCart(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Keranjang::where('id_customer', $id_customer)
                      ->where('id_sparepart', $request->id_sparepart)
                      ->first();
        if ($data) {
            $data->jumlah += $request->jumlah;
            $data->save();
        } else {
            $data = Keranjang::create([
                'id_customer' => $id_customer,
                'id_sparepart' => $request->id_sparepart,
                'jumlah' => $request->jumlah,
            ]);
        }
        return redirect()->back();
    }

    public function editCart(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $data = Keranjang::where('id_customer', $id_customer)
                      ->where('id_sparepart', $request->id_sparepart)
                      ->first();
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->back();
    }

    public function viewCart()
    {
        $id_customer = Auth::user()->id_customer;
        $carts = Keranjang::where('id_customer', $id_customer)->get();
        $total = 0;
        foreach ($carts as $cart) {
            $sparepart = Sparepart::find($cart->id_sparepart);
            $total += $sparepart->harga * $cart->jumlah;
        }
        $id_spareparts = Keranjang::where('id_customer', $id_customer)->pluck('id_sparepart');
        $carts = Sparepart::whereIn('id_sparepart', $id_spareparts)->get();
        

        return view('shop.cart', compact('carts','total'));
    }

    public function removeCart(Request $request)
    {
        $id_customer = Auth::user()->id_customer;
        $deletedRows = Keranjang::where('id_customer', $id_customer)
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
