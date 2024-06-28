<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        // dd(Auth::guard('customers')->check());
        if (Auth::check()) {
            return view('dashboard.checkout');
        } else{
            return view('dashboard.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
        // dd(Auth::guard('customers')->check());
            return redirect('/');
        }else{
            return redirect()->back()->with("message", "failed");
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}