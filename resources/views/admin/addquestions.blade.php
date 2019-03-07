@extends('layouts.admin')

@section('content')

{!! Form::open(['url' => '/dashboard/addquestion','method'=>'POST','autocomplete'=>'off']) !!}    

<label>Question </label>
<input type="text" name="question"/>
<div style="margin:10px;margin-left:0px;margin-bottom: 15px;" class="form-group col-xs-12">
    {{Form::label('', 'type')}}
    {{Form::select('type',['collage'=>'About Collage','currriculum'=>'About Currriculum','teacher'=>'About Teacher'],null,['class'=>'form-control'])}}
</div><!-- End of year select-->

<input type="submit" value="submit"/>
{!! Form::close() !!}<!--End of Form-->

@endsection