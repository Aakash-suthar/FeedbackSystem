@extends('layouts.app')
@section('content')
{{-- <div class="container-fluid" id="myContainer">
        <div class="row" style="padding: 0px;margin:0px;">
            <div  class="col-9 col-xs-9" style="padding: 0px;margin: 0px;">
                <img class="logo">
                <h2 style="margin-top: 15px; " class="text-info" align="center">Employer Feedback Form
                </h2>
            </div>
            </div>
    </div>
<div class="container-fluid" style="margin: 20px 10px 20px 10px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content"> 
            <form class="form-inline" action="Adddata.php" method="POST" autocomplete="off">
                <h3 align="center" style="margin-top: 20px;margin-bottom:20px;">About Employee Form </h3>
                
                   
                
            <div style="margin:10px;margin-left:0px;" class="form-group col-xs-12">
                <label for="name" class="col-xs-12">Name of the Firm/Company:* </label>
                    <input type="text" name="name" style="margin-left:15px;" class="form-control col-xs-12" autofocus required/>
                </div><!-- End of name-->
                         
                 <div style="margin:10px;margin-left:-5px" class="form-group col-xs-12">
                      <label class="col-xs-12" for="Address">Address of the Employer: </label>
                     <textarea style="margin-left:15px;" cols=40 class="form-control" rows="5" name="suggestion" id="comment"></textarea> 
                </div> <!--End of Address-->
                
                <div style="margin:10px;margin-left:0px;" class="form-group col-xs-12">
                <label for="name" class="col-xs-12">Contact details:*  </label>
                    <input type="text" 
                    name="name" style="margin-left:15px;" class="form-control col-xs-12" autofocus required/>
                </div><!-- End of Contact details-->
                
                <div style="margin:10px;margin-left:0px;" class="form-group col-xs-12">
                <label for="name" class="col-xs-12">Name and Designation of the Respondent :*</label>
                    <input type="text" name="name" style="margin-left:15px;" class="form-control col-xs-12" autofocus required/>
                </div><!-- End of Name and designation-->

                <div class="form-group" style="margin: 10px"><p>Tick the number that best describes your level of satisfaction about your employee(s) (who are past students of this college) at each point given below :</p> 
                </div> 
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">1. Ability to contribute to the goal of the organization:* </label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q1" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q1" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q1" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q1" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q1" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 1-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">2. Planning and organization skills:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q2" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q2" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q2" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q2" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q2" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 2-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">3. Communication skills and Soft Skills:* </label>
                    <label style="margin: 5px 0px 7px 20px" class="radio-inline"><input type="radio" name="Q3" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q3" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q3" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q3" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q3" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 3-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">4. Obedience and relationship with Seniors:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q4" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q4" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q4" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q4" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q4" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 4-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">5. Leadership, Team spirit and Initiative:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q5" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q5" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q5" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q5" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q5" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 5-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">6. Relationship with peers / subordinates:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q6" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q6" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q6" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q6" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q6" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 6-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">7. Willingness to learn new techniques, adopt new ideas etc.:*</label>
                    <label style="margin: 5px 0px 7px 20px" class="radio-inline"><input type="radio" name="Q7" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q7" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q7" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q7" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q7" value="Very Happy">Very Happy</label>
                </div>
                <!--End of question 7-->
                
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">8. Ability to use workplace equipment:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q8" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q8" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q8" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q8" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q8" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 8-->
                    
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">9. Ability to solve workplace problems:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q9" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q9" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q9" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q9" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q9" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 9-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">10. Innovativeness, creativity:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q10" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q10" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q10" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q10" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q10" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 10-->
                
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">11. Involvement in social activities:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q11" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q11" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q11" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q11" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q11" value="Very Happy">Very Happy</label>
                </div>
                <!--End of question 11-->
                    
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">12. Simplicity and sense of belonging:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q12" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q12" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q12" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q12" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q12" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 12-->
                    
                <div class="form-group" style="margin: 10px">
                    <label style="margin-left: -5px;margin-bottom: 5px;" class="control-label col-xs-12" for="Username">13. Respect for values in life:*</label>
                    <label style="margin: 5px 0px 7px 20px"
                           class="radio-inline"><input type="radio" name="Q13" value="Far from Satisfied" required>Far from Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q13" value="Not Satisfied">Not Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q13" value="Satisfied">Satisfied</label>
                    <label class="radio-inline"><input type="radio" name="Q13" value="Happy">Happy</label>
                    <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q13" value="Very Happy">Very Happy</label>
                </div> 
                <!--End of question 13-->
                
                 <div style="margin:10px;margin-left:-5px" class="form-group col-xs-12">
                      <label class="col-xs-12" for="Suggestion if any">Suggestion if any </label>
                     <textarea cols=40 class="form-control" rows="5" name="suggestion" id="comment"></textarea> 
                </div> 
                <!--End of textarea-->
                
                <div style="margin-top: 20px;margin-bottom: 20px;" align="center" class="form-group col-xs-12">
                    <input type="Submit" class="btn btn-info" value="Submit" name="about">
                    <input style="margin-left:20px;" type="reset" class="btn .btn-warning" value="Reset ">
                </div>
                    
            </form> <!--End of Form-->
         </div><!-- End of content-->
    </div> <!--End of container-->
</div> --}}

