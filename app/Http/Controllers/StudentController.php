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
use App\User;
use App\Assign;

use Auth;
use Session;

class StudentController extends Controller
{
    public function submit(Request $request){    
        flash('Success Submitted')->success();
         $s = Scollage::create($request->all());
         $s->save();
         return redirect('/')->with('success','Successfully Submited.');
    }

    public function aboutcollege(){
        $q = Question::where('type','college')->get();
        return view("student.aboutcollegeform",compact('q'));
    } 

    
    public function teachercurriculum(){
        $user = User::find(Auth::user()->id);
        $cquestions = Question::where('type','curriculum')->get();
        $tquestions = Question::where('type','teacher')->get();
        $course_id =  $user->course_id;
        $sem = $user->sem;
        $div =  $user->div;
        $assign = Assign::where('course_id',$course_id)->where('sem',$sem)->where('div',$div)->get();
        return view('student.teacherandcurriculumform',compact('cquestions','assign','tquestions'));
    }


    public function tcsubmit(Request $request){
        $this->validate($request,[
            'student_id'=>'required|exists:users,id|unique:feedbacks,student_id',
            'sem'=>'required',
            'div'=>'required',
            'course_id'=>'required|exists:courses,id',
            ]);
            $assign = Assign::where('course_id',$request->input('course_id'))->where('sem',$request->input('sem'))->where('div',$request->input('div'))->get();
            $i = 1;
            $q = 1;
            foreach($assign as $sub){
            $feedback = new Feedback;
            $feedback->student_id = $request->input('student_id');
            $feedback->sem = $request->input('sem');
            $feedback->div = $request->input('div');
            $feedback->teacher_id = $sub->faculty_id;
            $feedback->course_id = $sub->course_id;
            $feedback->subject_id = $sub->subject_id;
            $feedback->year =  $request->input('year');
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
            $request->session()->flush();
            return redirect('/');
    }
}
