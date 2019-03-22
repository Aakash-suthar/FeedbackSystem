<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumini\ACollage;
use App\Question;

class AluminiController extends Controller
{

    public function aboutcollage(){
        $q = Question::where('type','collage')->get();
        return view("alumini.aboutcollageform",compact('q'));
    }

    public function submit(Request $request){         
        $s = Acollage::create($request->all());
        $s->save();
        flash('Success Submitted')->success();
        return redirect('/')->with('success','Successfully Submited.');
    }
}
