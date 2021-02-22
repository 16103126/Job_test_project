<?php

namespace App\Http\Controllers;

use App\Models\License;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class LicenseController extends Controller
{
    public function index()
    {
        $users=User::orderBy('id', 'asc')->get();
        $license=License::orderBy('id', 'asc')->get();
        return view('pages.license.index', compact('users'));
    }

    public function store(Request $request)
    {
        
        $this->validate($request,[
            'license_key'=>'required|alpha|max:16|min:12',
            'expire_date'=>'required',
            'user_id'=>'required',

        ],
        [
            'license_key.required'=>'Please provide a license key',
            
        ]);

        $license= new License([
            'license_key'=>$request->get('license_key'),
            'expire_date'=>$request->get('expire_date'),
            'user_id'=>$request->get('user_id'),
    	]);
        
    	$license->save();
        
        session()->flash('success', 'A license key added successfully!!');
        return redirect()->route('license.activate');
    }



    public function activate()
    {
          return view('pages.license.licenseactivation');
    }
   

 
  public function activestore(Request $request){
      $license= new License([
        'license_key'=>$request->get('license_key'),
        'id'=>$request->get('id'),
        'expire_date'=>$request->get('expire_date'),
      ]);
      if ($license->license_key == $license->license_key){
       // return redirect()->route('license.index');
       $today= Carbon::now();
       return redirect()->route('login')->with('message','Congratulation!! your license has been activate.');
        echo $today->addMonths(6);
      }
        
         
  }

}
