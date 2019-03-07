@extends('layouts.admin')

@section('content')

{!! Form::open(['url' => '/dashboard/addsubject','method'=>'POST','autocomplete'=>'off']) !!}    
<label class="control-label">id</label>
<input type="text" name="id"/><br>
<label class="control-label">name</label>
<input type="text" name="name"/><br>
<label class="control-label">sem</label>
<input type="text" name="sem"/><br>
<label class="control-label">course_id</label>
<input type="text" name="course_id"/><br>
<label class="control-label">teacher_id</label>
<input type="text" name="teacher_id"/><br>
<input type="submit" value="submit"/><br>
{!! Form::close() !!}<!--End of Form-->

@endsection