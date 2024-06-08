<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

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
            $random_filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move('img/product/', $random_filename);
            $data->image = 'img/product/' . $random_filename;
            $data->save();
        }

        return redirect()->route('product')->with('success', 'The product data has been successfully added.');
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
            $random_filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move('img/product/', $random_filename);
            $data->image = 'img/product/' . $random_filename;
            $data->save();
        }

        return redirect()->route('product')->with('success', 'The product data has been successfully edited.');
    }

}
