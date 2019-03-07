@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin: 20px;min-width:505px;">
    <div class="container-fluid" style="background-color: whitesmoke; box-shadow: 4px 5px 8px 2px rgba(0, 0, 0, 0.2), -3px -2px 8px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;">
        <div class="content">
{!! Form::open(['url' => '/students/login','method'=>'POST','autocomplete'=>'off']) !!}    
    <h3 align="center" style="margin-top: 20px;">About Teacher and Curriulum Form </h3>
    <p style="margin-top: 30px;">Dear Students,</p>
    <p>This form has been designed to get feedback from you to strengthen the quality of teaching-learning environment, to provide best possible facilities and modern infrastructure. The information provided by you will be kept confidential.</p>    
   
<div class="row">

    <div class="col-xs-12" style="height:150px;">
            <p style="margin-bottom: 10px;margin-top: 10px" class="col-xs-12"><b><i>Directions:</i></b></p>
            <p class="col-xs-12">For each item please indicate your level of agreement with the following statements by selecting providing appropiate number between range 1 to 5 option.</p>                
        <p style="margin:10px"><strong>1. Strongly Agree.  2. Agree  3. Not Sure  4. Disagree  5. Strongly Disagree </strong></p>
    </div>
        {{-- <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
            <label> Id : </label> <button type="button" class="btn btn-primary" disabled>{{$studentid}}</button>
        </div> --}}
        <div style="margin:10px;margin-left:0px" class="col-xs-2">
            <label> Student Id : </label> <button type="button" class="btn btn-primary" disabled>{{$studentid}}</button>
            </div>

        <div style="margin:10px;margin-left:0px" class="col-xs-2">
        <label > Course : </label> <button type="button" class="btn btn-primary" disabled>{{$course->name}}</button>
        </div>

        <div style="margin:10px;margin-left:0px" class="col-xs-2">
        <label> Sem : </label> <button type="button" class="btn btn-primary" disabled>{{$sem}}</button>
        </div>
      

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
                        @if(!$tquestions->isEmpty())
                        @foreach($tquestions as $q)
                        <tr>
                            <td>{{$q->question}}</td>
                            @foreach($subjects as $subject)
                            <td><input type="number" min="1" max="5" required/></td>
                        @endforeach
                        @endforeach
                    </tr>
                        @endif

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
                                <td><input type="number" min="1" max="5" required/></td>
                            @endforeach
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