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
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function addProduct(Request $request)
    {
        $data = Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'description' => $request->description
        ]);

        if ($request->hasFile('productPhoto')) {
            $file = $request->file('productPhoto');
            $file->move('img/product/', $file->getClientOriginalName());
            $data->image = $file->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('createProduct')->with('success', 'Data Berhasil Di Tambahkan');
    }

}
