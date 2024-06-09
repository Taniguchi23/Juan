<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DASHBOARD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/logo-ico.ico">

    <!-- DataTables -->
    <link href="/dashboard/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="/dashboard/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/plugins/filter/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/dashboard/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    @yield('link')

</head>

<body class="dark-sidenav">
    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/home" class="logo">
                <span>
                    <img src="/dashboard/images/logo-admin.jpg" alt="logo-large" class="logo-lg logo-light">
                    <img src="/dashboard/images/logo-admin.jpg" alt="logo-large" class="logo-lg">
                </span>
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="" alt="" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">{{ Auth::user()->nombres }} <i
                                class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href=""><i class="ti-user text-muted mr-2"></i> Perfil</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('form-salir').submit();"><i
                                class="ti-power-off text-muted mr-2"></i> Cerrar Sesión</a>
                        <form action="{{ route('logout') }}" id="form-salir" method="POST" style="display:none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile waves-effect waves-light">
                        <i class="ti-menu nav-icon"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->

    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">

            <li>
                <a href="javascript: void(0);"><i class="dripicons-user-group"></i><span>Usuarios</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.usuarios') }}">
                            <i class="ti-control-record"></i>Usuarios
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end left-sidenav-->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">

                @yield('content')


            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                &copy; 2024 UA
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- jQuery  -->
    <script src="/dashboard/js/jquery.min.js"></script>
    <script src="/dashboard/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard/js/metismenu.min.js"></script>
    <script src="/dashboard/js/waves.js"></script>
    <script src="/dashboard/js/feather.min.js"></script>
    <script src="/dashboard/js/jquery.slimscroll.min.js"></script>
    <script src="/dashboard/js/jquery-ui.min.js"></script>
    <script src="/dashboard/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="/dashboard/pages/jquery.helpdesk-dashboard.init.js"></script>
    <script src="/dashboard/plugins/filter/isotope.pkgd.min.js"></script>
    <script src="/dashboard/plugins/filter/masonry.pkgd.min.js"></script>
    <script src="/dashboard/plugins/filter/jquery.magnific-popup.min.js"></script>
    <script src="/dashboard/pages/jquery.gallery.init.js"></script>

    <!-- Required datatable js -->
    <script src="/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/dashboard/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/dashboard/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/dashboard/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="/dashboard/plugins/datatables/jszip.min.js"></script>
    <script src="/dashboard/plugins/datatables/pdfmake.min.js"></script>
    <script src="/dashboard/plugins/datatables/vfs_fonts.js"></script>
    <script src="/dashboard/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/dashboard/plugins/datatables/buttons.print.min.js"></script>
    <script src="/dashboard/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="/dashboard/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/dashboard/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="/dashboard/pages/jquery.datatable.init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- App js -->
    <script src="/dashboard/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('script')

</body>

</html>
