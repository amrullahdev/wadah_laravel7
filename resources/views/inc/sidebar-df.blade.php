<aside class="main-sidebar sidebar-light-lime ">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-bolder">AMR APP</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        @auth
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image " style="align-self: center;">
                {{-- <img src="/img/profile/admin.png " class="img-circle align-middle" alt="User Image"> --}}
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block font-weight-bolder"> {{ substr(auth()->user()->nama,0,15) }} </a>
                <small class="d-block text-secondary font-weight-bold">
                    {{ auth()->user()->kd_user }}
                </small> --}}
            </div>
        </div>
        @endauth
        <!-- Sidebar Menu -->
        <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <router-link to="/" class="nav-link text-gray">
                        <i class="nav-icon fa fa-home  "></i>
                        <p>
                            Halaman Utama
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="login" class="nav-link text-gray">
                        <i class="fa fa-lock nav-icon"></i>
                        <p>Login</p>
                    </router-link>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link text-gray ">
                        <i class="nav-icon fa fa-cog "></i>
                        <p>
                            Pengaturan
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/pengaturan-akun" class="nav-link text-gray">
                                <i class="nav-icon fa fa-lock"></i>
                                <p>Ubah Password</p>
                            </router-link>
                        </li>
                    </ul>
                </li>
                @auth
                <li class="nav-item">
                    <a href=" {{route('logout')}} " class="nav-link" 
                    onclick="event.preventDefault();
                            document.getElementById('logoutForm').submit()">
                        <i class="nav-icon fa fa-power-off text-danger"></i>
                        <p>
                            Logout
                        </p>
                        <form action=" {{route('logout')}} " id="logoutForm" method="POST">
                            @csrf
                        </form>
                    </a>
                </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
