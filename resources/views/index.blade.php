@extends('layouts.app')
@section('content')
		<hr>
  <div class="container-fluid" style="margin:30px;margin-top:50px;">
		<div class="container-fluid">
                <ul class="nav nav-pills nav-justified">
                    <li class="active" ><a data-toggle="pill" href="#student">From Student</a></li>
                    <li><a data-toggle="pill" href="#faculty">From Faculty</a></li>
                    <li><a data-toggle="pill" href="#management">From Management</a></li>
                    <li><a data-toggle="pill" href="#parent">From Parent</a></li>
                    <li><a data-toggle="pill" href="#employer">From Employee</a></li>
                    <li><a data-toggle="pill" href="#alumini">From Alumini</a></li>

                </ul>
    </div>

		<div class="tab-content" style="min-height: 20vh; ">
				    <div id="student" class="tab-pane fade in active">
                        <div class="row">
                        <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                        <a class="tabslink" href="/student/aboutcollege">  
                               About College</a></div>
                               <div class="col-xs-6 col-md-3 tabsclass">
                                <i class="fa fa-caret-right"  aria-hidden="true"></i>
                                   <a class="tabslink modellink"  onclick='check()'>  
                                  About Teachers/Curriculum</a>
                               </div>
                        </div>  <!-- End of row -->                    
				    </div> <!--End of students tab-->
                
				    <div id="faculty" class="tab-pane fade">
				       <div class="row">
                            <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                                <a class="tabslink" onclick='check2()'>  
                               About College</a>
                            </div>
                        </div>
				    </div><!-- End of faculty-->
                
				    <div id="parent" class="tab-pane fade">
				      <div class="row">
                        <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                           <a class="tabslink"  href="/parent/aboutcollege">  
                               About College</a></div>
                        </div>
				    </div><!-- End of Parents tab-->
                
				    <div id="employer" class="tab-pane fade">
              <div class="row">
                <div class="col-xs-6 col-md-3 tabsclass">
                  <i class="fa fa-caret-right"  aria-hidden="true"></i>
                    <a class="tabslink"  href="/employee/aboutcollege">  
                  About College</a>
                </div>
              </div>
            </div><!-- End of Employers-->

            <div id="management" class="tab-pane fade">
                <div class="row">
                    <div class="col-xs-6 col-md-3 tabsclass">
                      <i class="fa fa-caret-right"  aria-hidden="true"></i>
                        <a class="tabslink"  href="/management/localmanagement">  
                      About Local Management</a></div>
                </div>
            </div><!-- End of management-->    

            <div id="alumini" class="tab-pane fade">
                    <div class="row">
                        <div class="col-xs-6 col-md-3 tabsclass">
                          <i class="fa fa-caret-right"  aria-hidden="true"></i>
                            <a class="tabslink"  href="/alumini/aboutcollege">  
                          About College</a></div>
                    </div>
            </div>  <!-- End of alumini-->               
  </div><!--end of main wrapper-->
      {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif --}}


            {{-- <div id="myModal1" class="modal fade">
              <!-- Modal content -->
              <div class="modal-content">
                      <div class="modal-header">
                        <span style="margin-top: 17px" class="close2">&times;</span>
                        <h2 align="center">Student Login</h2>
                      </div>
                      <div class="modal-body row">
                              {!! Form::open(['url' => '/login','method'=>'POST','class'=>'form-vertical','autocomplete'=>'off']) !!}    
                           <form class="form-vertical" method="post" action="" style="margin-top: 5px" autocomplete="off">
                              <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                              <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Student Id :*  </label>
                              <input type="text" name="username" placeholder="Collage ID"  class="form-control" required/>
                              </div>
                               <div class="form-group col-xs-12" style="padding:12px">
                              <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Password :*  </label>
                              <input type="password" placeholder="Phoneno as password" name="password" class="form-control" required/>
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
                              {{!! Form::close() !!}}
                         </form>
      
                      </div>
                    </div>
      
          </div> --}}

          {{-- <script>
            var modal = document.getElementById('myModal1');
            
            // Get the button that opens the modal
            // var btn = document.getElementById("myBtn");
            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close2")[0];
            
            // When the user clicks the button, open the modal 
            $("a.modellink").click(function(){
                alert("yes link clicked")
                modal.style.display = "block";
                    });
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script> --}}
@endsection