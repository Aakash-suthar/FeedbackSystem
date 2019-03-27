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

    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function dashboard(){

        $courses = Course::all();
        return view('admin',compact('courses'));
    }
    
    public function addcourse(Request $request){
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

    public function addteacher(Request $request){
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

    public function addsubject(Request $request){
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
    public function addquestion(Request $request){
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

    public function Getdata(Request $request){
        if($request->ajax()){
            $this->validate($request,[
            'course_id'=>'required|exists:courses,id',
            'sem'=>'required',
            'teacher_id' =>'required|exists:subjects,teacher_id',
            ]);
            $course_id = $request->input('course_id');
            $sem = $request->input('sem');
            $teacher_id = $request->input('teacher_id');
            
            //$subjects = Subject::where('course_id',$course_id)->where('sem',$sem)->get();
            $Totatfeedback = Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->count();

            if($Totatfeedback>0){
                  //  $Totatfeedback = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('teacher_id',$subject->teacher_id)->count();
                   // $Q11 = (((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','1')->count())/$Totatfeedback)*100);
                    $Q11 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q12 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q13 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q14 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q15 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q21 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q2','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q22 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q2','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q23 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q2','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q24 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q2','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q25 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q2','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q31 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q3','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q32 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q3','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q33 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q3','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q34 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q3','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q35 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q3','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q41 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q4','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q42 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q4','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q43 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q4','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q44 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q4','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q45 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q4','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q51 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q5','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q52 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q5','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q53 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q5','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q54 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q5','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q55 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q5','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q61 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q6','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q62 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q6','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q63 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q6','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q64 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q6','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q65 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q6','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q71 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q7','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q72 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q7','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q73 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q7','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q74 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q7','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q75 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q7','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q81 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q8','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q82 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q8','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q83 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q8','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q84 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q8','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q85 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q8','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q91 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q9','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q92 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q9','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q93 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q9','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q94 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q9','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q95 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q9','5')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q101 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q10','1')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q102 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q10','2')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q103 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q10','3')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q104 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q10','4')->count())/$Totatfeedback)*100), 2, '.', '');
                    $Q105 = number_format((float)(((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q10','5')->count())/$Totatfeedback)*100), 2, '.', '');

                    // $Total1 = $Q11 + $Q21 +$Q31 + $Q41 + $Q51 + $Q61 +$Q71 + $Q81+$Q91 + $Q101;
                    // $Total2 = $Q12 + $Q22 +$Q32 + $Q42 + $Q52 + $Q62 +$Q72 + $Q82+$Q92 + $Q102;
                    // $Total3 = $Q13 + $Q23 +$Q33 + $Q43 + $Q53 + $Q63 +$Q73 + $Q83+$Q93 + $Q103;
                    // $Total4 = $Q14 + $Q24 +$Q34 + $Q44 + $Q54 + $Q64 +$Q74 + $Q84+$Q94 + $Q104;
                    // $Total5 = $Q15 + $Q25 +$Q35 + $Q45 + $Q55 + $Q65 +$Q75 + $Q85+$Q95 + $Q105;

                    //  $Total1 = $Q11 + $Q21 + $Q31 + $Q41 + $Q51 + $Q61 + $Q71 + $Q81 + $Q91 + $Q101;
                    //  $Total2 = $Q12 + $Q22 + $Q32 + $Q42 + $Q52 + $Q62 + $Q72 + $Q82 + $Q92 + $Q102;
                    //  $Total3 = $Q13 + $Q23 + $Q33 + $Q43 + $Q53 + $Q63 + $Q73 + $Q83 + $Q93 + $Q103;
                    //  $Total4 = $Q14 + $Q24 + $Q34 + $Q44 + $Q54 + $Q64 + $Q74 + $Q84 + $Q94 + $Q104;
                    //  $Total5 = $Q15 + $Q25 + $Q35 + $Q45 + $Q55 + $Q65 + $Q75 + $Q85 + $Q95 + $Q105;
                    //  10 questions
                    //  1 teacher 
                    // 22 rows = q1->22
                    // $Total2 = $Q12 + $Q22 + $Q32 + $Q42 + $Q52;
                    // $Total3 = $Q13 + $Q23 + $Q33 + $Q43 + $Q53;
                    // $Total4 = $Q14 + $Q24 + $Q34 + $Q44 + $Q54;
                    // $Total5 = $Q51 + $Q52 + $Q53 + $Q54 + $Q55;

                    // $Response = array(
                    //     ['Q11' => $Q11, 'Q12' => $Q12, 'Q13' => $Q13, 'Q14' => $Q14, 'Q15' => $Q15],
                    //     ['Q21' => $Q21, 'Q22' => $Q22, 'Q23' => $Q23, 'Q24' => $Q24, 'Q25' => $Q25],
                    //     ['Q31' => $Q31, 'Q32' => $Q32, 'Q33' => $Q33, 'Q34' => $Q34, 'Q35' => $Q35],
                    //     ['Q41' => $Q41, 'Q42' => $Q42, 'Q43' => $Q43, 'Q44' => $Q44, 'Q45' => $Q45],
                    //     ['Q51' => $Q51, 'Q52' => $Q52, 'Q53' => $Q53, 'Q54' => $Q54, 'Q55' => $Q55],
                    //     ['Q61' => $Q61, 'Q62' => $Q62, 'Q63' => $Q63, 'Q64' => $Q64, 'Q65' => $Q65],
                    //     ['Q71' => $Q71, 'Q72' => $Q72, 'Q73' => $Q73, 'Q74' => $Q74, 'Q75' => $Q75],
                    //     ['Q81' => $Q81, 'Q82' => $Q82, 'Q83' => $Q83, 'Q84' => $Q84, 'Q85' => $Q85],
                    //     ['Q91' => $Q91, 'Q92' => $Q92, 'Q93' => $Q93, 'Q94' => $Q94, 'Q95' => $Q95],
                    //     ['Q101' => $Q101, 'Q102' => $Q102, 'Q103' => $Q103, 'Q104' => $Q104, 'Q105' => $Q105]
                    // );

                    $Response = [
                        ['Question', 'Strongly Disagree', 'Disagree','Not Sure','Agree','Strongly Agree'],
                        ['1',(float)$Q11,(float)$Q12,(float)$Q13,(float)$Q14,(float)$Q15],
                        ['2',(float)$Q21,(float)$Q22,(float)$Q23,(float)$Q24,(float)$Q25],
                        ['3',(float)$Q31,(float)$Q32,(float)$Q33,(float)$Q34,(float)$Q35],
                        ['4',(float)$Q41,(float)$Q42,(float)$Q43,(float)$Q44,(float)$Q45],
                        ['5',(float)$Q51,(float)$Q52,(float)$Q53,(float)$Q54,(float)$Q55],
                        ['6',(float)$Q61,(float)$Q62,(float)$Q63,(float)$Q64,(float)$Q65],
                        ['7',(float)$Q71,(float)$Q72,(float)$Q73,(float)$Q74,(float)$Q75],
                        ['8',(float)$Q81,(float)$Q82,(float)$Q83,(float)$Q84,(float)$Q85],
                        ['9',(float)$Q91,(float)$Q92,(float)$Q93,(float)$Q94,(float)$Q95],
                        ['10',(float)$Q101,(float)$Q102,(float)$Q103,(float)$Q104,(float)$Q105]
                    ];
                    // $Response = [
                    //     ['Question', 'Strongly Disagree', 'Disagree','Not Sure','Agree','Strongly Agree'],
                    //     ['1',1,2,4,3,3],
                    //     ['2',1,2,4,3,4],
                    //     ['3',1,2,4,3,5],
                    //     ['4',1,2,4,3,5],
                    //     ['5',5,3,2,2,5],
                    //     ['6',5,3,2,1,5],
                    //     ['7',5,3,2,2,5],
                    //     ['8',5,3,2,3,5],
                    //     ['9',2,3,0,3,5],
                    //     ['10',2,2,3,4,2]
                    // ];

                //     // $Q1 = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('teacher_id',$subject->teacher_id)->where('Q1','2')->get();
            }
            else {
                $Response   = [
                    ['Q11' => 0, 'Q12' => 0, 'Q13' => 0, 'Q14' => 0, 'Q15' => 0],
                    ['Q21' => 0, 'Q22' => 0, 'Q23' => 0, 'Q24' => 0, 'Q25' => 0],
                    ['Q31' => 0, 'Q32' => 0, 'Q33' => 0, 'Q34' => 0, 'Q35' => 0],
                    ['Q41' => 0, 'Q42' => 0, 'Q43' => 0, 'Q44' => 0, 'Q45' => 0],
                    ['Q51' => 0, 'Q52' => 0, 'Q53' => 0, 'Q54' => 0, 'Q55' => 0],
                    ['Q61' => 0, 'Q62' => 0, 'Q63' => 0, 'Q64' => 0, 'Q65' => 0],
                    ['Q71' => 0, 'Q72' => 0, 'Q73' => 0, 'Q74' => 0, 'Q75' => 0],
                    ['Q81' => 0, 'Q82' => 0, 'Q83' => 0, 'Q84' => 0, 'Q85' => 0],
                    ['Q91' => 0, 'Q92' => 0, 'Q93' => 0, 'Q94' => 0, 'Q95' => 0],
                    ['Q101' =>0, 'Q102' =>0, 'Q103' =>0, 'Q104' =>0, 'Q105' =>0]
                ];
            
            }
            //  $Q1 = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('Q1','1')->get();
            // $s->save();
            // $Response1   = array(
            //     'SD' => number_format((float)(($Total1/660)*100), 2, '.', ''),
            //     'D' => number_format((float)(($Total2/660)*100), 2, '.', ''),
            //     'NS' => number_format((float)(($Total3/660)*100), 2, '.', ''),
            //     'A' => number_format((float)(($Total4/660)*100), 2, '.', ''),
            //     'SA' => number_format((float)(($Total5/660)*100), 2, '.', ''),
            // );
        
              return response(json_encode($Response));
            //return response(number_format((float)(($Total1/660)*100), 2, '.', ''));
            //return response(($Total4/660)*100);
        }
    }

    public function Getteacher(Request $request){
        if($request->ajax()){
            $this->validate($request,[
            'course_id'=>'required|exists:courses,id',
            'sem'=>'required',
            ]);
            $course_id = $request->input('course_id');
            $sem = $request->input('sem');
            $subjects = Subject::where('course_id',$course_id)->where('sem',$sem)->get();
             $teacher=array();
            foreach($subjects as $sub){
                array_push($teacher,array ('id' => $sub->teacher->id,
                    'name'=> $sub->teacher->name,
                ));
            }
            return response($teacher);
        }
    }
}
