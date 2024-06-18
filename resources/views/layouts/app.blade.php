<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GRUPO 4 | UA</title>
    <!-- Stylesheets -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css?v={{ env('APP_VERSION') }}" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="/assets/images/logo-ico.ico" type="image/x-icon">
    <link rel="icon" href="/assets/images/logo-ico.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    @yield('links')

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <div class="page-wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container clearfix">
                    <div class="pull-left">
                        <ul class="info">
                            <li><a href="tel:940 750 259"><span class="icon flaticon-phone"></span>Telefono:
                                    940 750 259</a></li>
                            <li><a href="tel:929 961 964"><span class="icon flaticon-phone"></span>Call:
                                    929 961 964</a></li>
                            <li><a href="mailto:comercialtech@gmail.com"><span
                                        class="icon flaticon-email-2"></span>comercialtech@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container clearfix">
                    <div class="inner-container clearfix">
                        <div class="pull-left logo-box">
                            <div class="logo"><a href="{{ route('index') }}"><img src="/assets/images/logo.jpg"
                                        alt="" title=""></a></div>
                        </div>
                        <div class="nav-outer clearfix">
                            <!-- Mobile Navigation Toggler -->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                            <!-- Main Menu -->
                            <nav class="main-menu show navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ route('index') }}">Inicio</a></li>
                                        <li class="dropdown"><a href="#">Nosotros</a>
                                            <ul>
                                                <li><a href="{{ route('nosotros') }}">Quienes somos</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Productos</a>
                                            <ul>
                                                <li><a href="{{ route('productos.index') }}">Routers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!--Search Box-->
                                <!--div class="search-box-outer">
                                    <div class="search-box-btn"><span class="fa fa-search"></span></div>
                                </div-->

                                <!-- Cart Box -->
                                <!-- div class="cart-box">
                                    <div class="dropdown">
                                        <a class="cart-box-btn dropdown-toggle" href="{{ route('login') }}"
                                            type="button" target="_blank"><span class="fa fa-shopping-cart"></span>
                                        </a>
                                    </div>
                                </div -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!-- Logo -->
                    <div class="logo pull-left">
                        <a href="{{ route('index') }}" title=""><img src="/assets/images/logo-small.jpg"
                                alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->

                        <div class="outer-box clearfix">
                            <!-- Cart Box -->
                            <div class="cart-box">
                                <div class="dropdown">
                                    <div class="dropdown">
                                        <a class="cart-box-btn dropdown-toggle" href="{{ route('login') }}"
                                            type="button" target="_blank"><span class="fa fa-shopping-cart"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="{{ route('index') }}"><img src="/assets/images/logo.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->

        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="pattern-layer-one" style="background-image: url(/assets/images/background/pattern-12.png)">
            </div>
            <div class="pattern-layer-two" style="background-image: url(/assets/images/background/pattern-13.png)">
            </div>
            <div class="auto-container">
                <div class="widgets-section">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img src="/assets/images/footer-logo.jpg"
                                alt="" /></a>
                    </div>
                    <ul class="contact-info-list">
                        <li>
                            <span class="icon"><img src="/assets/images/icons/icon-1.png" alt="" /></span>
                            <a href="tel:940 750 259">940 750 259</a><br>
                            <a href="tel:997 448 453">997 448 453</a>
                        </li>
                        <li>
                            <span class="icon"><img src="/assets/images/icons/icon-2.png" alt="" /></span>
                            <a href="mailto:comercialtech@gmail.com">comercialtech@gmail.com</a><br>
                            <a href="{{ route('index') }}">www.innovatech.com</a>
                        </li>
                        <li>
                            <span class="icon"><img src="/assets/images/icons/icon-3.png" alt="" /></span>
                            Calle Guyana N°183 <br> Comas 15311, Lima
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright">&copy; 2024 Your Company. All Rights Reserved. Designed By <a
                            href="{{ route('index') }}">GRUPO 4</a></div>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

    </div>
    <!--End pagewrapper-->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="{{ route('index') }}">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/parallax.min.js"></script>
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/jquery.paroller.min.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/nav-tool.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>


    @yield('script')


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="/assets/js/respond.js"></script><![endif]-->

</body>

</html>
