<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            </ul>
        </nav>
        @include('inc.sidebar-df')
        <div class="content-wrapper">
            <div class="container py-4">
                <router-view></router-view>
                <vue-progress-bar></vue-progress-bar>
            </div>
        </div>
    </div>
    <script>
        @auth
            window.user = @json(auth()->user())
        @endauth
    </script>
    <script src="/js/app.js" defer></script>
    {{-- <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
    </script> --}}
</body>
