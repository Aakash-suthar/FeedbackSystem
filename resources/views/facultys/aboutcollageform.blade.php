@extends('layouts.app')

@section('content')
</div>
<div class="container-fluid" style="margin: 20px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content">
                {!! Form::open(['url' => '/Fcollage','method'=>'POST','autocomplete'=>'off']) !!}    
                <h3 align="center" style="margin-top: 20px;">About Collage Form </h3>
                
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
                    
                {{--  <div style="margin:10px;margin-left:0px;margin-bottom: 15px;" class="form-group col-xs-12">
                        {{Form::label('', 'Course*')}}
                        {{Form::select('course', ['B.Com'=>'Bachelor Of Commerce(B.Com)','BAF'=>'Bachelor Of Commerce in Accounting and Finance(BAF)','BBI'=>'Bachelor Of Commerce in Banking and Insurance(BBI)','BFM'=>'Bachelor Of Commerce in Financial Markets(BFM)','B.Sc. (Animation)'=>'B.Sc. (Animation)'  ,'BMM' => 'Bachelor in Mass Media(BMM)', 'BOA' => 'Bachelor Of Arts','BSC-IT'=>'Bachelor of Science in Information Technology(Bsc.IT)'],null,['class'=>'form-control','style'=>'cursor:pointer'])}}
                    </div> <!--End of course select-->
                    
                    <div style="margin:10px;margin-left:0px;margin-bottom: 15px;" class="form-group col-xs-12">
                        {{Form::label('', 'Year*')}}
                        {{Form::select('year',['FY'=>'First year','SY'=>'Second year','TY'=>'Third year'],null,['class'=>'form-control'])}}
                    </div><!-- End of year select-->
                --}}    
                    <div style="margin:10px;margin-left:0px" class="form-group col-xs-12">
                        {{Form::label('', 'Academic Year*')}}
                        {{Form::select('academicyear',['2018-19'=>'2018-19','2017-18'=>'2017-18','2016-17'=>'2016-17'],null,['class'=>'form-control'])}}
                    </div><!-- End of Academic year select-->
                
                    
                    <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
                    <p class="col-xs-12"><i>For each item please indicate your level of agreement with the following statements by selecting appropriate option.</i></p>                

                    <div class="form-group col-xs-12" style="margin: 10px">
                            {{Form::label('', '1. The courses / syllabi taught by me have a good balance between theory and application:*',['class'=>'control-label col-xs-12'])}}                        
                            <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q1" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q1" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q1" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q1" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q1" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 1-->
                 
                    <div style="margin: 10px" class="form-group col-xs-12">
                            {{Form::label('', '2. The objectives of the syllabi are well defined:*',['class'=>'control-label col-xs-12'])}}                                                
                            <label style="margin: 5px 0px 7px 20px"  class="radio-inline"><input type="radio" name="Q2" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q2" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q2" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q2" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q2" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 2-->
                
                    <div style="margin: 10px" class="form-group col-xs-12">
                            {{Form::label('', '3. The books/journals etc. prescribed / listed as reference materials are relevant, updated and cover the entire syllabi:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin: 5px 0px 7px 20px"   class="radio-inline"><input type="radio" name="Q3" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q3" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q3" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q3" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q3" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 3-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '4. The coures / syllabi of the subjects taught by me increased my interest, knowledge and perspective in the subject area:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin: 5px 0px 7px 20px"  class="radio-inline"><input type="radio" name="Q4" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q4" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q4" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q4" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q4" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 4-->
                
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '5. The college has given me full freedom to adopt new techniques / strategies of teaching such as group discussions, seminar presentations and learner\'s participation:',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin: 5px 0px 7px 20px"   class="radio-inline"><input type="radio" name="Q5" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q5" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q5" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q5" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q5" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 5-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                            {{Form::label('', '6. I have the freedom to adopt new techniques / strategies of testing and assessment of students:*',['class'=>'control-label col-xs-12'])}}                                                
                            <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q6" value="Strongly Agree" required>Strongly Agree</label>
                            <label class="radio-inline"><input type="radio" name="Q6" value="Agree">Agree</label>
                            <label class="radio-inline"><input type="radio" name="Q6" value="Not Sure">Not Sure</label>
                            <label class="radio-inline"><input type="radio" name="Q6" value="Disagree">Disagree</label>
                            <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q6" value="Strongly Disagree">Strongly Disagree</label>
                        </div> <!--End of question 6-->

                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '7. Tests and examinations are conducted well in time with proper coverage of all units in the syllabus:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q7" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q7" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q7" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q7" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q7" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 7-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '8. The prescribed books are available in the Library in Sufficient numbers:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q8" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q8" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q8" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q8" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q8" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 8-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '9. The environment in the College is conducive to teaching and research:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q9" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q9" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q9" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q9" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q9" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 9-->
                    
                     <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '10. The administration is teacher friendly:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q10" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q10" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q10" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q10" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q10" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 10-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '11. The college provides adequate opportunities and support to faculty members for upgrading their skills and qualifications:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q11" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q11" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q11" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q11" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q11" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 11-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '12. ICT facilities in the college are adequate and satisfactory:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q12" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q12" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q12" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q12" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q12" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 12-->
                    
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '13. Separate space in college Canteen is available for Teachers:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q13" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q13" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q13" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q13" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q13" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 13-->
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '14. Toilets / washrooms are clean and properly maintained:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q14" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q14" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q14" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q14" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q14" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 14-->
                    <div style="margin: 10px" class="form-group col-xs-12">
                        {{Form::label('', '15. The classrooms are clean and well maintained:*',['class'=>'control-label col-xs-12'])}}                                                
                        <label style="margin-left: 20px"   class="radio-inline"><input type="radio" name="Q15" value="Strongly Agree" required>Strongly Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q15" value="Agree">Agree</label>
                        <label class="radio-inline"><input type="radio" name="Q15" value="Not Sure">Not Sure</label>
                        <label class="radio-inline"><input type="radio" name="Q15" value="Disagree">Disagree</label>
                        <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q15" value="Strongly Disagree">Strongly Disagree</label>
                    </div> <!--End of question 15-->
                    
                
                    <div style="margin:10px;margin-left:-5px" class="form-group col-xs-12">
                        {{Form::label('', 'Suggestion if any',['class'=>'control-label col-xs-12'])}}                                                
                        <textarea cols=40 class="form-control" rows="5" name="suggestion" id="comment"></textarea> 
                    </div> <!--End of textarea-->
                    
                    <div style="margin-top: 20px;margin-bottom: 20px;" align="center" class="form-group col-xs-12">
                        <input type="Submit" class="btn btn-info" value="Submit" name="about">
                        <input style="margin-left:20px;" type="reset" class="btn .btn-warning" value="Reset ">
                    </div>
                    {!! Form::close() !!}<!--End of Form-->
                </div><!-- End of content-->
    </div> <!--End of container-->
</div>
@endsection