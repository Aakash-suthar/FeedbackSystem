<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class WelcomeController extends Controller
{
    public function index(){
        return view("pages.welcome");
    }

    //students forms
    public function Saboutcollage(){
        $s = Question::where('type','collage')->get();
        // $data = arrray(
        //     'question'=> $s
        // );
        return view("students.aboutcollageform")->with('questions',$s);
        // $s = Question::all();
        // echo $s;
    } 

    //facultys forms 
    public function Faboutcollage(){
        return view("facultys.aboutcollageform");
    }



    public function Aaboutcollage(){
        return  view('alumini.aboutcollageform');
    }

}
