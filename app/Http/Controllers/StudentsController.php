<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students\Scollage;
use App\students\Scurriculum;
use App\Question;
use App\Subject;
use App\Course;

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
        // $cquestions = Question::where('type','currriculum')->get();
        // $tquestions = Question::where('type','teacher')->get();
        // // $course_id = 'B01';
        // $sem = '6';
        // $subjects = Subject::where('course_id','B01')->where('sem','6')->get();
         $studentid = 'TDIT01';
        // $course = Course::find('B01');
        // $data = array(
        //     'studentid'=>'TDIT01',
        //     'course' => 'Bsc-IT',
        //     'sem' => '6',
        //     'subjects' => ['bis','gis','tis','tc','pc'],
        // );
        return redirect('/students/teacherandcurriculum/'.$studentid);
        // ,compact('cquestions','subjects','tquestions','sem','course','studentid')
        // return view('tp',compact('cquestions','subjects','tquestions','sem','course'));

        // return redirect()->route('students.teacherandcurriculumform')->with(['cquestions'=>$cquestions])->with(['sem'=>$sem])->with(['subjects'=>$subjects])->with(['studentid'=>$studentid])->with(['course'=>$course])->with(['tquestions'=>$tquestions]);
                                                                        
    }

    public function teachercurriculum($id){
        
        $cquestions = Question::where('type','currriculum')->get();
        $tquestions = Question::where('type','teacher')->get();
        // $course_id = 'B01';
        $sem = '6';
        $subjects = Subject::where('course_id','B01')->where('sem','6')->get();
        $studentid = $id;
        $course = Course::find('B01');
        return view('students.teacherandcurriculumform',compact('cquestions','subjects','tquestions','sem','course','studentid'));
    }


    public function tcsubmit(Request $request){
        $this->validate($request,[
            "studentid"=>'required|exists:users,id',
            "subject"=>'required|exists:subjects,id',
            'sem'=>'required',
            'course_id'=>'required|exists:courses,id',
            'teacher_id'=>'required|exists:teachers,id',
        ]);
        echo $request->all();
    }

}
