<?php

namespace App\Http\Controllers;

use AuthenticatesUsers;
use Illuminate\Http\Request;
use App\student\Scollage;
use App\Question;
use App\Subject;
use App\Course;
use App\Feedback;
use App\Teacher;
use Auth;
use Session;

class StudentController extends Controller
{
    public function submit(Request $request){    
        flash('Success Submitted')->success();
         $s = Scollage::create($request->all());
         $s->save();
        //  session()->flash('success','dwadaw');
        // // return redirect('/')->with('success','Successfully Submited.');
        // return redirect('/');

        //Session::flash('success', "Special message goes here");
        return redirect('/')->with('success','Successfully Submited.');
    }

    public function aboutcollage(){
        $q = Question::where('type','collage')->get();
        return view("student.aboutcollageform",compact('q'));
    } 
    public function teachercurriculum(Request $request){
        
        $cquestions = Question::where('type','currriculum')->get();
        $tquestions = Question::where('type','teacher')->get();
        $course_id = 'B01';
        $sem = '6';
        $subjects = Subject::where('course_id','B01')->where('sem','6')->get();
         return view('student.teacherandcurriculumform',compact('cquestions','subjects','tquestions','sem','course_id'));
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
            Auth::guard('web')->logout();
            return redirect('/');
    }

    // public function login(Request $request){

    //     $this->validate($request,[
    //         'id'=>'required|exists:users,id',
    //         'password'=>'required',
    //         // 'suggestion' => 'required',
    //     ]);
    //     // through course and sem find all subjects
    //     // $cquestions = Question::where('type','currriculum')->get();
    //     // $tquestions = Question::where('type','teacher')->get();
    //     // // $course_id = 'B01';
    //     // $sem = '6';
    //     // $subjects = Subject::where('course_id','B01')->where('sem','6')->get();
    //      $studentid = $request->input('id');
    //     // $course = Course::find('B01');
    //     // $data = array(
    //     //     'studentid'=>'TDIT01',
    //     //     'course' => 'Bsc-IT',
    //     //     'sem' => '6',
    //     //     'subjects' => ['bis','gis','tis','tc','pc'],
    //     // );
    //     return redirect('/students/teacherandcurriculum');
    //     // ,compact('cquestions','subjects','tquestions','sem','course','studentid')
    //     // return view('tp',compact('cquestions','subjects','tquestions','sem','course'));

    //     // return redirect()->route('students.teacherandcurriculumform')->with(['cquestions'=>$cquestions])->with(['sem'=>$sem])->with(['subjects'=>$subjects])->with(['studentid'=>$studentid])->with(['course'=>$course])->with(['tquestions'=>$tquestions]);
                                                                        
    // }

}
