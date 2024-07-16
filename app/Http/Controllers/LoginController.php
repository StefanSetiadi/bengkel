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
            return view('landingpage.index');
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

    public function loginAdmin()
    {
        if (Auth::guard('admin')->check()) {
            return view('dashboard.index');
        } else{
            return view('dashboard.login-admin');
        }
    }

    public function actionloginAdmin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('dashboard.index');
        }else{
            return redirect()->back()->with("message", "failed");
        }
    }

    public function actionlogoutAdmin()
    {
        Auth::guard('admin')->logout();
        return view('dashboard.login-admin');
    }
}