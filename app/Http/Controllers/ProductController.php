<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function createView()
    {
        return view('product.create');
    }

    public function productView()
    {
        return view('product.index');
    }

    public function addProduct(Request $request)
    {
        dd($request);
        // return view('product.index');
    }

}
