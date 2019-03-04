<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students\Scollage;
use App\students\Scurriculum;
use App\Question;
use Session;

class StudentsController extends Controller
{

    public function Scollage(Request $request){    

        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'year'=>'required',
            'academicyear'=>'required',
            'course'=>'required',
            'email'=>'required|unique:scollages,email',
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

    public function login(){
        return view('students.login');
    }

    public function logincheck(Request $request){

        $this->validate($request,[
            'id'=>'required',
            'password'=>'required',
            // 'suggestion' => 'required',
        ]);
        // through course and sem find all subjects
        $questions = Question::where('type','curriculum')->get();
        $data = array(
            'studentid'=>'TDIT01',
            'course' => 'Bsc-IT',
            'sem' => '6',
            'subjects' => ['bis','gis','tis','tc','pc'],
        );
        return view('students.teacherandcurriculumform',compact('data','questions'));
    }

}
