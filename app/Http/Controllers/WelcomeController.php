<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class WelcomeController extends Controller
{
    public function index(){
        return view("index");
    }

    //students forms
    public function Saboutcollage(){
        $q = Question::where('type','collage')->get();
        // $s = "/Scollage";
        // $data = arrray(
        //     'question'=> $s
        // );
        return view("students.aboutcollageform",compact('q'));
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
