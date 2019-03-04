
    {{-- fade message javascript --}}
    {{--
         <script type="application/javascript">
         $(document).ready (function(){
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
        $("#success-alert").slideUp(500);
        });});
        </script>
    --}}
@extends('layouts.app')
@section('content')
<div class="container-fluid" style="margin: 20px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content"> 
                 {!! Form::open(['url' => '/Scollage','method'=>'POST','autocomplete'=>'off']) !!}
                 <h3 align="center" style="margin-top: 20px;">About College Form </h3>
                 <p style="margin-top: 30px;">Dear Students,</p>
                 <p>This form has been designed to get feedback from you to strengthen the quality of teaching-learning environment, to provide best possible facilities and modern infrastructure. The information provided by you will be kept confidential.</p>    
                 <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
                 <p class="col-xs-12"><i>For each item please indicate your level of agreement with the following statements by selecting appropriate option.</i></p>                


@php
$i = 1
@endphp
@foreach($questions as $q)
{{-- {{$i++}} {{$q->question}}<br> --}}
<div class="form-group col-xs-12" style="margin: 10px">
    {{Form::label('',$q->question,['class'=>'control-label col-xs-12'])}}
    <label style="margin: 5px 0px 7px 20px"
class="radio-inline"><input type="radio" name="Q{{$i}}" value="Strongly Agree" required>Strongly Agree</label>
    <label class="radio-inline"><input type="radio" name="Q{{$i}}" value="Agree">Agree</label>
    <label class="radio-inline"><input type="radio" name="Q{{$i}}"value="Not Sure">Not Sure</label>
    <label class="radio-inline"><input type="radio" name="Q{{$i++}}" value="Disagree">Disagree</label>
    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q1" value="Strongly Disagree">Strongly Disagree</label>
</div> <!--End of question 1--> 
@endforeach
 
<div style="margin-top: 20px;margin-bottom: 20px;" align="center" class="form-group col-xs-12">
    <input type="Submit" class="btn btn-info" value="Submit" name="about">
    <input style="margin-left:20px;" type="reset" class="btn .btn-warning" value="Reset ">
</div> <!--End of Submit buttons-->
{!! Form::close() !!}<!--End of Form-->
</div>
</div> <!--End of container-->
</div> --}}

