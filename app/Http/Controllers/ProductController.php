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

    public function editView($id_product)
    {
        $product = Product::where('id_product', $id_product)->first();
        return view('product.edit', compact('product'));
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
            $data->image = 'img/product/' . $file->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('product')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function editDataProduct(Request $request)
    {
        $data = Product::find($request->id_product);

        if ($data) {
            $data->name = $request->name;
            $data->quantity = $request->quantity;
            $data->price = $request->price;
            $data->description = $request->description;
            $data->save();
        }


        if ($request->hasFile('productPhoto')) {
            $file = $request->file('productPhoto');
            $file->move('img/product/', $file->getClientOriginalName());
            $data->image = 'img/product/' . $file->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('product')->with('success', 'Data Berhasil Di Tambahkan');
    }

}
