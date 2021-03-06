<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{config('app.name','Feebback')}}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
    </head>
    <body>
            <nav class="navbar navbar-inverse row" style="padding:0px;">
                    <div class="container col-xs-10">
                      <a class="navbar-brand" href="/" style= "margin:10px;padding-left:30px;font-size:30px;text-align:center;">Feedback System</a>
                    </div>
                    <div class="col-xs-2">
                            <!-- Trigger/Open The Modal -->
                                  <button class="btn btn-primary btn-md" id="myBtn">Admin</button>
                    </div>
                   
                   
            </nav>
                            <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                                <div class="modal-header">
                                  <span style="" class="close">&times;</span>
                                  <h2 align="center">Admin Login</h2>
                                </div>
                                <div class="modal-body row">
                                        {!! Form::open(['url'=>'/dashboard/login','method'=>'POST','class'=>'form-vertical','autocomplete'=>'off']) !!}  
                                        {{ csrf_field() }}
                                        <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                        <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Admin ID :*  </label>
                                        <input type="text" name="id"  class="form-control" required/>
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
                                        <div align="center">
                                            <span id="danger1" class="text-danger"></span>
                                        </div>
                                        {!! Form::close() !!}
                
                                </div>
                              </div>
                
                    </div>
        <div id="myModals" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                      <div class="modal-header">
                            <span id="gg" class="close">&times;</span>
                            <h2 align="center">Student Login</h2>
                      </div>
                      <div class="modal-body row">
                              {!! Form::open(['url'=>'/student/login','method'=>'POST','class'=>'form-vertical','autocomplete'=>'off']) !!}    
                              {{ csrf_field() }}
                              <form class="form-vertical" method="post" action="" style="margin-top: 5px" autocomplete="off">
                              <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                              <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Student ID :*  </label>
                              <input type="text" name="id" placeholder="College ID"  class="form-control" required/>
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
                              <div align="center">
                                <span id="danger2" class="text-danger"></span>
                            </div>
                              {!! Form::close() !!}
                         </form>
      
                      </div>
                    </div>
      
          </div>
          <div id="myModalss" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                    <div class="modal-header">
                          <span id="gg3" class="close">&times;</span>
                          <h2 align="center">Faculty Login</h2>
                    </div>
                    <div class="modal-body row">
                            {!! Form::open(['url'=>'/faculty/login','method'=>'POST','class'=>'form-vertical','autocomplete'=>'off']) !!}    
                            {{ csrf_field() }}
                            <form class="form-vertical" method="post" action="" style="margin-top: 5px" autocomplete="off">
                            <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                            <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Faculty ID :*  </label>
                            <input type="text" name="id" placeholder="Faculty ID"  class="form-control" required/>
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
                            <div align="center">
                              <span id="danger3" class="text-danger"></span>
                          </div>
                            {!! Form::close() !!}
                       </form>
    
                    </div>
                  </div>
    
        </div>


        @include('inc.messages')
        @include('flash::message')
    <div class="container-fluid">
        @yield('content')
    </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById('myModal');
        var modal1 = document.getElementById('myModals');
        var modal2 = document.getElementById('myModalss');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span2 = document.getElementById("gg");
        var span3 = document.getElementById("gg3");


        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            var AuthUser = "{{{ (Auth::guard('admin')->user()) ? Auth::guard('admin')->user() : null }}}";
            if(AuthUser){
                window.location.href = "{{URL::to('/dashboard')}}";
            }
            else {
                modal.style.display = "block";
           } 
        }
        function check() {
            var AuthUser2 = "{{{ (Auth::user()) ? Auth::user() : null }}}";
            if(AuthUser2){
            //console.log(modal1);
            window.location.href = "{{URL::to('/student/teacherandcurriculum')}}";
                }
            else {
                modal1.style.display = "block";
           } 
        }
        function check2() {
                var AuthUser3 = "{{{ (Auth::guard('faculty')->user()) ? Auth::guard('faculty')->user() : null }}}";
                if(AuthUser3){
                    window.location.href = "{{URL::to('/faculty/aboutcollege')}}";
                }
                else{
                        modal2.style.display = "block";
                }
            }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        span2.onclick = function() {
            modal1.style.display = "none";
        }
        span3.onclick = function() {
            modal2.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
            if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }
    </script>
    <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
 
</html>