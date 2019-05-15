<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class FacultyLoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:faculty')->except('Logout');
    }

    public function Logout(Request $request){
        Auth::guard('faculty')->logout();
        $request->session()->flush();
        return redirect('/');
    }
    

    public function Login(Request $request){
       // Auth::guard()->logout();
      //  Auth::guard('admin')->logout();
            $this->validate($request,[
                'id' => 'required',
                'password' => 'required|min:6'
            ]);
        if(Auth::guard('faculty')->attempt(['id'=> $request->id,'password'=>$request->password])){
            return redirect()->route('faculty.aboutcollege');
        }
        flash('Wrong Username or password')->error();
        return redirect()->back();
    }

}
