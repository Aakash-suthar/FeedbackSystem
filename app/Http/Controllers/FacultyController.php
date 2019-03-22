<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faculty\Fcollage;
use App\Question;

class FacultyController extends Controller
{
    public function aboutcollage(){
        $q = Question::where('type','collage')->get();
        return view("faculty.aboutcollageform",compact('q'));
    }

    public function submit(Request $request){    
        $s = Fcollage::create($request->all());
        $s->save();
        flash('Success Submitted')->success();
        return redirect('/')->with('success','Successfully Submited.');
    }
    
  
}
