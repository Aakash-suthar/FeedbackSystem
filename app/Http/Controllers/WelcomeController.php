<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view("pages.welcome");
    }

    //students forms
    public function Saboutcollage(){
        return view("students.aboutcollageform");
    }
    public function Saboutfacultys(){
        return view("students.aboutfacultysform");
    }

    public function Saboutcurriculum(){
        return view("students.aboutcurriculumform");
    }

    //facultys forms 
    public function Faboutcollage(){
        return view("facultys.aboutcollageform");
    }
    public function Faboutcurriculum(){
        return view("facultys.aboutcurriculumform");
    }

}
