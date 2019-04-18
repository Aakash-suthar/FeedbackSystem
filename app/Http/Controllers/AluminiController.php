<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumini;
use App\Question;
use App\Course;

class AluminiController extends Controller
{

    public function Aboutcollege(){
        $q = Question::where('type','alumini')->get();
        $courses = Course::all();
        return view("alumini.aboutcollegeform",compact('q','courses'));
    }

    public function Submit(Request $request){         
        $s = Alumini::create($request->all());
        $s->save();
        flash('Success Submitted')->success();
        return redirect('/')->with('success','Successfully Submited.');
    }
}
