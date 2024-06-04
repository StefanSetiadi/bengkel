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

    public function shopDetailsView()
    {
        return view('shop.shop-details');
    }
}
