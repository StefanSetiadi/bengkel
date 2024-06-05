<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function shopView()
    {
        $products = Product::all();
        return view('shop.shop', ['products' => $products]);
    }

    public function shopDetailsView($id_product)
    {
        $product = Product::where('id_product', $id_product)->first();
        return view('shop.shop-details', compact('product'));
    }

}
