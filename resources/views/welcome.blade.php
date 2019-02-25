@extends('layouts.app')
@section('content')
		<hr>
    <div class="container-fluid" style="min-height: 100vh; padding: 0px;">
		<div class="container-fluid" id="ty">
            <div class="container-fluid" id="ty">
                <ul class="nav nav-pills nav-justified">
                    <li class="active" ><a data-toggle="pill" href="#students">From Students</a></li>
                    <li><a data-toggle="pill" href="#facultys">From Facultys</a></li>
                    <li><a data-toggle="pill" href="#management">From Management</a></li>
                    <li><a data-toggle="pill" href="#parents">From Parents</a></li>
                    <li><a data-toggle="pill" href="#employers">From Employers</a></li>
                </ul>
            </div>

			<div class="tab-content">
				    <div id="students" class="tab-pane fade in active">
                        <div class="row">
                        <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                        <a class="tabslink" href="/students/aboutcollage">  
                               About College</a></div>
                         <div class="col-xs-6 col-md-3 tabsclass">  
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                         <a class="tabslink"  href="/students/aboutfacultys">
                             About Facultys</a></div>
                        <div class="col-xs-6 col-md-3 tabsclass"> 
                            <i class="fa fa-caret-right"  aria-hidden="true"></i>
                         <a class="tabslink" href="/students/aboutcurriculum">
                           About Curriculum</a></div>
                        </div>  <!-- End of row -->                    
				    </div> <!--End of students tab-->
                
				    <div id="facultys" class="tab-pane fade">
				       <div class="row">
                            <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                                <a class="tabslink" href="/facultys/aboutcollage">  
                               About College</a>
                            </div>
                            <div class="col-xs-6 col-md-3 tabsclass">
                                <i class="fa fa-caret-right"  aria-hidden="true"></i>
                                   <a class="tabslink" href="/facultys/aboutcurriculum">  
                                  About Curriculum</a>
                               </div>
                        </div>
				    </div><!-- End of facultys-->
                
				    <div id="parents" class="tab-pane fade">
				      <div class="row">
                        <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                           <a class="tabslink"  href="aboutcollage.html">  
                               About Local Management</a></div>
                        </div>
				    </div><!-- End of Parents tab-->
                
				    <div id="employers" class="tab-pane fade">
				       <div class="row">
                        <div class="col-xs-6 col-md-3 tabsclass">
                             <i class="fa fa-caret-right"  aria-hidden="true"></i>
                           <a class="tabslink"  href="/Fromemployers/Aboutemployee.php">  
                             About Employee</a></div>
                        </div>
                    </div><!-- End of Employers-->

                    <div id="management" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-6 col-md-3 tabsclass">
                              <i class="fa fa-caret-right"  aria-hidden="true"></i>
                                <a class="tabslink"  href="/Fromemployers/Aboutemployee.php">  
                              About Local Management</a></div>
                        </div>
                    </div><!-- End of Employers-->
	  		</div>
  		</div>
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
@endsection