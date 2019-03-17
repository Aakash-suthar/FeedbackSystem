<?php

namespace App\Http\Controllers;

use AuthenticatesUsers;
use Illuminate\Http\Request;
use App\students\Scollage;
use App\students\Scurriculum;
use App\Question;
use App\Subject;
use App\Course;
use App\Feedback;
use App\Teacher;

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
    public function login(Request $request){

        $this->validate($request,[
            'id'=>'required|exists:users,id',
            'password'=>'required',
            // 'suggestion' => 'required',
        ]);
        // through course and sem find all subjects
        // $cquestions = Question::where('type','currriculum')->get();
        // $tquestions = Question::where('type','teacher')->get();
        // // $course_id = 'B01';
        // $sem = '6';
        // $subjects = Subject::where('course_id','B01')->where('sem','6')->get();
         $studentid = $request->input('id');
        // $course = Course::find('B01');
        // $data = array(
        //     'studentid'=>'TDIT01',
        //     'course' => 'Bsc-IT',
        //     'sem' => '6',
        //     'subjects' => ['bis','gis','tis','tc','pc'],
        // );
        return redirect('/students/teacherandcurriculum');
        // ,compact('cquestions','subjects','tquestions','sem','course','studentid')
        // return view('tp',compact('cquestions','subjects','tquestions','sem','course'));

        // return redirect()->route('students.teacherandcurriculumform')->with(['cquestions'=>$cquestions])->with(['sem'=>$sem])->with(['subjects'=>$subjects])->with(['studentid'=>$studentid])->with(['course'=>$course])->with(['tquestions'=>$tquestions]);
                                                                        
    }

    public function teachercurriculum(Request $request){
        
        $cquestions = Question::where('type','currriculum')->get();
        $tquestions = Question::where('type','teacher')->get();
        $course_id = 'B01';
        $sem = '6';
        $subjects = Subject::where('course_id','B01')->where('sem','6')->get();
        $student_id = '1';
         return view('students.teacherandcurriculumform',compact('cquestions','subjects','tquestions','sem','course_id','student_id'));
    }


    public function tcsubmit(Request $request){
        $this->validate($request,[
            "student_id"=>'required|exists:users,id|unique:feedbacks,student_id',
            'sem'=>'required',
            'course_id'=>'required|exists:courses,id',
            ]);
            // $course = Course::find($request->input('course_id'));
            $subjects = Subject::where('course_id',$request->input('course_id'))->where('sem',$request->input('sem'))->get();
            $i = 1;
            $q = 1;
            foreach($subjects as $subject){
            $feedback = new Feedback;
            $subject->id;
            $feedback->student_id = $request->input('student_id');
            $feedback->sem = $request->input('sem');
            $feedback->teacher_id = $subject->teacher_id;
            $feedback->course_id = $subject->course_id;
            $feedback->subject_id = $subject->id;
            $feedback->Q1 = $request->input("S$i$q");$q++;
            $feedback->Q2 = $request->input("S$i$q");$q++;
            $feedback->Q3 = $request->input("S$i$q");$q++;
            $feedback->Q4 = $request->input("S$i$q");$q++;
            $feedback->Q5 = $request->input("S$i$q");$q++;
            $feedback->Q6 = $request->input("S$i$q");$q++;
            $feedback->Q7 = $request->input("S$i$q");$q++;
            $feedback->Q8 = $request->input("S$i$q");$q++;
            $feedback->Q9 = $request->input("S$i$q");$q++;
            $feedback->Q10 = $request->input("S$i$q");$q++;
            $feedback->Q11 = $request->input("S$i$q");$q++;
            $feedback->Q12 = $request->input("S$i$q");$q++;
            $feedback->Q13 = $request->input("S$i$q");$q++;
            $feedback->Q14 = $request->input("S$i$q");$q++;
            $i++;$q = 1;
            $feedback->save();
            }
            flash('Success Submitted')->success();
             return redirect('/');
    }

}
