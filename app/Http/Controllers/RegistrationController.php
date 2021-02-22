<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        //return view('registration.index');
        $user = User:: orderBy('id','desc')->get();
    	return view('pages.registration.index',compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
    		'first_name'=>'required|string|max:30',
            'last_name'=>'required|string|max:30',
            'org_name'=>'required|string|max:30',
            'street'=>'required|string|max:30',
    		'city'=>'required|string|max:30',
            'email'=>'required|email',
            'phone_no'=>'required|numeric|min:11',
    		'password'=>'required|confirmed',
    		]);
    	$registration= new User([
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'org_name'=>$request->get('org_name'),
            'street'=>$request->get('street'),
            'city'=>$request->get('city'),
            'email'=>$request->get('email'),
            'phone_no'=>$request->get('phone_no'),
            'password'=>$request->get('password'),
            //'password' => Hash::make($request->Password),
    	]);
    	$registration->save();
        Auth::login($registration);
        return redirect()->route('login');
    	
    }
}
