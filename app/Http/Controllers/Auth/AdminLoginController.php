<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('Logout');
    }

    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->back();
    }
    

    public function Login(Request $request){
      
            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);
        if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=>$request->password])){
            return redirect()->intended(route('dashboard'));
        }
        flash('Wrong Username or password')->error();
        return redirect()->back();
    }

}
