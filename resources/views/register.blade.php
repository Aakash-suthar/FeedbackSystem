<html>
    <head></head>
    <body>
            {!! Form::open(['url' => '/register','method'=>'POST','autocomplete'=>'off']) !!}    

            <input type="text" name="username"/>
            <input type="text" name="firstname"/>

            <input type="text" name="lastname"/>

            <input type="password" name="password"/>
            <input type="email" name="email"/>
            <input type="submit" value="submit"/>
            {!! Form::close() !!}<!--End of Form-->
    </body>
    </html>