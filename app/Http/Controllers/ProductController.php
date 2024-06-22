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

    public function productsView(Request $request)
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
            $products = $products->paginate(10);        
        }
        $products->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
        
        return view('dashboard.products', ['products' => $products]);
    }

    public function editView($id_product)
    {
        $product = Product::where('id_product', $id_product)->first();
        return view('dashboard.edit-product', compact('product'));
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

        return redirect()->route('products')->with('success', 'The product data has been successfully added.');
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

        return redirect()->route('products')->with('success', 'The product data has been successfully edited.');
    }

}
