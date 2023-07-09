
        <!-- BOOTSTRAP JS -->
        <script src="{{asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- POPPER JS -->
        <script src="{{asset('build/assets/libs/@popperjs/core/umd/popper.min.js')}}"></script>

        <!-- DEFAULTMENU JS -->
        @vite('resources/assets/js/defaultmenu.js')


        <!-- CATEGORYMENU JS -->
        @vite('resources/assets/js/category-menu.js')
            

        <!-- ACCEPT-COOKIE JS -->
        @vite('resources/assets/js/cookies.js')


        <!-- SIMONWEP-PICKER JS -->
        <script src="{{asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js')}}"></script>

        @yield('scripts')
