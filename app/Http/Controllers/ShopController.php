<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function shopView(Request $request)
    {   
        if ($request->has('search')) {
            $products = Product::where('name', 'LIKE', '%' . $request->search . '%');
        } else {
            $products = Product::query();
        }
        if ($request->has('sort')) {
            $sort = $request->sort;
            switch ($sort) {
                case 'nameASC':
                    $products->orderBy('name', 'asc');
                    break;
                case 'nameDESC':
                    $products->orderBy('name', 'desc');
                    break;
                case 'priceASC':
                    $products->orderBy('price', 'asc');
                    break;
                case 'priceDESC':
                    $products->orderBy('price', 'desc');
                    break;
            }
        }
        if ($request->has('paginate')) {
            $paginate = $request->paginate;
            $products = $products->paginate($paginate);
        } else {
            $products = $products->paginate(4);        
        }
        $products->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
        
        return view('shop.shop', ['products' => $products]);
    }

    public function shopDetailsView($id_product)
    {
        $product = Product::where('id_product', $id_product)->first();
        return view('shop.shop-details', compact('product'));
    }

}
