@extends('layouts.admin')

@section('content')
{{-- 
<a href="/dashboard/course">Add Course</a>
<a href="/dashboard/teacher">Add Teacher</a>
<a href="/dashboard/subject">Add Subject</a>
<a href="/dashboard/question">Add Question</a> --}}
<div class="tab-content" style="min-height: 20vh; ">
    <div id="course" class="tab-pane  fade in active">
               <!-- The Modal -->
                    <!-- Modal content -->
                   <div class="modal-content" style="width:400px">
                    <div class="modal-header">
                        <h2 align="center">Add Course</h2>
                    </div>
                        <div class="modal-body row">
                                {!! Form::open(['url' => '/login','method'=>'POST','class'=>'form-vertical','autocomplete'=>'off']) !!}  
                                <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Username :*  </label>
                                <input type="text" name="username"  class="form-control" required/>
                                </div>
                                    <div class="form-group col-xs-12" style="padding:12px">
                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Password :*  </label>
                                <input type="password" name="password" class="form-control" required/>
                                </div>
                                    <div class="form-group col-xs-12" style="margin-top:10px;">
                                    <div style="margin: 0px;padding: 0px;" class="row">
                                        <div class="col-xs-6" style="padding: 0px;">
                                        <input type="Submit" class="btn btn-success col-xs-6" style="float: right;width: 80px;" value="Submit"/></div>
                                        <div style="padding: 0px;margin-left: 10px;" class="col-xs-5">
                                        <input style="margin: 0px;width: 80px" type="Reset" class="btn btn-warning col-xs-6" value="Reset"/>  
                                        </div>
                                            
                                    </div>
                                </div>
                                {!! Form::close() !!}
            
                            </div>
                        </div>
        {{-- <div class="row">
            <div class="col-xs-3">  
                <button class="btn btn-lg btn-info" style="margin:40px;width:200px;height:120px;">Add Course</button>
            </div>
            <div class="col-xs-3">
                <button  class="btn btn-lg btn-warning" style="margin:40px;width:200px;height:120px;">Add Question</button>
            </div>
            <div class="col-xs-3">
                <button class="btn btn-lg btn-danger" style="margin:40px;width:200px;height:120px;">Add Subject</button>
            </div>
            <div class="col-xs-3">
                <button  class="btn btn-lg btn-success" style="margin:40px;width:200px;height:120px;">Add Question</button>
            </div>
        </div> --}}
    </div>
</div>
@endsection