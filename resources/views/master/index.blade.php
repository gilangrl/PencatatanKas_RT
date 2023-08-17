<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | RT</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('../assets/images/pranti.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('../assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Responsive Table css -->
        <link href="{{asset('../assets/libs/admin-resources/rwd-table/rwd-table.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('../assets/css/config/default/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('../assets/css/config/default/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{asset('../assets/css/config/default/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{asset('../assets/css/config/default/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{asset('../assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">
    
            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>
    
            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>
    
            <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-grid noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-end">
    
                    <div class="p-lg-1">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('../assets/images/brands/github.png')}}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{asset('../assets/images/brands/bitbucket.png')}}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                        </div>
   
                    </div>
    
                </div>
            </li>
    
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('../assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        Geneva <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a>
    
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Lock Screen</span>
                    </a>
    
                    <div class="dropdown-divider"></div>
    
                    <!-- item-->
                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
    
                </div>
            </li>
    
            <li class="dropdown notification-list">
                <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                    <i class="fe-settings noti-icon"></i>
                </a>
            </li>
    
        </ul>
    
        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{asset('../assets/images/arfa.png')}}" alt="" height="50">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <img src="{{asset('../assets/images/arfa.png')}}" alt="" height="20">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>
    
            <a href="index.html" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{asset('../assets/images/icon-arfa.png')}}" alt="" height="40">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('../assets/images/arfa.png')}}" alt="" height="40">
                </span>
            </a>
        </div>
    
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>   
        </ul>
        
    </div>
</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>
    
                <li>
                    <a href="{{route('wargaIndex')}}">
                        <i data-feather="airplay"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="#sidebarTasks" data-bs-toggle="collapse">
                        <i data-feather="clipboard"></i>
                        <span> Data Warga </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('wargaTampil')}}">List Data</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarContacts" data-bs-toggle="collapse">
                        <i data-feather="book"></i>
                        <span>Data Pengurus RT</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarContacts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('PengurusIndex')}}">List Data</a>
                            </li>
                        </ul>
                    </div>
                </li> 

                <li>
                    <a href="#sidebarKegiatan" data-bs-toggle="collapse">
                        <i class="fe-activity"></i>
                        <span>Data Kegiatan</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarKegiatan">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('KegiatanIndex')}}">List Data</a>
                            </li>
                        </ul>
                    </div>
                </li>   

                <li>
                    <a href="#sidebarPembayaran" data-bs-toggle="collapse">
                        <i class="fas fa-comments-dollar"></i>
                        <span>Data Pembayaran</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPembayaran">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('pembayaranIndex')}}">List Data</a>
                            </li>
                            <li>
                                <a href="{{route('PembayaranCetak')}}">Cetak Pembayaran</a>
                            </li>
                        </ul>
                    </div>
                </li>  

                <li>
                    <a href="#sidebarBuku" data-bs-toggle="collapse">
                        <i class="fe-book-open"></i>
                        <span>Kelola Buku Kas</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBuku">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('indexKas')}}">List Data</a>
                            </li>
                            <li>
                                <a href="{{route('cetakKas')}}">Cetak Pemasukan & Pengeluaran</a>
                            </li>
                        </ul>
                    </div>
                </li>   

            </ul>

        </div>
        <!-- End Sidebar -->

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid"> 
            @yield('wargaIndex')
            @yield('wargaTampil')
            @yield('wargaTambah')
            @yield('wargaEdit')

            @yield('pengurusIndex')
            @yield('pengurusTambah')
            @yield('pengurusEdit')

            @yield('kegiatanIndex')
            @yield('kegiatanTambah')
            @yield('kegiatanEdit')

            @yield('pembayaranIndex')
            @yield('pembayaranTambah')
            @yield('pembayaranCetak')

            @yield('BukuKasIndex')
            @yield('BukuKasTambah')
            @yield('BukuKasEdit')

            @yield('kasCetak')
        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> &copy; Ds.pranti by <a href="">ARFAMEDIA</a> 
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->


    <!-- Vendor js -->
    <script src="{{asset('../assets/js/vendor.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('../assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('../assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{asset('../assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>

    <!-- Responsive Table js -->
    <script src="{{asset('../assets/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('../assets/js/pages/responsive-table.init.js')}}"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{asset('../assets/js/pages/dashboard-1.init.js')}}"></script>

    <!-- App js-->
    <script src="{{asset('../assets/js/app.min.js')}}"></script>
    
</body>
</html>