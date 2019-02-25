<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','Feebback')}}</title>

        <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
    </head>
    <body>
        <div id="myContainer" class="container-fluid MainContainer">
                    <div class="row" style="padding: 0px;margin:0px;">
                            <div  class="col-9 col-xs-9" style="padding: 0px;margin: 0px;">
                                <img class="logo">
                                <h2 style="margin-top: 15px; " class="text-info" align="center">Feedback Form
                                </h2>
                            </div>
                            <div style="margin-top: 15px;padding: 0px;float: right" class="col-3 col-xs-3" align="center">
                              <!-- Trigger/Open The Modal -->
                                    <button style="float: right;" class="btn btn-info" id="myBtn">Admin</button>
                            </div>
                    </div>
                            <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!-- Modal content -->
                        <div class="modal-content">
                                <div class="modal-header">
                                  <span style="margin-top: 17px" class="close">&times;</span>
                                  <h2 align="center">Admin Login</h2>
                                </div>
                                <div class="modal-body row">
                                    <form class="form-vertical" method="post" action="" style="margin-top: 5px" autocomplete="off">
                                        <div style="padding:12px;padding-bottom: 0px;margin-bottom: 0px" class="form-group col-xs-12">
                                        <label for="name" class="col-xs-12" style="margin-bottom: 10px;">Username :*  </label>
                                        <input type="text" name="name"  class="form-control" required/>
                                        </div>
                                         <div class="form-group col-xs-12" style="padding:12px">
                                        <label for="username" class="col-xs-12" style="margin-bottom: 10px;">Password :*  </label>
                                        <input type="password" name="password" class="form-control" required/>
                                        </div>
                                         <div class="form-group col-xs-12" style="margin-top:10px;">
                                             <div style="margin: 0px;padding: 0px;" class="row">
                                            <div class="col-xs-6" style="padding: 0px;">
                                            <input type="Submit" class="btn btn-info col-xs-6" style="float: right;width: 80px;" value="Submit"/></div>
                                             <div style="padding: 0px;margin-left: 10px;" class="col-xs-5">
                                            <input style="margin: 0px;width: 80px" type="Reset" class="btn btn-warning col-xs-6" value="Reset"/>  
                                            </div>
                                                 
                                             </div>
                                        </div>
                                    </form>
                
                                </div>
                              </div>
                
                    </div>
                </div>
        @include('inc.messages')
        @include('flash::message')
    <div class="container-fluid">
        @yield('content')
    </div>
    <div class="footer">
            <p align="right"><i>All rights reserved by AakashF <i class="far fa-registered"></i></i></p>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
</html>