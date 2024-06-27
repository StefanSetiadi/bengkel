<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Sparepart;

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
        
        return view('shop.shop', ['spareparts' => $spareparts]);
    }

    public function shopDetailsView($id_sparepart)
    {
        $sparepart = Sparepart::where('id_sparepart', $id_sparepart)->first();
        return view('shop.shop-details', compact('sparepart'));
    }

}
