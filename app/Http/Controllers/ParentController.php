<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parent\Pcollage;
use App\Question;

class ParentController extends Controller
{
    public function aboutcollage(){
        $q = Question::where('type','collage')->get();
        return view("parent.aboutcollageform",compact('q'));
    }

    public function submit(Request $request){    
        $s = Pcollage::create($request->all());
        $s->save();
        flash('Success Submitted')->success();
        return redirect('/')->with('success','Successfully Submited.');
    }
    
  
}
