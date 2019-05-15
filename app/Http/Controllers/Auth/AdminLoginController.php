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

    public function Logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->flush();
      //  Auth::session()->invalidate();
        return redirect('/');
    }
    

    public function Login(Request $request){
      //  Auth::guard()->logout();
       // Auth::guard('faculty')->logout();
     //   Auth::session()->invalidate();
            $this->validate($request,[
                'id' => 'required',
                'password' => 'required|min:6'
            ]);
        if(Auth::guard('admin')->attempt(['id'=> $request->id,'password'=>$request->password])){
            return redirect()->route('dashboard');
        }
        flash('Wrong Username or password')->error();
        return redirect()->back();
    }

}
