@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin: 20px;min-width:505px;">
        <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
            <div class="content"> 

                {!! Form::open(['url' => '/faculty/submit','method'=>'POST','autocomplete'=>'off']) !!}
                     <h3 align="center" style="margin-top: 20px;">Teacher's Feedback </h3>
                     <p style="margin-top: 30px;">Dear Students,</p>
                     <p>This form has been designed to get feedback from you to strengthen the quality of teaching-learning environment, to provide best possible facilities and modern infrastructure. The information provided by you will be kept confidential.</p>    
                     <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
                     <p class="col-xs-12"><i>For each item please indicate your level of agreement with the following statements by selecting appropriate option.</i></p>                
       {{Form::hidden('faculty_id',Auth::user()->id)}}
       {{Form::hidden('year', date('Y'))}}

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
                            {{Form::label('','Any other suggestion.',['class'=>'control-label col-xs-12'])}}
                          <textarea  style="margin-left:20px;" name="comment"  rows="4" cols="50" required></textarea>
                    </div>

                    <div style="margin-top: 20px;margin-bottom: 20px;" align="center" class="form-group col-xs-12">
                        <input type="Submit" class="btn btn-info" value="Submit" name="about">
                        <input style="margin-left:20px;" type="reset" class="btn .btn-warning" value="Reset ">
                    </div> <!--End of Submit buttons-->
                {!! Form::close() !!}<!--End of Form-->
             </div>
        </div> <!--End of container-->
    </div>
@endsection