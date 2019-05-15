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
        <title>Edit Course</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 align="center">Edit Course</h1>
        </div>
        <div class="container">
            {!! Form::open(['id'=>'form1','class'=>'form-vertical','autocomplete'=>'off']) !!}  
            {{Form::hidden('id',$course->id)}}
            <div align="center" style="margin-top:50px;background-color:red;">
            <div  class="form-group col-sm-12">
                <label style="font-size:20px;" class="control-label" class="col-sm-12"> Course Id : </label> <button type="button" class="btn btn-lg btn-primary" disabled>{{$course->id}}</button>
            </div>
            <div  class="form-group col-sm-12"  style="margin-top:20px;">
                <label style="font-size:20px;" class="control-label" class="col-sm-12"> Edit Course Name : </label> <input name="name" type="text" text="{{$course->name}}"/>
            </div>
            <div class="form-group col-sm-12"  style="margin-top:20px;">
                    <div align="center">
                        <button type="Submit" class="btn btn-primary" style="width:120px;height:40px;">Submit</button>
                        <button type="Reset" value="reset" class="btn btn-warning" style="width:120px;height:40px;margin-left:20px;">Reset</button>
                    </div>
                </div>
            </div>
            <div align="center">
                <span id="success" class="text-success"></span>
                <span id="danger" class="text-danger"></span>
                </div>
            {!! Form::close() !!}
        </div>
    </body>
            <!-- jQuery CDN -->
            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
    $("#form1").submit(function(e){
        e.preventDefault();
        var form = $(this);
        $.ajax({
        url      : '/dashboard/course/submit',
        type     : 'POST',
        cache    : false,
        data     : form.serialize(),
        success  : function(data) {
                $("#form1").trigger("reset");
                $("#success").fadeIn().html(data['success']);
                setTimeout(() => {
                $("#success").fadeOut('slow'); 
                window.close(); 
                }, 1000); 
                
            },
        error: function (reject) {
            if( reject.status === 422 ) {
                 var error = $.parseJSON(reject.responseText);
                $("#danger").fadeIn().html(error['error']);
                setTimeout(() => {
                $("#danger").fadeOut('slow');  
                }, 5000);
                }
            }
        });
        
    });
    </script>
</html>