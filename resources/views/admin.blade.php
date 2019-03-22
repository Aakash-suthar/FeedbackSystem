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
                          <h2 align="center">Add Teacher</h2>
                        </div>
                        <div class="modal-body row">
                                {!! Form::open(['id'=>'form2','class'=>'form-vertical','autocomplete'=>'off']) !!}  
                                <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                <label for="name" class="col-xs-12" style="margin-bottom: 10px;"> Teacher Id :*  </label>
                                <input type="text" name="id"  class="form-control" required/>
                                </div>
                                 <div class="form-group col-xs-12" style="padding:12px">
                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Teacher Name :*  </label>
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
                                                <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Teacher Id :*  </label>
                                                <input type="text" name="teacher_id" class="form-control" required/>
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
                                {{Form::select('type',['collage'=>'About Collage','currriculum'=>'About Currriculum','teacher'=>'About Teacher'],null,['class'=>'form-control'])}}                                </div>
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
                    {{-- <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="#actions" data-toggle="pill">Action</a></li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
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
                                <h1>Welcome to Feedback</h1>
                            </div>
                            <div id="actions" class="tab-pane fade in">
                                <div class="row">
                                  <div class="col-xs-3">  
                                      <button class="btn btn-lg btn-info" style="margin:40px;width:200px;height:120px;" id="myBtn1">Add Course</button>
                                  </div>
                                  <div class="col-xs-3">
                                      <button  class="btn btn-lg btn-warning" style="margin:40px;width:200px;height:120px;" id="myBtn2">Add Teacher</button>
                                  </div>
                                  <div class="col-xs-3">
                                      <button class="btn btn-lg btn-danger" style="margin:40px;width:200px;height:120px;"  id="myBtn3">Add Subject</button>
                                  </div>
                                  <div class="col-xs-3">
                                      <button  class="btn btn-lg btn-success" style="margin:40px;width:200px;height:120px;"  id="myBtn4">Add Question</button>
                                  </div>
                              </div>
                            </div>
                            <div id="reports"  class="tab-pane fade in">
                                    {{-- <ul class="nav navbar-nav navbar-right">
                                            <li>
                                            <div class="btn-group" >
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Course <span class="caret"></span>
                                                </button>
                                                
                                                <ul class="dropdown-menu">
                                                    @if(!$courses->isEmpty())
                                                        @foreach($courses as $course)
                                                            <li>
                                                                    <form id="{{$course->id}}" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                            {{Form::hidden('course_id',$course->id)}}
                                                                        </form>     
                                                                 <a onclick="event.preventDefault();
                                                                     document.getElementById('#{{$course->id}}').submit();">{{$course->name}}
                                                                </a> 
                                                            <a class="{{$course->id}}">{{$course->name}}</a>
                                                               
                                                            </li>                                                           
                                                         @endforeach
                                                    @endif
                                                         <li role="separator" class="divider"></li>
                                                <li><a  style="background-color:white;" href="{{ route('adminlogout')}}">Logout</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        </ul> --}}
                                        @if(!$courses->isEmpty())
                                        @foreach($courses as $course)
                                            {{-- <li> --}}
                                                    <form id="{{$course->id}}" style="display: block;">
                                                            {{ csrf_field() }}
                                                            {{Form::hidden('course_id',$course->id)}}
                                                            <input type="submit" value="submit">
                                                        </form>     
                                                 {{-- <a onclick="event.preventDefault();
                                                     document.getElementById('#{{$course->id}}').submit();">{{$course->name}}
                                                </a>  --}}
                                            {{-- <a class="{{$course->id}}">{{$course->name}}</a> --}}
                                               
                                            {{-- </li>                                                            --}}
                                         @endforeach
                                    @endif
                            </div>
                            <div id="profile"  class="tab-pane fade in">
                                <h1>Welcome to profile</h1>
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
        {{-- add course --}}
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
                url      : "/dashboard/addteacher",
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
        </script>
      
      @if(!$courses->isEmpty())
        @foreach($courses as $course)
            <script>         
                    $("#{{$course->id}}").submit(function(e){
                        e.preventDefault();
                        var form1 = $(this);
                        $.ajax({
                        url      : "/dashboard/getdata",
                        type     : 'POST',
                        cache    : false,
                        data     : form1.serialize(),
                        success  : function(data) {
                           console.log(data);
                            },
                        error: function (reject) {
                            console.log(reject);
                            }
                        });
                        });
            </script>
        @endforeach
      @endif
      
 

    </body>
</html>