{{-- <div class="container-fluid" style="margin: 20px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content"> 
                 {!! Form::open(['url' => '/Scollage','method'=>'POST','autocomplete'=>'off']) !!}  
                  <form class="form-inline" action="Adddata.php" method="POST" autocomplete="off"> 
                    <h3 align="center" style="margin-top: 20px;">About College Form </h3>
                    <p style="margin-top: 30px;">Dear Students,</p>
                    <p>This form has been designed to get feedback from you to strengthen the quality of teaching-learning environment, to provide best possible facilities and modern infrastructure. The information provided by you will be kept confidential.</p>     
                     
                    <div style="margin:10px;margin-left:0px;" class="form-group col-xs-6">
                        {{Form::label('firstname', 'Firstname*')}}
                        {{Form::text('fname','',['class'=>'form-control col-xs-6'])}}
                    </div><!-- End of firstname--> 

                    <div style="margin:10px;margin-left:0px;" class="form-group col-xs-6">
                        {{Form::label('lastname', 'Lastname*')}}
                        {{Form::text('lname','',['class'=>'form-control col-xs-6'])}}
                    </div><!-- End of lastname--> 

                     <div style="margin:10px;margin-left:0px;" class="form-group col-xs-6">
                        {{Form::label('email', 'Email*')}}
                        {{Form::email('email','',['class'=>'form-control col-xs-6'])}}
                    </div><!-- End of email-->
                     
                   <div style="margin:10px;margin-left:0px;margin-bottom: 15px;" class="form-group col-xs-12">
                        {{Form::label('', 'Course*')}}
                        {{Form::select('course', ['B.Com'=>'Bachelor Of Commerce(B.Com)','BAF'=>'Bachelor Of Commerce in Accounting and Finance(BAF)','BBI'=>'Bachelor Of Commerce in Banking and Insurance(BBI)','BFM'=>'Bachelor Of Commerce in Financial Markets(BFM)','B.Sc. (Animation)'=>'B.Sc. (Animation)'  ,'BMM' => 'Bachelor in Mass Media(BMM)', 'BOA' => 'Bachelor Of Arts','BSC-IT'=>'Bachelor of Science in Information Technology(Bsc.IT)'],null,['class'=>'form-control','style'=>'cursor:pointer'])}}
                    </div> <!--End of course select-->
               
                    <div style="margin:10px;margin-left:0px;margin-bottom: 15px;" class="form-group col-xs-12">
                        {{Form::label('', 'Year*')}}
                        {{Form::select('year',['FY'=>'First year','SY'=>'Second year','TY'=>'Third year'],null,['class'=>'form-control'])}}
                    </div><!-- End of year select-->
                     
                     <div style="margin:10px;margin-left:0px" class="form-group col-xs-12">
                        {{Form::label('', 'Academic Year*')}}
                        {{Form::select('academicyear',['2018-19'=>'2018-19','2017-18'=>'2017-18','2016-17'=>'2016-17'],null,['class'=>'form-control'])}}
                    </div><!-- End of Academic year select-->
                     
                     <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
                    <p class="col-xs-12"><i>For each item please indicate your level of agreement with the following statements by selecting appropriate option.</i></p>                

                    <div class="form-group col-xs-12" style="margin: 10px">
                        {{Form::label('', '1. Online educational resources are available and accessible in the library:*',['class'=>'control-label col-xs-12'])}}
                        <label style="margin: 5px 0px 7px 20px"
                            class="radio-inline"><input type="radio" name="Q1" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q1" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q1" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q1" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q1" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 1--> 
                    
                 <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '2. The library staff is cooperative and helpful:* ',['class'=>'control-label col-xs-12'])}}
                        <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">2. The library staff is cooperative and helpful:* </label>
                        <label style="margin: 5px 0px 7px 20px"  class="radio-inline"><input type="radio" name="Q2" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q2" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q2" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q2" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q2" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 2-->
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '3. The prescribed books / reading materials are available in the library:*',['class'=>'control-label col-xs-12'])}}
                        {{-- <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">3. The prescribed books / reading materials are available in the library:* </label> 
                        <label style="margin: 5px 0px 7px 20px"   class="radio-inline"><input type="radio" name="Q3" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q3" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q3" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q3" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q3" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 3-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">4. Internet facility provided in the Library is satisfactory:* </label>
                        <label style="margin: 5px 0px 7px 20px"  class="radio-inline"><input type="radio" name="Q4" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q4" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q4" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q4" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q4" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 4-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">5. The office staff in the college is cooperative and helpful:*</label>
                        <label style="margin: 5px 0px 7px 20px"   class="radio-inline"><input type="radio" name="Q5" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q5" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q5" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q5" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q5" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 5-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">6. Equipment in the lab(s) is in good working condition:*</label>
                        <label style="margin: 5px 0px 7px 20px"   class="radio-inline"><input type="radio" name="Q6" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q6" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q6" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q6" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q6" value="Strongly Disagree">Strongly Disagree</label>
                    </div><!-- End of question 6--> 
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        <label style="margin-left: -5px;margin-bottom: 10px;" class="control-label col-xs-12" for="Username">7. Results are displayed by the college:*</label>
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q7" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q7" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q7" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q7" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q7" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 7-->
                    
                    <div style="margin:10px;margin-left:-5px" class="form-group col-xs-12">
                        <label class="col-xs-12" for="Suggestion if any">Suggestion if any </label>
                        <textarea cols=40 class="form-control" rows="5" name="suggestion" id="comment"></textarea> 
                    </div> <!--End of textarea-->
                    
                    <div style="margin-top: 20px;margin-bottom: 20px;" align="center" class="form-group col-xs-12">
                        <input type="Submit" class="btn btn-info" value="Submit" name="about">
                        <input style="margin-left:20px;" type="reset" class="btn .btn-warning" value="Reset ">
                    </div> <!--End of Submit buttons-->
                {!! Form::close() !!}<!--End of Form-->
            </div>
    </div> <!--End of container-->
</div> --}}
@endsection