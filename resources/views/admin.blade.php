<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Font awesome icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    </head>
    <body>
            {{-- @include('inc.messages')
            @include('flash::message') --}}
            <!-- The Modal1 -->
            <div id="myModal1" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                        <div class="modal-header">
                          <span id="gg1" class="close">&times;</span>
                          <h2 align="center">Add Course</h2>
                        </div>
                        <div class="modal-body row">
                                {!! Form::open(['id'=>'form1','class'=>'form-vertical','autocomplete'=>'off']) !!}    
                               {{-- <form id="form1" class="form-vertical" method="POST" autocomplete="off"> --}}
                                <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Course Id :*  </label>
                                <input type="text" name="id"  class="form-control" required/>
                                </div>
                                 <div class="form-group col-xs-12" style="padding:12px">
                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Course Name :*  </label>
                                <input type="text" name="name" class="form-control" required/>
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
                                <div align="center">
                                <span id="success1" class="text-success"></span>
                                <span id="danger1" class="text-danger"></span>
                                </div>
                                {!! Form::close() !!}
                            {{-- </form> --}}
        
                        </div>
                      </div>
        
            </div>
             <!-- The Modal2 -->
             <div id="myModal2" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                        <div class="modal-header">
                          <span id="gg2" class="close">&times;</span>
                          <h2 align="center">Add Faculty</h2>
                        </div>
                        <div class="modal-body row">
                                {!! Form::open(['id'=>'form2','class'=>'form-vertical','autocomplete'=>'off']) !!}  
                                <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                <label for="name" class="col-xs-12" style="margin-bottom: 10px;"> Faculty Id :*  </label>
                                <input type="text" name="id"  class="form-control" required/>
                                </div>
                                 <div class="form-group col-xs-12" style="padding:12px">
                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Name :*  </label>
                                <input type="text" name="name" class="form-control" required/>
                                </div>
                                 <div class="form-group col-xs-12" style="padding:12px">
                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Email :*  </label>
                                <input type="text" name="email" class="form-control" required/>
                                </div>
                                <div class="form-group col-xs-12" style="padding:12px">
                                    <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Password as phone no :*  </label>
                                    <input type="text" name="password" class="form-control" required/>
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
                                <div align="center">
                                <span id="success2" class="text-success"></span>
                                <span id="danger2" class="text-danger"></span>
                                </div>
                                {!! Form::close() !!}
        
                        </div>
                      </div>
        
            </div>
              <!-- The Modal 3 -->
              <div id="myModal3" class="modal">
                  <!-- Modal content -->
                  <div class="modal-content">
                          <div class="modal-header">
                            <span id="gg3" class="close">&times;</span>
                            <h2 align="center">Add Subject</h2>
                          </div>
                          <div class="modal-body row">
                                  {!! Form::open(['id'=>'form3','class'=>'form-vertical','autocomplete'=>'off']) !!}  
                                  <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                  <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Subject Id :*  </label>
                                  <input type="text" name="id"  class="form-control" required/>
                                  </div>
                                   <div class="form-group col-xs-12" style="padding:12px">
                                    <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Name :*  </label>
                                    <input type="text" name="name" class="form-control" required/>
                                  </div>
                                  <div class="form-group col-xs-12" style="padding:12px">
                                        <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Sem :*  </label>
                                        <input type="text" name="sem" class="form-control" required/>
                                      </div>
                                      <div class="form-group col-xs-12" style="padding:12px">
                                            <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Course Id :*  </label>
                                            <input type="text" name="course_id" class="form-control" required/>
                                          </div>
                                          <div class="form-group col-xs-12" style="padding:12px">
                                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Faculty Id :*  </label>
                                                <input type="text" name="faculty_id" class="form-control" required/>
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
                                  <div align="center">
                                  <span id="success3" class="text-success"></span>
                                  <span id="danger3" class="text-danger"></span>
                                  </div>
                                  {!! Form::close() !!}
          
                          </div>
                        </div>
          
              </div>
                <!-- The Modal 4-->
             <div id="myModal4" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                        <div class="modal-header">
                          <span id="gg4" class="close">&times;</span>
                          <h2 align="center">Add Question</h2>
                        </div>
                        <div class="modal-body row">
                                {!! Form::open(['id'=>'form4','class'=>'form-vertical','autocomplete'=>'off']) !!}  
                                <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Question :*  </label>
                                <input type="text" name="question"  class="form-control" required/>
                                </div>
                                 <div class="form-group col-xs-12" style="padding:12px">
                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Type :*  </label>
                                {{Form::select('type',['college'=>'About College','curriculum'=>'About Curriculum','teacher'=>'About Teacher','employer'=>'From Employer','alumini'=>'From Alumini','faculty'=>'From Faculty'],null,['class'=>'form-control'])}}                                </div>
                                 <div class="form-group col-xs-12" style="margin-top:10px;">
                                    <div style="margin: 0px;padding: 0px;" class="row">
                                        <div class="col-xs-6" style="padding: 0px;">
                                        <input type="Submit" class="btn btn-success col-xs-6" style="float: right;width: 80px;" value="Submit"/></div>
                                        <div style="padding: 0px;margin-left: 10px;" class="col-xs-5">
                                        <input style="margin: 0px;width: 80px" type="Reset" class="btn btn-warning col-xs-6" value="Reset"/>  
                                        </div>
                                         
                                    </div>
                                </div>
                                <div align="center">
                                    <span id="success4" class="text-success"></span>
                                    <span id="danger4" class="text-danger"></span>
                                </div>
                               
                                {!! Form::close() !!}
        
                        </div>
                      </div>
        
            </div>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                        <h3><a href="/dashboard">Dashboard</a></h3>
                    </div>

                <ul class="list-unstyled components">
                    <li class="active"> <a href="#home" data-toggle="pill">Home</a></li> 
                    <li><a href="#overalltab" data-toggle="pill">Overall Report</a></li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Actions</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#course" data-toggle="pill">Courses</a></li>
                            <li><a href="#faculty" data-toggle="pill">Facultys</a></li>
                            <li><a href="#subject" data-toggle="pill">Subjects</a></li>
                            <li><a href="#question" data-toggle="pill">Questions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#reports" data-toggle="pill">Reports</a>
                    </li>
                    <li>
                        <a href="#profile" data-toggle="pill">Profile</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                        <li><a href="https://codezyprojects.in">CodEzy Solutions .In @2018</a></li>
                        <li><a href="https://codezyprojects.in" class="download">Developed by <u>CodEzy</u></a></li>        
              </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Open</span>
                            </button>
                        </div>

                        
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                <div class="btn-group" >
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()->name}} <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li role="separator" class="divider"></li>
                                    <li><a  style="background-color:white;" href="{{ route('adminlogout')}}">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                {{-- tab content --}}
                <div class="container-fluid">
                        <div class="tab-content" style="min-height: 20vh; ">
                            <div id="home"  class="tab-pane fade in active">
                                <div class="row">
                                    <div style="margin-bottom:0px" class="col-xs-4">
                                        <div align="center">
                                            <button id="feedback" class="btn btn-info btn-lg" style="width:200px;height:150px;">{{$feedback}}</button>
                                            <p style="padding-top:5px;">Total Feedback Form submitted.</p>    
                                        </div>
                                    </div>
                                    <div style="margin-bottom:0px" class="col-xs-4">
                                            <div align="center">
                                                <button id="facultysss" class="btn btn-info btn-lg" style="width:200px;height:150px;">{{$ffeedback}}</button>
                                                <p style="padding-top:5px;">Total Faculty Feedback submitted.</p>
                                            </div>    
                                    </div>
                                    <div style="margin-bottom:0px" class="col-xs-4">
                                        <div align="center">
                                            <button id="parent" class="btn btn-info btn-lg" style="width:200px;height:150px;">{{$pcollage}}</button>
                                            <p style="padding-top:5px;">Total Parent Feedback submitted.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div align="center">
                                            <button id="student" class="btn btn-info btn-lg" style="width:200px;height:150px;">{{$scollage}}</button>
                                            <p style="padding-top:5px;">Total Student Feedback submitted.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div align="center">
                                            <button id="alumini" class="btn btn-info btn-lg" style="width:200px;height:150px;">{{$alumini}}</button>
                                            <p style="padding-top:5px;">Total Alumini Feedback submitted.</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div align="center">
                                            <button id="totalfeedback" class="btn btn-light btn-lg" style="width:200px;height:150px;">Refresh</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="actions" class="tab-pane fade in">
                            </div>
                            <div id="reports"  class="tab-pane fade in">
                                <div class="container-fluid">
                                    {!! Form::open(['class'=>'form-inline','id'=>'Getform','method'=>'POST','autocomplete'=>'off']) !!}
                                        <div class="form-group" style="padding:10px;">
                                            {{Form::label('', 'Course*')}}
                                            <select id="course_id" name="course_id" class="form-control" style="cursor:pointer;padding-left:5px;">
                                                
                                            @if(!$courses->isEmpty())
                                                    @foreach($courses as $course)
                                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>

                                        <div class="form-group" style="padding:10px;">
                                            {{Form::label('', 'Sem*')}}
                                            {{Form::select('sem', ['1'=>'1','2'=>'2','3'=>'3','4' => '4', '5' => '5','6'=>'6'],null,['id'=>'sem','class'=>'form-control','style'=>'cursor:pointer;'])}}
                                        </div> <!--End of course select-->

                                        <div class="form-group" style="padding:10px;">
                                                {{Form::label('', 'Teacher*')}}
                                                <select id="teacher" name="teacher_id" class="form-control" style="cursor:pointer;min-width:40px;padding-left:5px;padding-right:5px;">
                                                </select>
                                                <button type="button" id="getteacher" class="btn btn-default">Get Teacher</button>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit</button>

                                        <div class="form-group" id="loading" style="display:none;padding:10px;">
                                            <i class="fa fa-spinner fa-spin" style="font-size:44px;" ></i>
                                        </div>
                                        <div  class="form-group">
                                                <span id="getsuccess" class="text-success"></span>
                                                <span id="getdanger" class="text-danger"></span>
                                            </div>
                                    {!! Form::close() !!}<!--End of Form-->
                                </div>
                                <div class="container-fluid" style="margin-top:20px;">
                                    <ul class="nav nav-pills">
                                            <li class="active" ><a data-toggle="pill" href="#chart">Chart(Question Wise)</a></li>
                                            <li><a data-toggle="pill" href="#overall">Overall Report</a></li>
                                    </ul>
                                    <div class="tab-content" style="min-height: 20vh; ">
                                            <div id="chart" class="tab-pane fade in active">
                                                    <div id="cont" clas="container"  style = "width: 550px; height: 400px;">
                                                        </div>
                                            </div>
                                            <div id="overall" class="tab-pane fade in">
                                                    <div clas="container"  style = "min-height: 400px;margin-left:30px;margin-right:30px;">
                                                        <br><br><br>
                                                        <p align="right" id="date"></p><br><br><br>
                                                        <p align="left"><b id="facultyname"></b></p><br>
                                                        <p>This is with regard to the students feedback form filled up by the students last year.
                                                            Satisfaction percentage is derived from the analysis of five point performance parameter of individual teacher.
                                                            Following is the overall rating after the analysis.
                                                        </p><br>
                                                        <p align="left">Excellent :&nbsp;&nbsp; <b><label id="Q5"></label></b></p>
                                                        <p align="left">Very Good :&nbsp;&nbsp; <b><label id="Q4"></label></b></p>
                                                        <p align="left">Good :&nbsp;&nbsp; <b><label id="Q3"></label></b></p>
                                                        <p align="left">Satisfactory :&nbsp;&nbsp; <b><label id="Q2"></label></b></p>
                                                        <p align="left">Needs Improvement :&nbsp;&nbsp; <b><label id="Q1"></label></b></p>
                                                        <br><br>
                                                        <p>You are instructed to take corrective action so as to improve your
                                                            overall rating which is <label id="all"></label></p><br><br><br>
                                                    </div>
                                                    <div class="container">
                                                        <a id="pdfurl" href="">Export to PDF</a>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                                    
                                    
                            </div>
                            <div id="profile"  class="tab-pane fade in">
                                <h1>Welcome to profile</h1>
                            </div>
                            <div id="course"  class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-xs-12" >
                                        <button class="btn btn-lg btn-info" style="margin:10px;width:140px;height:50px;" id="myBtn1">Add Course</button>
                                        <button class="btn btn-lg btn-warning" id="courserefresh" style="margin:10px;width:140px;height:50px;">Refresh</button>
                                    </div>
                                    <div class="col-xs-12">
                                        <table  class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                  </tr>
                                                </thead>
                                                <tbody id="coursetable">
                                                        @if(!$courses->isEmpty())
                                                        @foreach($courses as $course)
                                                        <tr>
                                                            <td>{{$course->id}}</td>
                                                            <td>{{$course->name}}</td>
                                                        </tr/>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                              </table>
                                    </div>
                                </div>
                            </div>
                            <div id="faculty"  class="tab-pane fade in">
                                <div class="row">
                                        <div class="col-xs-12" >
                                            <button class="btn btn-lg btn-info" style="margin:10px;width:140px;height:50px;" id="myBtn2">Add</button>
                                            <button class="btn btn-lg btn-warning" id="teacherrefresh" style="margin:10px;width:140px;height:50px;">Refresh</button>
                                        </div>
                                        <div class="col-xs-12">
                                            <table  class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody id="teachertable">
                                                            @if(!$teachers->isEmpty())
                                                            @foreach($teachers as $teacher)
                                                            <tr>
                                                                <td>{{$teacher->id}}</td>
                                                                <td>{{$teacher->name}}</td>
                                                                <td>{{$teacher->email}}</td>
                                                            </tr/>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                  </table>
                                        </div>
                                </div>
                            </div>
                            <div id="subject"  class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-xs-12" >
                                        <button class="btn btn-lg btn-info" style="margin:10px;width:140px;height:50px;" id="myBtn3">Add</button>
                                        <button class="btn btn-lg btn-warning" id="subjectrefresh" style="margin:10px;width:140px;height:50px;">Refresh</button>
                                    </div>
                                    <div class="col-xs-12">
                                        <table  class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Sem</th>
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Faculty</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="subjecttable">
                                                        @if(!$subjects->isEmpty())
                                                        @foreach($subjects as $subject)
                                                        <tr>
                                                            <td>{{$subject->id}}</td>
                                                            <td>{{$subject->name}}</td>
                                                            <td>{{$subject->sem}}</td>
                                                            <td>{{$subject->course->name}}</td>
                                                            <td>{{$subject->faculty->name}}</td>
                                                        </tr/>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                                </table>
                                    </div>
                                </div>
                            </div>
                            <div id="question"  class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-xs-12" >
                                        <button class="btn btn-lg btn-info" style="margin:10px;width:140px;height:50px;" id="myBtn4">Add</button>
                                        <button class="btn btn-lg btn-warning" id="questionrefresh" style="margin:10px;width:140px;height:50px;">Refresh</button>
                                    </div>
                                    <div class="col-xs-12">
                                        <table  class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Question</th>
                                                    <th scope="col">Type</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="questiontable">
                                                        @if(!$questions->isEmpty())
                                                        @foreach($questions as $q)
                                                        <tr>
                                                            <td>{{$q->id}}</td>
                                                            <td>{{$q->question}}</td>
                                                            <td>{{$q->type}}</td>
                                                        </tr/>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                                </table>
                                    </div>
                                </div>
                            </div>
                            <div id="overalltab"  class="tab-pane fade in">
                                    <div class="row">
                                            <div class="col-xs-12" >
                                                <button class="btn btn-lg btn-info" style="margin:10px;width:140px;height:50px;" id="getallreport">Get Report</button>
                                                <button class="btn btn-lg btn-warning" id="getallreportrefresh" style="margin:10px;width:140px;height:50px;">Refresh</button>
                                            </div>
                                            <div id="showalldata" class="col-xs-12" >

                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    {{-- close tab content --}}
             </div>
        </div>



        <div class="overlay"></div>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="{{asset('js/app.js')}}"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- Google Charts -->
        <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
        </script>
         <script type = "text/javascript">
         </script>
        <script language = "JavaScript">
            google.charts.load('current', {packages: ['corechart']});     
        </script>
        <!--Close google charts-->
        
        <!--Sidebar script-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
         <!--Close sidebar--> 

        <!--All modals-->               
        <script type="text/javascript">
            // Get the modal
            var modal1 = document.getElementById('myModal1');
            var modal2 = document.getElementById('myModal2');
            var modal3 = document.getElementById('myModal3');
             var modal4 = document.getElementById('myModal4');

    
            // Get the button that opens the modal
            var btn1 = document.getElementById("myBtn1");
            var btn2 = document.getElementById("myBtn2");
             var btn3 = document.getElementById("myBtn3");
             var btn4 = document.getElementById("myBtn4");

            
    
            // Get the <span> element that closes the modal
            // var span1 = document.getElementsByClassName("close")[0];
            var span1 = document.getElementById("gg1");
            var span2 = document.getElementById("gg2");
             var span3 = document.getElementById("gg3");
             var span4 = document.getElementById("gg4");

    
            // When the user clicks the button, open the modal 
            btn1.onclick = function() {
                modal1.style.display = "block";
            }
            btn2.onclick = function() {
                modal2.style.display = "block";
            }
             btn3.onclick = function() {
                 modal3.style.display = "block";
             }
            btn4.onclick = function() {
                modal4.style.display = "block";
             }
            span1.onclick = function() {
                modal1.style.display = "none";
            }
            span2.onclick = function() {
                modal2.style.display = "none";
            }
             span3.onclick = function() {
                 modal3.style.display = "none";
             }
             span4.onclick = function() {
                 modal4.style.display = "none";
             }
            
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
                if (event.target == modal2) {
                    modal2.style.display = "none";
                }
                if (event.target == modal3) {
                    modal3.style.display = "none";
                }
                if (event.target == modal4) {
                    modal4.style.display = "none";
                }
            }
        </script>
        <!--Close modal-->

        <!--All Ajax-->
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
            $("#form1").submit(function(e){
                e.preventDefault();
                var form1 = $(this);
                $.ajax({
                url      : "/dashboard/addcourse",
                type     : 'POST',
                cache    : false,
                data     : form1.serialize(),
                success  : function(data) {
                        $("#form1").trigger("reset");
                        $("#success1").fadeIn().html(data['success']);
                        setTimeout(() => {
                        $("#success1").fadeOut('slow');  
                        }, 2000); 
                    },
                complete: function(){
                    $('#courserefresh').click();
                    },
                error: function (reject) {
                     var error1;
                    if( reject.status === 422 ) {
                        var errors1 = $.parseJSON(reject.responseText);
                        $.each(errors1, function(key,val){
                        
                        error1  = error1 + (val[0]);
                    })
                    $("#danger1").fadeIn().html(error1);
                    setTimeout(() => {
                    $("#danger1").fadeOut('slow');  
                    }, 5000);
                    }
                }
                });
                
            });
            $("#form2").submit(function(e){
                e.preventDefault();
                var form2 = $(this);
                $.ajax({
                url      : "/dashboard/addfaculty",
                type     : 'POST',
                cache    : false,
                data     : form2.serialize(),
                success  : function(data) {
                        $("#form2").trigger("reset");
                        $("#success2").fadeIn().html(data['success']);
                        setTimeout(() => {
                        $("#success2").fadeOut('slow');  
                        }, 2000); 
                    },
                    complete: function(){
                    $('#teacherrefresh').click();
                    },
                error: function (reject) {
                     var error2;
                    if( reject.status === 422 ) {
                        var errors2 = $.parseJSON(reject.responseText);
                        $.each(errors2, function(key,val){
                        
                        error2  = error2 + (val[0]);
                    })
                    $("#danger2").fadeIn().html(error2);
                    setTimeout(() => {
                    $("#danger2").fadeOut('slow');  
                    }, 5000);
                    }
                }
                });
                
            });
            $("#form3").submit(function(e){
                e.preventDefault();
                var form3 = $(this);
                $.ajax({
                url      : "/dashboard/addsubject",
                type     : 'POST',
                cache    : false,
                data     : form3.serialize(),
                success  : function(data) {
                        $("#form3").trigger("reset");
                        $("#success3").fadeIn().html(data['success']);
                        setTimeout(() => {
                        $("#success3").fadeOut('slow');  
                        }, 2000); 
                    },
                    complete: function(){
                    $('#subjectrefresh').click();
                    },
                error: function (reject) {
                    var error3=" ";
                    if( reject.status === 422 ) {
                        var errors3 = $.parseJSON(reject.responseText);
                        $.each(errors3, function(key,val){
                        
                            error3  = error3 + (val[0]);
                        })
                        $("#danger3").fadeIn().html(error3);
                        setTimeout(() => {
                        $("#danger3").fadeOut('slow');  
                        }, 5000);
                        //console.log(errors);
                    }
                }
                });
                
            });
            $("#form4").submit(function(e){
                e.preventDefault();
                var form4 = $(this);
                $.ajax({
                url      : '/dashboard/addquestion',
                type     : 'POST',
                cache    : false,
                data     : form4.serialize(),
                success  : function(data) {
                        $("#form4").trigger("reset");
                        $("#success4").fadeIn().html(data['success']);
                        setTimeout(() => {
                        $("#success4").fadeOut('slow');  
                        }, 2000); 
                      //  console.log(data);
                    },
                    complete: function(){
                    $('#questionrefresh').click();
                    },
                error: function (reject) {
                   // var error4;
                    if( reject.status === 422 ) {
                         var error = $.parseJSON(reject.responseText);
                        $("#danger4").fadeIn().html(error['error']);
                        setTimeout(() => {
                        $("#danger4").fadeOut('slow');  
                        }, 5000);
                        }
                    }
                });
                
            });

            $("#Getform").submit(function(e){
                e.preventDefault();
                var form1 = $(this);
                $.ajax({
                url      : "/dashboard/getdata",
                type     : 'POST',
                cache    : false,
                data     : form1.serialize(),
                dataType: 'json',
                beforeSend: function(){
                    $('#loading').show();
                },
                complete: function(){
                    $('#loading').hide();
                },
                success  : function(data1) {
                    function drawChart(data2) { 
                        var data = google.visualization.arrayToDataTable(data2);
            
                        var options = {title: 'Reports (Percentage)',
                                        animation:{ duration: 1000,
                                                    easing: 'linear',
                                                    startup: true },
                                        hAxis: {title: 'Questions'},
                                        'width':1000,
                                        'height':600,
                                        colors: ['#FF2300', '#FF9E00', '#F7FF00', '#8DFF00', '#00FF00'], 
                                        isStacked:true};  
            
                        // Instantiate and draw the chart.
                        var chart = new google.visualization.ColumnChart(document.getElementById('cont'));
                        chart.draw(data, options);
                    }
                    google.charts.setOnLoadCallback(drawChart(data1['chart']));
                                 $('#date').empty();
                                 $('#date').append(data1['year']);
                                 $('#facultyname').empty();
                                 $('#facultyname').append(data1['Faculty']);
                                 $('#all').empty();
                                 $('#all').append(data1['Report'].all);
                                 $('#Q1').empty();
                                 $('#Q1').append(data1['Report'].Q1);
                                 $('#Q2').empty();
                                 $('#Q2').append(data1['Report'].Q2);
                                 $('#Q3').empty();
                                 $('#Q3').append(data1['Report'].Q3);
                                 $('#Q4').empty();
                                 $('#Q4').append(data1['Report'].Q4);
                                 $('#Q5').empty();
                                 $('#Q5').append(data1['Report'].Q5);
                                 $("#pdfurl").attr("href", "");
                                 $("#pdfurl").attr("href", "/dashboard/getpdfdata/"+data1['pdf']+"/"+data1['course_id']+"");
                            
                    },
                error: function (reject) {
                        $('#all').empty();
                        $('#facultyname').empty();
                        $("#cont").empty();
                        $('#date').empty();
                        $('#Q5').empty();
                        $('#Q4').empty();
                        $('#Q3').empty();
                        $('#Q2').empty();
                        $('#Q1').empty();
                        $("#pdfurl").attr("href", "");


                    //  var error1;
                    // if( reject.status === 422 ) {
                    //     var errors1 = $.parseJSON(reject.responseText);
                    //     $.each(errors1, function(key,val){
                        
                    //     error1  = error1 + (val[0]);
                    // })
                    // $("#danger1").fadeIn().html(error1);
                    var error3=" ";
                    if( reject.status === 422 ) {
                        var errors3 = $.parseJSON(reject.responseText);
                        $.each(errors3, function(key,val){
                        
                            error3  = error3 + (val[0]);
                        })
                        $("#getdanger").fadeIn().html(error3);
                        setTimeout(() => {
                        $("#getdanger").fadeOut('slow');  
                        }, 2000); 
                        //console.log(errors);
                    }
                    else{
                         var error = $.parseJSON(reject.responseText);
                        $("#getdanger").fadeIn().html(error['error']);
                        setTimeout(() => {
                        $("#getdanger").fadeOut('slow');  
                        }, 5000);
                    }
                        // $("#getdanger").fadeIn().html(reject);
                        // setTimeout(() => {
                        // $("#getdanger").fadeOut('slow');  
                        // }, 2000); 
                   // console.log(reject);
                }
                });
                
            });

            $("#getteacher").click(function(){
                $.ajax({
                url      : "/dashboard/getteacher",
                type     : 'POST',
                cache    : false,
                data     : {'course_id':$('#course_id').val() ,
                             'sem':$('#sem').val()
                            },
                dataType: 'json',
                success  : function(data) {
                    // console.log(data);
                    var t =  $('#teacher');
                    t.empty();
                   // console.log(data);
                    $.each(data, function(index){
                        
                        t.append('<option value="'+ data[index].id +'">'+data[index].name+'</option>');
                        })
                    },
                error: function (reject) {
                    console.log(reject);
                }
                }); 
            });

            $("#courserefresh").click(function(){
                $("#coursetable tr").remove();
                $.ajax({
                url      : "/dashboard/getcourse",
                type     : 'POST',
                cache    : false,
                dataType: 'json',
                success  : function(data) {
                    var table = $("#coursetable");
                    $.each(data, function(index){
                        table.append('<tr><td>'+data[index].id+'</td><td>'+data[index].name+'</td></tr>');
                    })
                },
                error: function (reject) {
                    console.log(reject);
                }
            }); 
            });
            $("#teacherrefresh").click(function(){
                $("#teachertable tr").remove();
                $.ajax({
                url      : "/dashboard/getfacultydata",
                type     : 'POST',
                cache    : false,
                dataType: 'json',
                success  : function(data) {
                    var table = $("#teachertable");
                    $.each(data, function(index){
                        table.append('<tr><td>'+data[index].id+'</td><td>'+data[index].name+'</td><td>'+data[index].email+'</td></tr>');
                    })
                },
                error: function (reject) {
                    console.log(reject);
                }
            }); 
            });
            $("#subjectrefresh").click(function(){
                $("#subjecttable tr").remove();
                $.ajax({
                url      : "/dashboard/getsubject",
                type     : 'POST',
                cache    : false,
                dataType: 'json',
                success  : function(data) {
                    var table = $("#subjecttable");
                    $.each(data, function(index){
                        table.append('<tr><td>'+data[index].id+'</td><td>'+data[index].name+'</td><td>'+data[index].sem+'</td><td>'+data[index].course+'</td><td>'+data[index].teacher+'</td></tr>');
                    })
                },
                error: function (reject) {
                    console.log(reject);
                }
            }); 
            });
            $("#questionrefresh").click(function(){
                $("#questiontable tr").remove();
                $.ajax({
                url      : "/dashboard/getquestion",
                type     : 'POST',
                cache    : false,
                dataType: 'json',
                success  : function(data) {
                    var table = $("#questiontable");
                    $.each(data, function(index){
                        table.append('<tr><td>'+data[index].id+'</td><td>'+data[index].question+'</td><td>'+data[index].type+'</td></tr>');
                    })
                },
                error: function (reject) {
                    console.log(reject);
                }
            }); 
            });

            $("#getallreport").click(function(){
                $.ajax({
                url      : "/dashboard/getalldata",
                type     : 'POST',
                cache    : false,
                dataType: 'json',
                success  : function(data) {
                    $.each(data, function(index){
                        var container = $("#showalldata");
                       // console.log(data[index].name);
                        container.append('<p align="center"><b>'+data[index].name+'</b></p><br>');
                        container.append('<table id = '+ data[index].id +' class="table table-bordered"><thead><tr><th>Name</th><th>Excellent</th><th>Very Good</th><th>Good</th><th>Satisfactory</th><th>Needs Improvement</th></tr></thead><tbody>');
                        var temp = data[index].allsubjects;
                        var tableid = '#'+data[index].id;
                       var table = $(tableid);
                        $.each(temp, function(index2){
                           table.append('<tr><td>'+temp[index2].faculty+'</td><td>'+temp[index2].Q5+'</td><td>'+temp[index2].Q4+'</td><td>'+temp[index2].Q3+'</td><td>'+temp[index2].Q2+'</td><td>'+temp[index2].Q1+'</td></tr>');
                           
                        })
                        table.append('</tbody></table><br>');
                    })
                },
                error: function (reject) {
                    console.log(reject);
                }
            }); 
            });

            $('#totalfeedback').click(function(){
                $.ajax({
                    url      : "/dashboard/totalfeedback",
                    type     : 'POST',
                    dataType: 'json',
                    success  : function(data) {
                        $('#feedback').text(data.feedback);
                        $('#parent').text(data.pcollage);
                        $('#student').text(data.scollage);
                        $('#facultysss').text(data.faculty);
                        $('#ffeedback').text(data.ffeedback);
                        }, 
                    error: function (reject) {
                        $('#parent').text('Error. Try Again');
                        $('#student').text('Error. Try Again');
                        $('#feedback').text('Error. Try Again');
                        $('#facultysss').text('Error. Try Again');
                        $('#ffeedback').text('Error. Try Again');
                    }
                 }); 
                });
        </script>
        <!--Close Ajaxs-->

        <!--Other script-->
        <script>
                $("#course_id").change(function(){
                    $('#teacher').empty();
                    $('#all').empty();
                    $('#facultyname').empty();
                    $("#cont").empty();
                    $('#date').empty();
                    $('#Q5').empty();
                    $('#Q4').empty();
                    $('#Q3').empty();
                    $('#Q2').empty();
                    $('#Q1').empty();
                });
                $("#sem").change(function(){
                    $('#teacher').empty();
                    $('#all').empty();
                    $('#facultyname').empty();
                    $("#cont").empty();
                    $('#date').empty();
                    $('#Q5').empty();
                    $('#Q4').empty();
                    $('#Q3').empty();
                    $('#Q2').empty();
                    $('#Q1').empty();
                });  

        </script>        
        <!--Closeother-->

    </body>
</html>
