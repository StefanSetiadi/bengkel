<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Sparepart;
use Illuminate\Support\Str;

class SparepartController extends Controller
{
    public function sparepartsView(Request $request)
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
            $spareparts = $spareparts->paginate(10);        
        }
        $spareparts->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);

        return view('dashboard.spareparts', ['spareparts' => $spareparts]);
    }

    public function editView($id_sparepart)
    {
        $sparepart = Sparepart::where('id_sparepart', $id_sparepart)->first();
        return view('dashboard.edit-sparepart', compact('sparepart'));
    }

    public function addsparepart(Request $request)
    {
        $data = Sparepart::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($request->hasFile('productPhoto')) {
            $file = $request->file('productPhoto');
            $random_filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move('img/sparepart/', $random_filename);
            $data->image = 'img/sparepart/' . $random_filename;
            $data->save();
        }

        return redirect()->route('spareparts')->with('success', 'The sparepart data has been successfully added.');
    }

    public function editDataSparepart(Request $request)
    {
        $data = Sparepart::find($request->id_sparepart);
        if ($data) {
            $data->nama = $request->nama;
            $data->harga = $request->harga;
            $data->jumlah = $request->jumlah;
            $data->deskripsi = $request->deskripsi;
            $data->save();
        }

        if ($request->hasFile('productPhoto')) {
            $file = $request->file('productPhoto');
            $random_filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move('img/sparepart/', $random_filename);
            $data->image = 'img/sparepart/' . $random_filename;
            $data->save();
        } 

        return redirect()->route('spareparts')->with('success', 'The sparepart data has been successfully edited.');
    }

    public function deleteDataSparepart(Request $request)
    {
        $data = Sparepart::find($request->id_sparepart);
        if ($data) {
            $data->jumlah = 0;
            $data->save();
        }

        return redirect()->route('spareparts')->with('success', 'The sparepart data has been successfully deleted.');
    }

}
