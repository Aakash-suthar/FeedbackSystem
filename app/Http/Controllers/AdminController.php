<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Admin;
use App\Subject;
use App\Course;
use App\Teacher;
use App\Question;
use App\Feedback;
use Session;
use View;

class AdminController extends Controller
{
    public $Response   = array(
        'success' => 'Succesfully Added!!',
    );

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function dashboard(){

        $courses = Course::all();
        return view('admin',compact('courses'));
    }
    
    public function Getdata(Request $request)
    {
        if($request->ajax()){
            $this->validate($request,[
            'course_id'=>'required|exists:courses,id',
            ]);
        
             $s = Feedback::where('course_id',$request->input('course_id'))->get();
            // $s->save();
            return response($s);
        }
    }
    public function addcourse(Request $request)
    {
        if($request->ajax()){
            $this->validate($request,[
            'id'=>'required|unique:courses,id',
            'name'=>'required',
            ]);
        
            $s = Course::create($request->all());
            $s->save();
            return response($this->Response);
        }
    }


    public function addteacher(Request $request)
    {
        if($request->ajax()){
               $this->validate($request,[
            'id'=>'required|unique:teachers,id',
            'name'=>'required',
        ]);
        
        $s = Teacher::create($request->all());
        $s->save();
        return response($this->Response);
        }
    }

    public function addsubject(Request $request)
    {
        if($request->ajax()){
        $this->validate($request,[
            'id'=>'required|unique:subjects,id',
            'name'=>'required',
            'sem'=>'required',
            'course_id'=>'required|exists:courses,id',
            'teacher_id'=>'required|exists:teachers,id',

        ]);
        
        $s = Subject::create($request->all());
        $s->save();
        return response($this->Response);
        }
    }
    public function addquestion(Request $request)
    {
        if($request->ajax()){
            $this->validate($request,[
                'question'=>'required',
                'type'=>'required',

            ]);
            $type = $request->input('type');
            $s = Question::where('type',$type)->get();
            if($type=="collage"){
                if(($s->count())>=7){
                    return response()->json(['error'=>'Question is full for collage'], 422);     
                }
                else{
                    $s = Question::create($request->all());
                    $s->save();
                    return response($this->Response);
                }
            }
            else if($type=="teacher"){
                if(($s->count())>=10){
                    return response()->json(['error'=>'Question is full for teacher'], 422);     
                }
                else{
                    $s = Question::create($request->all());
                    $s->save();
                    return response($this->Response);
                }
            }   
            else{
                if(($s->count())>=4){
                    return response()->json(['error'=>'Question is full for curriculum'], 422);     
                }
                else{
                    $s = Question::create($request->all());
                    $s->save();
                    return response($this->Response);
                }
            }      
        }
    }
}
