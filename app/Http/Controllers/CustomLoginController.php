<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CustomLoginController extends Controller
{
    //
    function login(Request $request)
    {
        $this->validateLogin($request->all());
        $guards = ['doctor', 'web'];
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('dashboard.index');
            }
        }
        return redirect()->back();
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    function LoginView()
    {
        return view('front.pages.auth.login');
    }
    function validateLogin($data)
    {
        Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|min:5|max:20'
        ])->validate();
    }
}
