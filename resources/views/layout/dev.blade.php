<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Blog</title>
        
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Blog">
        <meta name="author" content="Labkita">    
        <link rel="shortcut icon" href="favicon.ico"> 
        
        <!-- FontAwesome JS-->
        <script defer src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
        
        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/theme-8.css') }}">

    </head> 

    <body>
        @include('partials.dev.author')
        <div class="main-wrapper">
            @yield('content')
            {{-- @include('partials.dev.subscribe-me') --}}
            @include('partials.dev.footer')
        </div><!--//main-wrapper-->
        
        <!-- Javascript -->          
        <script src="{{ asset('assets/plugins/popper.min.js') }}"></script> 
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script> 
    </body>
</html> 

