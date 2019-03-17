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
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
    </head>
    <body>
            <nav class="navbar navbar-inverse row" style="padding:0px;">
                    <div class="container col-xs-10">
                      <a class="navbar-brand" href="/" style= "margin:10px;padding-left:30px;font-size:30px;text-align:center;">Feedback System</a>
                      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button> --}}
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
                
                    </div>
        <div id="myModals" class="modal">
              <!-- Modal content -->
              <div class="modal-content">
                      <div class="modal-header">
                            <span id="gg" class="close">&times;</span>
                            <h2 align="center">Student Login</h2>
                      </div>
                      <div class="modal-body row">
                              {!! Form::open(['url' => '/students/logincheck','method'=>'POST','class'=>'form-vertical','autocomplete'=>'off']) !!}    
                           <form class="form-vertical" method="post" action="" style="margin-top: 5px" autocomplete="off">
                              <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                              <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Student Id :*  </label>
                              <input type="text" name="id" placeholder="Collage ID"  class="form-control" required/>
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
    <div class="footer"  style="position: fixed;right: 0;bottom: 0;margin-right: 5px;">
            <p align="right"><i>All rights reserved by AakashF <i class="far fa-registered"></i></i></p>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
        // Get the modal
        var modal = document.getElementById('myModal');
        var modal1 = document.getElementById('myModals');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span2 = document.getElementById("gg");

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }
        function check() {
            console.log(modal1);
                             modal1.style.display = "block";
                    }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        span2.onclick = function() {
            modal1.style.display = "none";
        }
        
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>
    <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
 
</html>