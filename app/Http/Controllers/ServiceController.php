<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function serviceView(Request $request)
    {   
        if ($request->has('search')) {
            $services = Services::where('nama', 'LIKE', '%' . $request->search . '%');
        } else {
            $services = Services::query();
        }
        if ($request->has('sort')) {
            $sort = $request->sort;
            switch ($sort) {
                case 'nameASC':
                    $services->orderBy('nama', 'asc');
                    break;
                case 'nameDESC':
                    $services->orderBy('nama', 'desc');
                    break;
            }
        }
        if ($request->has('paginate')) {
            $paginate = $request->paginate;
            $services = $services->paginate($paginate);
        } else {
            $services = $services->paginate(8);        
        }
        $services->appends([
            'search' => $request->search,
            'sort' => $request->sort,
            'paginate' => $request->paginate
        ]);
        
        return view('service.service', ['services' => $services]);
    }

    public function serviceDetailsView($id_service)
    {
        $service = service::where('id_service', $id_service)->first();
        return view('service.service-details', compact('service'));
    }

}
