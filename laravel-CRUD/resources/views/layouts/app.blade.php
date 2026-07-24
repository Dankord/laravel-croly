<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <meta viewport="width=device-width, initial-scale=1.0">
        <title> {{config('app.name', 'Home')}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <link rel="styleheet" href="{{asset('resource/css/app.css')}}"> --}}
    </head>
    <body>
        @include('inc.navbar')
        <div class="container mt-5">
            @yield('content')
        </div>
    </body>
</html>