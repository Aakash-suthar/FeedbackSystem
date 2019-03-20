<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Admin;
use App\Subject;
use App\Course;
use App\Teacher;
use App\Question;
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

    // public function register(Request $request)
    // {

    //     $this->validate($request,[
    //         'firstname'=>'required',
    //         'lastname'=>'required',
    //         'username'=>'required|unique:admins,username',
    //         'password'=>'required',
    //         'email'=>'required|unique:admins,email',
    //         // 'suggestion' => 'required',
    //     ]);
        
    //     $s = new Admin;
    //     $s->firstname=$request->input('firstname');
    //    $s->lastname=$request->input('lastname');
    //    $s->username=$request->input('username');
    //    $s->email=$request->input('email');
    //    $s->password=Hash::make($request->input('password'));
    //     $s->save();
    //     return view('welcome');
    // }

    public function dashboard(){
        return view('layouts.admin');
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
        
        $s = Question::create($request->all());
        $s->save();
        return response($this->Response);
        }
    }
}
