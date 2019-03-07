<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Admin;
use App\Subject;
use App\Course;
use App\Teacher;
use App\Question;

class AdminController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',        
        ]);
        $username=$request->input('username');
        $password=$request->input('password');
        $check = new Admin; 
        $check= Admin::find($username);
        if($check!=null){
            if(Hash::check($request->input('password'),$check->password))
                return view('admin.dashboard');
            else echo "wring password";
        }
        else { echo "Wrong Username";}

    }

    public function register(Request $request)
    {

        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'username'=>'required|unique:admins,username',
            'password'=>'required',
            'email'=>'required|unique:admins,email',
            // 'suggestion' => 'required',
        ]);
        
        $s = new Admin;
        $s->firstname=$request->input('firstname');
       $s->lastname=$request->input('lastname');
       $s->username=$request->input('username');
       $s->email=$request->input('email');
       $s->password=Hash::make($request->input('password'));
        $s->save();
        return view('welcome');
    }

    public function signup()
    {
        return view('register');
    }

    public function dashboard(){
        return view('admin.dashboard2');
    }
    
    public function teacher(){
        return view('admin.addteachers');
    }
    
    public function course(){
        return view('admin.addcourses');
    }

    public function subject(){
        return view('admin.addsubjects');
    }

    public function question(){
        return view('admin.addquestions');
    }
    
    public function addcourse(Request $request)
    {

        $this->validate($request,[
            'id'=>'required|unique:courses,id',
            'name'=>'required',
        ]);
        
        $s = new Course;
        $s->id=$request->input('id');
       $s->name=$request->input('name');
        $s->save();
        return view('admin.dashboard');
        }

    public function addteacher(Request $request)
    {

        $this->validate($request,[
            'id'=>'required|unique:teachers,id',
            'name'=>'required',
        ]);
        
        $s = new Teacher;
        $s->id=$request->input('id');
        $s->name=$request->input('name');
        $s->save();
        return view('admin.dashboard');
        }

        public function addsubject(Request $request)
        {
    
            $this->validate($request,[
                'id'=>'required|unique:subjects,id',
                'name'=>'required',
                'sem'=>'required',
                'course_id'=>'required|exists:courses,id',
                'teacher_id'=>'required|exists:teachers,id',

            ]);
            
            $s = new Subject;
            $s->id=$request->input('id');
            $s->name=$request->input('name');
            $s->sem=$request->input('sem');
            $s->course_id=$request->input('course_id');
            $s->teacher_id=$request->input('teacher_id');
            $s->save();
            return view('admin.dashboard');
            }
            public function addquestion(Request $request)
            {
        
                $this->validate($request,[
                    'question'=>'required',
                    'type'=>'required',
    
                ]);
                
                $s = new Question;
                $s->question=$request->input('question');
                $s->type=$request->input('type');
                $s->save();
                return view('admin.addquestions');
                }
}
