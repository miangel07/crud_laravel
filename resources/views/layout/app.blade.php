<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
       
    </head>
   <body>
<nav>
    <div>
       <a href="{{route('registro')}}">CREAR CUENTA</a>
    </div>
</nav>
    <div> 
    </div>
    
    @yield('contenido')
  

   </body>
</html>
