<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        
    <title>{{config('app.name','Info')}}</title>
</head>
<body>
        @include('inc.messages')
        @include('flash::message')
</body>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    jQuery(document).ready(function() {
    setTimeout(function() {
         window.close();
    }, 2000);
});
</script>
</html>