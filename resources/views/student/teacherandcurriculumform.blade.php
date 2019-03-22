@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin: 20px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content">
{!! Form::open(['url' => '/students/tcsubmit','method'=>'POST','autocomplete'=>'off']) !!}    
    <h3 align="center" style="margin-top: 20px;">About Teacher and Curriculum Form </h3>
    <p style="margin-top: 30px;">Dear Students,</p>
    <p>This form has been designed to get feedback from you to strengthen the quality of teaching-learning environment, to provide best possible facilities and modern infrastructure. The information provided by you will be kept confidential.</p>    
   {{Form::hidden('student_id',Auth::user()->id)}}
   {{Form::hidden('course_id',$course_id)}}
   {{Form::hidden('sem',$sem)}}
<div class="row">

    <div class="col-xs-12" style="height:150px;">
        <div class="col-xs-10">
                <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
            <p class="col-xs-12">For each item please indicate your level of agreement with the following statements by selecting providing appropiate number between range 1 to 5 option.</p>
        </div>
        <div class="col-xs-2" style="margin-top:20px;">             
            <p style="margin:10px"><strong> 5. Strongly Agree <br> 4. Agree <br> 3.Satisfactory  <br> 2. Disagree <br> 1. Strongly Disagree.</strong></p>
        </div>   
    </div>
        {{-- <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
            <label> Id : </label> <button type="button" class="btn btn-primary" disabled>{{$studentid}}</button>
        </div> --}}
        <div class="row" style="margin-top:20px;">
        <div style="margin:10px;margin-left:0px;" class="col-xs-2">
            <label> Student Name : </label> <button type="button" class="btn btn-primary" disabled>{{Auth::user()->name}}</button>
            </div>

        <div style="margin:10px;margin-left:0px" class="col-xs-2">
        <label > Course : </label> <button type="button" class="btn btn-primary" disabled>{{$course_id}}</button>
        </div>

        <div style="margin:10px;margin-left:0px" class="col-xs-2">
        <label> Sem : </label> <button type="button" class="btn btn-primary" disabled>{{$sem}}</button>
        </div>
    </div>
        @php
        $Q = 1;
        $S = 1;
        $C = 1;
        @endphp
        <div style="margin:10px;margin-left:0px" class="form-group col-xs-12">
            <table class="table">
                <thead>
                <th> Teacher Question</th>
                @if(!$subjects->isEmpty())
                @foreach($subjects as $s)
                    <th>{{$s->name}}</th>
                @endforeach
                @endif
                </thead>
                <tbody>
                        {{-- {{Form::select('Q1', ['B.Com'=>'Bachelor Of Commerce(B.Com)','BAF'=>'Bachelor Of Commerce in Accounting and Finance(BAF)','BBI'=>'Bachelor Of Commerce in Banking and Insurance(BBI)','BFM'=>'Bachelor Of Commerce in Financial Markets(BFM)','B.Sc. (Animation)'=>'B.Sc. (Animation)'  ,'BMM' => 'Bachelor in Mass Media(BMM)', 'BOA' => 'Bachelor Of Arts','BSC-IT'=>'Bachelor of Science in Information Technology(Bsc.IT)'],null,['class'=>'form-control','style'=>'cursor:pointer'])}} --}}
                        @if(!$tquestions->isEmpty())
                        @foreach($tquestions as $q)
                        <tr>
                            <td>{{$q->question}}</td>
                            @foreach($subjects as $subject)
                            <td>{!!Form::select("S$S$Q", [''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'],null,['class'=>'form-control','style'=>'cursor:pointer','required'=>'required'])!!}</td>                           
                             @php $S = $S+1; @endphp
                            @endforeach
                            @php $S = 1; $Q=$Q+1; @endphp
                        @endforeach
                    </tr>
                        @endif
                        @php $S = 1; @endphp
                </tbody>

                <table class="table">
                    <thead>
                    <th>Curriculum Question</th>
                    @if(!$subjects->isEmpty())
                    @foreach($subjects as $s)
                        <th>{{$s->name}}</th>
                    @endforeach
                    @endif
                    </thead>
                    <tbody>
                            @if(!$cquestions->isEmpty())
                            @foreach($cquestions as $q)
                            <tr>
                                <td>{{$q->question}}</td>
                                @foreach($subjects as $subject)
                                <td>{!!Form::select("S$S$Q", [''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'],null,['class'=>'form-control','style'=>'cursor:pointer','required'=>'required'])!!}</td>
                                @php $S = $S+1; @endphp
                                @endforeach
                                @php $S = 1; $Q=$Q+1; @endphp
                                @endforeach

                        </tr>
                            @endif
                            
                    </tbody>
            </table>
        </div>
</div>

    <div style="margin:10px;margin-left:0px" class="form-group col-xs-12">
        <div align="center">
            <button type="Submit" class="btn btn-primary" style="width:120px;height:40px;">Submit</button>
            <button type="Reset" class="btn btn-warning" style="width:120px;height:40px;margin-left:20px;">Reset</button>
        </div>
    </div>
{!! Form::close() !!}<!--End of Form-->
</div><!-- End of content-->
</div> <!--End of container-->
</div>
@endsection