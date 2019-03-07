<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AluminiController extends Controller
{
    public function Acollage(Request $request){    

        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'year'=>'required',
            'academicyear'=>'required',
            'course'=>'required',
            'email'=>'required|unique:aluminis,email',
            // 'suggestion' => 'required',
        ]);
        
         $s = new Scollage;
         $s->fname=$request->input('fname');
        $s->lname=$request->input('lname');
        $s->year=$request->input('year');
        $s->course=$request->input('course');
        $s->email=$request->input('email');
        $s->academicyear=$request->input('academicyear');
        $s->Q1=$request->input('Q1');
        $s->Q2=$request->input('Q2');
        $s->Q3=$request->input('Q3');
        $s->Q4=$request->input('Q4');
        $s->Q5=$request->input('Q5');
        $s->Q6=$request->input('Q6');
        $s->Q7=$request->input('Q7');
         $s->save();
         flash('Success Submitted')->success();
        //  session()->flash('success','dwadaw');
        // // return redirect('/')->with('success','Successfully Submited.');
        // return redirect('/');

        // Session::flash('success', "Special message goes here");
        return redirect('/');
    }
}
