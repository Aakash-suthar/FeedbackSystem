@extends('layouts.app')

@section('content')

{!! Form::open(['url' => '/students/login','method'=>'POST','autocomplete'=>'off']) !!}    

<div class="row">
        <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
            <label> Id : </label> <button type="button" class="btn btn-primary" disabled>{{$studentid}}</button>
        </div>

        <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
        <label> Course : </label> <button type="button" class="btn btn-primary" disabled>{{$course}}</button>
        </div>

        <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
        <label> Sem : </label> <button type="button" class="btn btn-primary" disabled>{{$sem}}</button>
        </div>

        <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
            <table>
                <thead>
                <th>Question</th>
                @if($subjects>0)
                @foreach($subjects as $subject)
                    <th>{{$subject}}</th>
                @endforeach
                @endif
                </thead>
                <tbody>
                        @if($questions>0)
                        @foreach($questions as $q)
                        <tr>
                            <td>{{$q->question}}</td>
                            @foreach($subjects as $subject)
                            <td><input type="number" min="0" max="5" step="1"></td>
                        @endforeach
                        @endforeach
                    </tr>
                        @endif
            
                </tbody>
            </table>
        </div>
</div>

    <div style="margin:10px;margin-left:0px" class="form-group col-xs-6">
        <button type="Submit" class="btn btn-primary">Submit</button>
    </div>
{!! Form::close() !!}<!--End of Form-->

@endsection