<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facultys\Fcollage;
use App\facultys\Fcurriculum;

class FacultysController extends Controller
{

    public function Fcollage(Request $request){    

        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'academicyear'=>'required',
            'email'=>'required',
        ]);
        
        $s = new Fcollage;
        $s->fname=$request->input('fname');
        $s->lname=$request->input('lname');
        $s->email=$request->input('email');
        $s->academicyear=$request->input('academicyear');
        $s->Q1=$request->input('Q1');
        $s->Q2=$request->input('Q2');
        $s->Q3=$request->input('Q3');
        $s->Q4=$request->input('Q4');
        $s->Q5=$request->input('Q5');
        $s->Q6=$request->input('Q6');
        $s->Q7=$request->input('Q7');
        $s->Q8=$request->input('Q8');
        $s->Q9=$request->input('Q9');
        $s->Q10=$request->input('Q10');
        $s->Q11=$request->input('Q11');
        $s->Q12=$request->input('Q12');
        $s->Q13=$request->input('Q13');
        $s->Q14=$request->input('Q14');
        $s->Q15=$request->input('Q15');
        $s->save();
        return redirect('/')->with('success','Successfully Submited.');
    }
    
    public function Fcurriculum(Request $request){    

        $this->validate($request,[
            'fname'=>'required',
            'lname'=>'required',
            'academicyear'=>'required',
            'course'=>'required',
            'email'=>'required',
        ]);
        
        $s = new Fcurriculum;
        $s->fname=$request->input('fname');
        $s->lname=$request->input('lname');
        $s->email=$request->input('email');
        $s->course=$request->input('course');
        $s->academicyear=$request->input('academicyear');
        $s->Q1=$request->input('Q1');
        $s->Q2=$request->input('Q2');
        $s->Q3=$request->input('Q3');
        $s->Q4=$request->input('Q4');
        $s->Q5=$request->input('Q5');
        $s->Q6=$request->input('Q6');
        $s->Q7=$request->input('Q7');
        $s->Q8=$request->input('Q8');
        $s->Q9=$request->input('Q9');
        $s->Q10=$request->input('Q10');
        $s->Q11=$request->input('Q11');
        $s->Q12=$request->input('Q12');
        $s->Q13=$request->input('Q13');
        $s->Q14=$request->input('Q14');
        $s->Q15=$request->input('Q15');
        $s->save();
        return redirect('/')->with('success','Successfully Submited.');
    }
  
}
