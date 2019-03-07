@extends('layouts.admin')

@section('content')

{!! Form::open(['url' => '/dashboard/addteacher','method'=>'POST','autocomplete'=>'off']) !!}    

<input type="text" name="id"/>
<input type="text" name="name"/>

<input type="submit" value="submit"/>
{!! Form::close() !!}<!--End of Form-->

@endsection