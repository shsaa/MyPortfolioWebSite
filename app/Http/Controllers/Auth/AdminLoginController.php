<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function ShowLoginForm()
    {
        return view('auth.AdminLogin');
    }

    public function Login(Request $request)
    {
        // validate data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to log user
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if success, redirect
            return redirect()->intended(route('Admin.Dashboard')); //or use raw route '/admin'
        } else {
            //if nor success, redirect to login with the form data
            return redirect()->back()->withInput($request->only('email','remember'));
        }
    }
}
