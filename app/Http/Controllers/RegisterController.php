<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customers;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('dashboard.signup');
    }
    
    public function actionregister(Request $request)
    {
        $existingUser = Customers::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->back()->with('message', 'failed');
        } else{
            $user = Customers::create([
                'nama' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message', 'success');
        }

        // Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
    }
}