<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.login.index');
    }
    public function store(Request $request)
    {
        $credentials = $request->only('phone_no', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->route('license.index');
        }

        return back()->withErrors(
            'The phone number or password is incorrect, please try again.',
        );
    }

    public function destroy()
    {
        Auth::logout();
    	//auth()->logout();
        return redirect()->route('license')->with('message','you are login now.');
    	//return redirect('/login')->with('Success','You are Logout');
    }
}
