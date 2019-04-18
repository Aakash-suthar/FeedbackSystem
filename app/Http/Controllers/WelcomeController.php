<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Auth;

class WelcomeController extends Controller
{
    public function index(){
        // Auth::guard('admin')->logout();
        // Auth::guard('faculty')->logout();
        // Auth::guard()->logout();
        return view("index");
    }


 
}
