<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Employee;

class EmployeeController extends Controller
{
    public function Aboutcollege(){
        $q = Question::where('type','employer')->get();
        return view('employee.aboutcollegeform',compact('q'));
    }

    public function Submit(Request $request){
        $s = Employee::create($request->all());
        $s->save();
       return redirect('/')->with('success','Successfully Submited.');
    }
}
