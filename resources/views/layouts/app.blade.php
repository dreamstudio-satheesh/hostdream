<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-hover" data-theme-mode="light">
        
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="Hosting Website Templates, Laravel Hosting Website Template, Hosting Laravel Template, Professional Hosting Laravel Template, Top Web Hosting Laravel Templates, Web Hosting Laravel Template, web hosting Bootstrap template, This professional Hosting Laravel Template, Web Hosting Template, Bootstrap hosting template, Web Hosting Template Bootstrap, Bootstrap Web Hosting Template, Web Hosting Programming Template, Web Hosting vite admin template, Web Hosting vite laravel admin, Web Hosting vite laravel admin dashboard, Web Hosting vite laravel bootstrap admin template">

        <!-- TITLE -->
        <title>DreamHost – Top cloud service provider in india </title>
        
        <!-- FAVICON -->
        <link rel="icon" href="{{asset('build/assets/images/brand/favicon.ico')}}" type="image/x-icon">
        
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('build/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])

        
        <!-- SIMONWEP-PICKER CSS -->
        <link href="{{asset('build/assets/libs/@simonwep/pickr/themes/classic.min.css')}}" rel="stylesheet" >
        <link href="{{asset('build/assets/libs/@simonwep/pickr/themes/monolith.min.css')}}" rel="stylesheet" >
        <link href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}" rel="stylesheet" >

        <!-- ICONS CSS -->
        <link href="{{asset('build/assets/icon-fonts/icons.css')}}" rel="stylesheet">

        @yield('styles')
    </head>

    <body class="main-body light-theme">
            
        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top" class="back-to-top rounded-circle shadow all-ease-03 fade-in">
            <i class="fe fe-arrow-up"></i>
        </a>
        <!-- END BACK-TO-TOP -->

        <!-- PAGE -->
        <div class="page">
            <div class="head_menu_container">

                <!-- HEADER -->
                @include('layouts.components.header')

                <!-- END HEADER -->

                <!-- SIDEBAR -->
                @include('layouts.components.sidebar')

                <!-- END SIDEBAR -->
            </div>
            <!-- MAIN-CONTENT -->
            @yield('content')
            <!-- END MAIN-CONTENT -->
            
            <!-- FOOTER -->
            @include('layouts.components.footer')

            <!-- END FOOTER -->
        </div>
        <!-- END PAGE -->

        <!-- ACCEPT-COOKIE -->
        @include('layouts.components.accept-cookie')

        <!-- END ACCEPT-COOKIE -->

        <!-- SCRIPTS -->
        
        @include('layouts.components.scripts')

        <!-- STICKY JS -->
		<script src="{{asset('build/assets/sticky.js')}}"></script>

        <!-- APP JS -->
		@vite('resources/js/app.js')

        
        <!-- END SCRIPTS -->
        
    </body>
</html>
