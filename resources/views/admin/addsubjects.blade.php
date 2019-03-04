@extends('layouts.app')

@section('content')

{!! Form::open(['url' => '/dashboard/addsubject','method'=>'POST','autocomplete'=>'off']) !!}    
<label>id</label>
<input type="text" name="id"/><br>
<label>name</label>
<input type="text" name="name"/><br>
<label>sem</label>
<input type="text" name="sem"/><br>
<label>course_id</label>
<input type="text" name="course_id"/><br>
<label>teacher_id</label>
<input type="text" name="teacher_id"/><br>
<input type="submit" value="submit"/><br>
{!! Form::close() !!}<!--End of Form-->

@endsection