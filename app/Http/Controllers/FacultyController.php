<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ffeedback;
use App\Question;
use App\Faculty;

class FacultyController extends Controller
{
    public function __construct(){
        $this->middleware('auth:faculty');
    }
    
    public function aboutcollege(){
        $q = Question::where('type','faculty')->get();
        return view("faculty.aboutcollegeform",compact('q'));
    }

    public function Submit(Request $request){    
        $s = Ffeedback::create($request->all());
        $s->save();
        flash('Success Submitted')->success();
        return redirect('/')->with('success','Successfully Submited.');
    }
    
  
}
