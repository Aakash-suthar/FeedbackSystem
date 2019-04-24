<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Admin;
use App\Subject;
use App\Course;
use App\Teacher;
use App\Question;
use App\Feedback;
use App\Faculty;
use App\Ffeedback;
use App\Alumini;
use App\student\Scollage;
use App\parent\Pcollage;
use Session;
use View;
use PDF;

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
        $subjects = Subject::all();
        $questions = Question::all();
        $teachers  = Faculty::all();
        $feedback = Feedback::count();
        $ffeedback = Ffeedback::count();
        $alumini = Alumini::count();
        $pcollage = Pcollage::count();
        $scollage = Scollage::count();

        return view('admin',compact('courses','subjects','questions','teachers','feedback','ffeedback','scollage','pcollage','alumini'));
    }
    
    public function Totalfeedback(Request $request){
        if($request->ajax()){
            $feedback = Feedback::count();
            $ffeedback = Ffeedback::count();
            $alumini = Alumini::count();
            $pcollage = Pcollage::count();
            $scollage = Scollage::count();
            $response = [
                'feedback' => $feedback,
                'ffeedback' => $ffeedback,
                'alumini' => $alumini,
                'pcollage' => $pcollage,
                'scollage' => $scollage
            ];
            return response()->json($response);
        }
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

    public function Addfaculty(Request $request){
        if($request->ajax()){
               $this->validate($request,[
                'id'=>'required|unique:faculties,id',
                'name'=>'required',
                'email' => 'email|unique:faculties,email',
                'password' => 'required|min:10'
                ]);
            
            $s = new Faculty;
            $s->id = $request->input('id');
            $s->name = $request->input('name');
            $s->email = $request->input('email');
            $s->password = Hash::make($request->input('password'));
            $s->save();
            return response($this->Response);
        }
    }
    public function Getfacultydata(Request $request){
        if($request->ajax()){
         $teachers = Faculty::all();
        }
        return response($teachers);

    }

    public function addsubject(Request $request){
        if($request->ajax()){
        $this->validate($request,[
            'id'=>'required|unique:subjects,id',
            'name'=>'required',
            'sem'=>'required',
            'course_id'=>'required|exists:courses,id',
            'faculty_id'=>'required|exists:faculties,id',

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
                    return response()->json(['error'=>'Question is full for college'], 422);     
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
            else if($type=="alumini"){
                if(($s->count())>=27){
                    return response()->json(['error'=>'Question is full for alumini'], 422);     
                }
                else{
                    $s = Question::create($request->all());
                    $s->save();
                    return response($this->Response);
                }
            }  
            else if($type=="faculty"){
                if(($s->count())>=21){
                    return response()->json(['error'=>'Question is full for faculty'], 422);     
                }
                else{
                    $s = Question::create($request->all());
                    $s->save();
                    return response($this->Response);
                }
            } 
            else if($type=="employer"){
                if(($s->count())>=16){
                    return response()->json(['error'=>'Question is full for Employer'], 422);     
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
            'teacher_id' =>'required|exists:subjects,faculty_id',
            ]);
            $course_id = $request->input('course_id');
            $sem = $request->input('sem');
            $teacher_id = $request->input('teacher_id');
            $teachername = Faculty::find($teacher_id);
            
            //$subjects = Subject::where('course_id',$course_id)->where('sem',$sem)->get();
            $Totatfeedback = Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->count();

            if($Totatfeedback>0){
                  //  $Totatfeedback = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('teacher_id',$subject->teacher_id)->count();
                   // $Q11 = (((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','1')->count())/$Totatfeedback)*100);
                    $Q11 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q12 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q13 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q14 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q15 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q21 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q22 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q23 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q24 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q25 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q31 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q32 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q33 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q34 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q35 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q41 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q42 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q43 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q44 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q45 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q51 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q52 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q53 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q54 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q55 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q61 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q62 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q63 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q64 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q65 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q71 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q72 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q73 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q74 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q75 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q81 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q82 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q83 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q84 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q85 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q91 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q92 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q93 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q94 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q95 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q101 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q102 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q103 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q104 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q105 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','5')->count())/$Totatfeedback)*100), 3, '.', '');

                    $totalQ1 = number_format((float)(($Q11 +$Q21 + $Q31 +$Q41 + $Q51 +$Q61 + $Q71 +$Q81 + $Q91 +$Q101)/10), 2, '.', ''); 
                    $totalQ2 = number_format((float)(($Q12 +$Q22 + $Q32 +$Q42 + $Q52 +$Q62 + $Q72 +$Q82 + $Q92 +$Q102)/10), 2, '.', ''); 
                    $totalQ3 = number_format((float)(($Q13 +$Q23 + $Q33 +$Q43 + $Q53 +$Q63 + $Q73 +$Q83 + $Q93 +$Q103)/10), 2, '.', ''); 
                    $totalQ4 = number_format((float)(($Q14 +$Q24 + $Q34 +$Q44 + $Q54 +$Q64 + $Q74 +$Q84 + $Q94 +$Q104)/10), 2, '.', ''); 
                    $totalQ5 = number_format((float)(($Q15 +$Q25 + $Q35 +$Q45 + $Q55 +$Q65 + $Q75 +$Q85 + $Q95 +$Q105)/10), 2, '.', ''); 

                    //$year = date('YYYY');
                   // $year = $year->isoFormat('dddd D');
                  

                   $date = Carbon::now();
                   $date2 = $date->toFormattedDateString();
                   $date2 = $date->format('F d, Y'); 
                //    $date->settings([
                //     'toStringFormat' => 'jS \o\f F, Y g:i:s a',
                // ]);
                  // $date->toFormattedDateString();  

                    $Response =[
                           'chart' => [
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
                           ],
                           'Report' => [
                               'Q1' => $totalQ1,
                               'Q2' => $totalQ2,
                               'Q3' => $totalQ3,
                               'Q4' => $totalQ4,
                               'Q5' => $totalQ5,
                            'all' => ($totalQ5+$totalQ4+$totalQ3)],
                               'Faculty' => $teachername->name,
                               'pdf' => $teacher_id,
                               'course_id' => $course_id,
                               'year' =>  $date2,
                ];

                //     // $Q1 = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('teacher_id',$subject->teacher_id)->where('Q1','2')->get();
            }
            else {
                // $Response   = [
                //     ['Q11' => 0, 'Q12' => 0, 'Q13' => 0, 'Q14' => 0, 'Q15' => 0],
                //     ['Q21' => 0, 'Q22' => 0, 'Q23' => 0, 'Q24' => 0, 'Q25' => 0],
                //     ['Q31' => 0, 'Q32' => 0, 'Q33' => 0, 'Q34' => 0, 'Q35' => 0],
                //     ['Q41' => 0, 'Q42' => 0, 'Q43' => 0, 'Q44' => 0, 'Q45' => 0],
                //     ['Q51' => 0, 'Q52' => 0, 'Q53' => 0, 'Q54' => 0, 'Q55' => 0],
                //     ['Q61' => 0, 'Q62' => 0, 'Q63' => 0, 'Q64' => 0, 'Q65' => 0],
                //     ['Q71' => 0, 'Q72' => 0, 'Q73' => 0, 'Q74' => 0, 'Q75' => 0],
                //     ['Q81' => 0, 'Q82' => 0, 'Q83' => 0, 'Q84' => 0, 'Q85' => 0],
                //     ['Q91' => 0, 'Q92' => 0, 'Q93' => 0, 'Q94' => 0, 'Q95' => 0],
                //     ['Q101' =>0, 'Q102' =>0, 'Q103' =>0, 'Q104' =>0, 'Q105' =>0]
                // ];  
                return response()->json(['error'=>'No Feedback Found!!!'],423);  
            
            }
        
              return response(json_encode($Response));
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
                array_push($teacher,array ('id' => $sub->faculty->id,
                    'name'=> $sub->faculty->name,
                ));
            }
            return response($teacher);
        }
    }
    public function Getcourse(Request $request){
        if($request->ajax()){
         $course = Course::all();
        }
        return response($course);

    }
    public function Getsubject(Request $request){
        if($request->ajax()){
         $subjects = Subject::all();
         $subarray = array();
         foreach($subjects as $sub){
            array_push($subarray,array (
                'id' => $sub->id,
                'name'=> $sub->name,
                'sem'=> $sub->sem,
                'course' => $sub->course->name,
                'teacher' => $sub->faculty->name
            ));
        }
        }
        return response($subarray);

    }
    public function Getquestion(Request $request){
        if($request->ajax()){
         $questions = Question::all();
        }
        return response($questions);

    }

    public function Getalldata(Request $request){
        if($request->ajax()){

            $alldata = array();


            $courses = Course::all();
            foreach($courses as $course)
            {
               
                $subjectsarray = array();
                $subjects =  Subject::where('course_id',$course->id)->get();
                if($subjects->count()>0){
                    foreach($subjects as $sub){

                        $Totatfeedback = Feedback::where('teacher_id',$sub->faculty->id)->count();
                        if($Totatfeedback>0){
                            $Q11 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q1','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q12 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q1','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q13 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q1','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q14 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q1','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q15 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q1','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q21 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q2','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q22 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q2','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q23 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q2','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q24 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q2','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q25 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q2','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q31 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q3','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q32 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q3','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q33 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q3','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q34 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q3','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q35 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q3','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q41 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q4','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q42 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q4','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q43 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q4','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q44 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q4','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q45 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q4','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q51 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q5','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q52 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q5','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q53 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q5','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q54 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q5','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q55 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q5','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q61 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q6','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q62 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q6','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q63 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q6','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q64 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q6','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q65 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q6','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q71 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q7','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q72 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q7','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q73 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q7','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q74 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q7','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q75 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q7','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q81 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q8','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q82 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q8','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q83 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q8','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q84 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q8','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q85 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q8','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q91 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q9','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q92 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q9','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q93 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q9','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q94 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q9','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q95 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q9','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q101 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q10','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q102 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q10','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q103 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q10','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q104 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q10','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q105 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q10','5')->count())/$Totatfeedback)*100), 3, '.', '');
        
                            $totalQ1 = number_format((float)(($Q11 +$Q21 + $Q31 +$Q41 + $Q51 +$Q61 + $Q71 +$Q81 + $Q91 +$Q101)/10), 2, '.', ''); 
                            $totalQ2 = number_format((float)(($Q12 +$Q22 + $Q32 +$Q42 + $Q52 +$Q62 + $Q72 +$Q82 + $Q92 +$Q102)/10), 2, '.', ''); 
                            $totalQ3 = number_format((float)(($Q13 +$Q23 + $Q33 +$Q43 + $Q53 +$Q63 + $Q73 +$Q83 + $Q93 +$Q103)/10), 2, '.', ''); 
                            $totalQ4 = number_format((float)(($Q14 +$Q24 + $Q34 +$Q44 + $Q54 +$Q64 + $Q74 +$Q84 + $Q94 +$Q104)/10), 2, '.', ''); 
                            $totalQ5 = number_format((float)(($Q15 +$Q25 + $Q35 +$Q45 + $Q55 +$Q65 + $Q75 +$Q85 + $Q95 +$Q105)/10), 2, '.', ''); 
                            
                            
                            array_push($subjectsarray,[
                                'faculty' => $sub->faculty->name,
                                'Q1' => $totalQ1,
                                'Q2' => $totalQ2,
                                'Q3' => $totalQ3,
                                'Q4' => $totalQ4,
                                'Q5' => $totalQ5
                            ]);
                        
                        }
                        else{
                            array_push($subjectsarray,[
                                'faculty' => $sub->faculty->name,
                                'Q1' => 0,
                                'Q2' => 0,
                                'Q3' => 0,
                                'Q4' => 0,
                                'Q5' => 0
                            ]); 
                        }
                    }
                }
                $coursearray = array(
                    'name' => $course->name,
                    'id' => $course->id,
                    'allsubjects' => $subjectsarray,
                );
                array_push($alldata,$coursearray);
            }
        }

        return response($alldata);
    }

    public function Getsubject2(Request $request){
        if($request->ajax()){
            $this->validate($request,[
            'course_id'=>'required|exists:courses,id',
            ]);
            $course_id = $request->input('course_id');
            $subjects = Subject::where('course_id',$course_id)->get();
             $all=array();
            foreach($subjects as $sub){
                array_push($all,array ('id' => $sub->id,
                    'name'=> $sub->name,
                ));
            }
            return response($all);
        }
    }
    public function Getcurriculumdata(Request $request){
        if($request->ajax()){

            $alldata = array();
            $courses = Course::all();
            foreach($courses as $course)
            {
               
                $subjectsarray = array();
                $subjects =  Subject::where('course_id',$course->id)->get();
                if($subjects->count()>0){
                    foreach($subjects as $sub){

                        $Totatfeedback = Feedback::where('teacher_id',$sub->faculty->id)->count();
                        if($Totatfeedback>0){
                            $Q111 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q11','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q112 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q11','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q113 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q11','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q114 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q11','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q115 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q11','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q121 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q12','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q122 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q12','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q123 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q12','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q124 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q12','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q125 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q12','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q131 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q13','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q132 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q13','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q133 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q13','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q134 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q13','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q135 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q13','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q141 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q14','1')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q142 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q14','2')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q143 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q14','3')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q144 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q14','4')->count())/$Totatfeedback)*100), 3, '.', '');
                            $Q145 = number_format((float)(((Feedback::where('teacher_id',$sub->faculty->id)->where('Q14','5')->count())/$Totatfeedback)*100), 3, '.', '');
                            $totalQ1 = number_format((float)(($Q111 +$Q121 + $Q131 +$Q141)/4), 2, '.', ''); 
                            $totalQ2 = number_format((float)(($Q112 +$Q122 + $Q132 +$Q142)/4), 2, '.', ''); 
                            $totalQ3 = number_format((float)(($Q113 +$Q123 + $Q133 +$Q143)/4), 2, '.', ''); 
                            $totalQ4 = number_format((float)(($Q114 +$Q124 + $Q134 +$Q144)/4), 2, '.', ''); 
                            $totalQ5 = number_format((float)(($Q115 +$Q125 + $Q135 +$Q145)/4), 2, '.', ''); 
                            
                            
                            array_push($subjectsarray,[
                                'subject' => $sub->name,
                                'Q1' => $totalQ1,
                                'Q2' => $totalQ2,
                                'Q3' => $totalQ3,
                                'Q4' => $totalQ4,
                                'Q5' => $totalQ5
                            ]);
                        
                        }
                        else{
                            array_push($subjectsarray,[
                                'subject' => $sub->name,
                                'Q1' => 0,
                                'Q2' => 0,
                                'Q3' => 0,
                                'Q4' => 0,
                                'Q5' => 0
                            ]); 
                        }
                    }
                }
                $coursearray = array(
                    'name' => $course->name,
                    'id' => $course->id,
                    'allsubjects' => $subjectsarray,
                );
                array_push($alldata,$coursearray);
            }
        }

        return response($alldata);
    }

    public function Getcurriculum(Request $request){
        if($request->ajax()){
            $this->validate($request,[
            'course_id2'=>'required|exists:courses,id',
            'subject_id' =>'required|exists:subjects,id',
            ]);
            $course_id = $request->input('course_id2');
            $subject_id = $request->input('subject_id');
            
            //$subjects = Subject::where('course_id',$course_id)->where('sem',$sem)->get();
            $Totatfeedback = Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->count();

            if($Totatfeedback>0){
                  //  $Totatfeedback = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('teacher_id',$subject->teacher_id)->count();
                   // $Q11 = (((Feedback::where('course_id',$course_id)->where('sem',$sem)->where('teacher_id',$teacher_id)->where('Q1','1')->count())/$Totatfeedback)*100);
                    $Q111 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q11','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q112 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q11','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q113 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q11','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q114 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q11','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q115 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q11','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q121 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q12','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q122 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q12','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q123 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q12','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q124 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q12','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q125 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q12','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q131 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q13','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q132 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q13','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q133 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q13','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q134 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q13','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q135 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q13','5')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q141 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q14','1')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q142 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q14','2')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q143 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q14','3')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q144 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q14','4')->count())/$Totatfeedback)*100), 3, '.', '');
                    $Q145 = number_format((float)(((Feedback::where('course_id',$course_id)->where('subject_id',$subject_id)->where('Q14','5')->count())/$Totatfeedback)*100), 3, '.', '');
                   
                    // $totalQ1 = number_format((float)(($Q111 +$Q121 + $Q131 +$Q141)/4), 2, '.', ''); 
                    // $totalQ2 = number_format((float)(($Q112 +$Q122 + $Q132 +$Q142)/4), 2, '.', ''); 
                    // $totalQ3 = number_format((float)(($Q113 +$Q123 + $Q133 +$Q143)/4), 2, '.', ''); 
                    // $totalQ4 = number_format((float)(($Q114 +$Q124 + $Q134 +$Q144)/4), 2, '.', ''); 
                    // $totalQ5 = number_format((float)(($Q115 +$Q125 + $Q135 +$Q145)/4), 2, '.', ''); 

                    //$year = date('YYYY');
                   // $year = $year->isoFormat('dddd D');
                  

                //    $date = Carbon::now();
                //    $date2 = $date->toFormattedDateString();
                //    $date2 = $date->format('F d, Y'); 
                //    $date->settings([
                //     'toStringFormat' => 'jS \o\f F, Y g:i:s a',
                // ]);
                  // $date->toFormattedDateString();  

                    $Response =[
                           'chart' => [
                        ['Question', 'Strongly Disagree', 'Disagree','Not Sure','Agree','Strongly Agree'],
                        ['1',(float)$Q111,(float)$Q112,(float)$Q113,(float)$Q114,(float)$Q115],
                        ['2',(float)$Q121,(float)$Q122,(float)$Q123,(float)$Q124,(float)$Q125],
                        ['3',(float)$Q131,(float)$Q132,(float)$Q133,(float)$Q134,(float)$Q135],
                        ['4',(float)$Q141,(float)$Q142,(float)$Q143,(float)$Q144,(float)$Q145]
                           ]
                        //    'Report' => [
                        //        'Q1' => $totalQ1,
                        //        'Q2' => $totalQ2,
                        //        'Q3' => $totalQ3,
                        //        'Q4' => $totalQ4,
                        //        'Q5' => $totalQ5,
                        //     'all' => ($totalQ5+$totalQ4+$totalQ3)],
                        //        'Faculty' => $teachername->name,
                        //        'pdf' => $teacher_id,
                        //        'course_id' => $course_id,
                        //        'year' =>  $date2,
                ];

                //     // $Q1 = Feedback::where('course_id',$request->input('course_id'))->where('sem','6')->where('teacher_id',$subject->teacher_id)->where('Q1','2')->get();
            }
            else {
                // $Response   = [
                //     ['Q11' => 0, 'Q12' => 0, 'Q13' => 0, 'Q14' => 0, 'Q15' => 0],
                //     ['Q21' => 0, 'Q22' => 0, 'Q23' => 0, 'Q24' => 0, 'Q25' => 0],
                //     ['Q31' => 0, 'Q32' => 0, 'Q33' => 0, 'Q34' => 0, 'Q35' => 0],
                //     ['Q41' => 0, 'Q42' => 0, 'Q43' => 0, 'Q44' => 0, 'Q45' => 0],
                //     ['Q51' => 0, 'Q52' => 0, 'Q53' => 0, 'Q54' => 0, 'Q55' => 0],
                //     ['Q61' => 0, 'Q62' => 0, 'Q63' => 0, 'Q64' => 0, 'Q65' => 0],
                //     ['Q71' => 0, 'Q72' => 0, 'Q73' => 0, 'Q74' => 0, 'Q75' => 0],
                //     ['Q81' => 0, 'Q82' => 0, 'Q83' => 0, 'Q84' => 0, 'Q85' => 0],
                //     ['Q91' => 0, 'Q92' => 0, 'Q93' => 0, 'Q94' => 0, 'Q95' => 0],
                //     ['Q101' =>0, 'Q102' =>0, 'Q103' =>0, 'Q104' =>0, 'Q105' =>0]
                // ];  
                return response()->json(['error'=>'No Feedback Found!!!'],423);  
            
            }
        
              return response(json_encode($Response));
        }
    }
    public function GetPDFdata($id,$course){
        $course_id = $course;
        $teacher_id =$id;
        $teacher = Faculty::find($id);

        $Totatfeedback = Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->count();
        $Q11 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q12 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q13 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q14 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q15 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q1','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q21 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q22 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q23 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q24 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q25 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q2','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q31 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q32 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q33 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q34 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q35 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q3','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q41 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q42 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q43 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q44 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q45 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q4','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q51 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q52 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q53 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q54 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q55 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q5','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q61 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q62 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q63 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q64 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q65 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q6','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q71 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q72 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q73 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q74 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q75 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q7','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q81 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q82 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q83 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q84 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q85 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q8','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q91 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q92 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q93 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q94 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q95 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q9','5')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q101 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','1')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q102 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','2')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q103 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','3')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q104 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','4')->count())/$Totatfeedback)*100), 3, '.', '');
        $Q105 = number_format((float)(((Feedback::where('course_id',$course_id)->where('teacher_id',$teacher_id)->where('Q10','5')->count())/$Totatfeedback)*100), 3, '.', '');

        $totalQ1 = number_format((float)(($Q11 +$Q21 + $Q31 +$Q41 + $Q51 +$Q61 + $Q71 +$Q81 + $Q91 +$Q101)/10), 2, '.', ''); 
        $totalQ2 = number_format((float)(($Q12 +$Q22 + $Q32 +$Q42 + $Q52 +$Q62 + $Q72 +$Q82 + $Q92 +$Q102)/10), 2, '.', ''); 
        $totalQ3 = number_format((float)(($Q13 +$Q23 + $Q33 +$Q43 + $Q53 +$Q63 + $Q73 +$Q83 + $Q93 +$Q103)/10), 2, '.', ''); 
        $totalQ4 = number_format((float)(($Q14 +$Q24 + $Q34 +$Q44 + $Q54 +$Q64 + $Q74 +$Q84 + $Q94 +$Q104)/10), 2, '.', ''); 
        $totalQ5 = number_format((float)(($Q15 +$Q25 + $Q35 +$Q45 + $Q55 +$Q65 + $Q75 +$Q85 + $Q95 +$Q105)/10), 2, '.', '');     

       $date = Carbon::now();
       $date2 = $date->toFormattedDateString();
       $date2 = $date->format('F d, Y'); 
       $all = ($totalQ5+$totalQ4+$totalQ3);
       $Faculty = $teacher->name;

       $pdf = PDF::loadView('pdf',compact('date2','all','Faculty','totalQ1','totalQ2','totalQ3','totalQ4','totalQ5'));
       return $pdf->download('report.pdf');
    }
}
