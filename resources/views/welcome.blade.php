<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cinema Management System</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
     </head> 
    <body>
        <div class="header">
            @include('layouts.navigationbar')
            @include('layouts.slideshow')
        </div>
    </body>  
</html>
