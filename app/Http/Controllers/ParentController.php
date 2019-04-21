<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parent\Pcollage;
use App\Question;

class ParentController extends Controller
{
    public function aboutcollege(){
        $q = Question::where('type','college')->get();
        return view("parent.aboutcollegeform",compact('q'));
    }

    public function submit(Request $request){    
        $s = Pcollage::create($request->all());
        $s->save();
        flash('Success Submitted')->success();
        return redirect('/')->with('success','Successfully Submited.');
    }
    
    public function Local(){
        return view('management.local');
    }
  
}
