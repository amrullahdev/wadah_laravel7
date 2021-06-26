<body>
    <div class="pb-4" id="app">
    <div class="p-2 bgf-dark text-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm">
                        <div>
                            <router-link to="/" class="tdn text-white font-weight-bolder" exact-active-class="text-white">
                                AMR Apps
                            </router-link>
                        </div>
                    </div>
                    <div class="col-sm text-right">
                        <div>
                            <router-link to="/login" class="tdn text-white" exact-active-class="text-white">
                                Login
                            </router-link>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container py-4">
            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>

        </div>
    </div>
    <script src="/js/app.js" defer></script>
</body>