<div class="container-fluid" style="margin: 20px 10px 20px 10px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content"> 
                {!! Form::open(['url' => '/employee/submit','class'=>'form-inline','method'=>'POST','autocomplete'=>'off']) !!}
                        <h3 align="center" style="margin-top: 20px;">About Employee Form </h3>
                        <p style="margin-top: 30px;">Dear Employer,</p>
                        <p>This form has been designed to get feedback from you to strengthen the quality of teachMany graduates of our Department/College/Institute/University are already working in your
                                organization. We are thankful to you for providing them employment with your prestigious
                                Company/Organization.</p>    
                                <p>We shall very much appreciate and be grateful to you if you can spare some of your valuable time
                                        to fill up this feedback form. It will help us to improve the Institute further and give you better
                                        employees in future.
                                </p>
                        <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
                        <p class="col-xs-12"><i>For each item please indicate your level of agreement with the following statements by selecting appropriate option.</i></p>                
       

                        @php
                        $i = 1
                        @endphp
                        @foreach($q as $qu)
                            <div class="form-group col-xs-12" style="margin: 10px">
                                {{Form::label('',$qu->question,['class'=>'control-label col-xs-12'])}}
                                <label style="margin: 5px 0px 7px 20px"class="radio-inline"><input type="radio" name="Q{{$i}}" value="5" required>Strongly Agree</label>
                                <label class="radio-inline"><input type="radio" name="Q{{$i}}" value="4">Agree</label>
                                <label class="radio-inline"><input type="radio" name="Q{{$i}}"value="3">Not Sure</label>
                                <label class="radio-inline"><input type="radio" name="Q{{$i}}" value="2">Disagree</label>
                                <label class="radio-inline" style="margin-left:20px; "><input type="radio" name="Q{{$i++}}" value="1">Strongly Disagree</label>
                            </div> <!--End of question 1--> 
                        @endforeach
         
 
                        <div class="form-group col-xs-12" style="margin: 10px">
                                {{Form::label('','Would you like to recruit more AMU student?',['class'=>'control-label col-xs-12'])}}
                                <label class="radio-inline" style="margin-left:20px;"><input type="radio" name="Q{{$i}}" value="Yes" required>Yes</label>
                                <label class="radio-inline"><input type="radio" name="Q{{$i++}}" value="No">No</label>
                        </div>

                        <div class="form-group col-xs-12" style="margin: 10px">
                                {{Form::label('','Would you refer us to other organization(s)?',['class'=>'control-label col-xs-12'])}}
                                <label class="radio-inline"  style="margin-left:20px;"><input type="radio" name="Q{{$i}}" value="Yes" required>Yes</label>
                                <label class="radio-inline"><input type="radio" name="Q{{$i++}}" value="No">No</label>
                        </div>
                        <div class="form-group col-xs-12" style="margin: 10px">
                                {{Form::label('','Any other suggestion.',['class'=>'control-label col-xs-12'])}}
                              <textarea  style="margin-left:20px;" name="comment"  rows="4" cols="50" required></textarea>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group" style="padding:20px;">
                                <label >Name : </label>
                                <input size="35" type="text" name="name" class='form-control' required/>
                            </div>
                            <div class="form-group" style="padding:20px;">
                                <label >Email :  </label>
                                <input size="35" type="email" name="email" class='form-control' required/>           
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group" style="padding:20px;">
                                <label >Position : </label>                                   
                                <input size="35" type="text" name="position" class='form-control' required/>                                                      
                            </div>
                            <div class="form-group" style="padding:20px;">
                                <label >Company/Organisation :  </label>                            
                                <input size="35"t type="text" name="company" class='form-control' required/>
                            </div>
                        </div>
                        <div style="margin-top: 20px;margin-bottom: 20px;" align="center" class="form-group col-xs-12">
                            <input type="Submit" class="btn btn-info" value="Submit" name="about">
                            <input style="margin-left:20px;" type="reset" class="btn .btn-warning" value="Reset ">
                        </div> <!--End of Submit buttons-->
                        {!! Form::close() !!}<!--End of Form-->        
        </div>
    </div>
</div>
@endsection
        