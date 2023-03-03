<!doctype html>
<html class="sidebar-light sidebar-left-big-icons">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="app_assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">

    <link rel="stylesheet" href="app_assets/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="app_assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="app_assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="app_assets/vendor/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="app_assets/vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="app_assets/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="app_assets/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="app_assets/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="app_assets/css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="app_assets/css/custom.css">

    <!-- Head Libs -->
    <script src="app_assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>

    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../2.2.0" class="logo">
                    <img src="app_assets/img/logo.png" width="75" height="35" alt="Porto Admin" />
                </a>
                <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">
                <span class="separator"></span>
                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle"
                                data-lock-picture="img/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled mb-2">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="fas fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i
                                        class="fas fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>

        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
                        data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">

                            <ul class="nav nav-main">
                                <li class="nav-parent nav-expanded nav-active">
                                    <a class="nav-link" href="{{ route('show') }}">
                                        <i class="fas fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-parent nav-expanded nav-active">
                                    <a class="nav-link" href="{{ route('booking.plane') }}">
                                        <i class="fas fa-table" aria-hidden="true"></i>
                                        <span>Booking</span>
                                    </a>
                                </li>
                                <li class="nav-parent nav-expanded nav-active">
                                    <a class="nav-link" href="{{ route('amount') }}">
                                        <i class="fas fa-credit-card" aria-hidden="true"></i>
                                        <span>Payments</span>
                                    </a>

                                </li>
                                <li class="nav-parent nav-expanded nav-active">
                                    <a class="nav-link" href="{{ route('person') }}">
                                        <i class="fas fa-user-alt" aria-hidden="true"></i>
                                        <span>Users</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <hr class="separator" />
                    </div>

                    <script>
                        // Maintain Scroll Position
                        if (typeof localStorage !== 'undefined') {
                            if (localStorage.getItem('sidebar-left-position') !== null) {
                                var initialPosition = localStorage.getItem('sidebar-left-position'),
                                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                                sidebarLeft.scrollTop = initialPosition;
                            }
                        }
                    </script>


                </div>

            </aside>

            <!-- end: sidebar -->
            @yield('content')
        </div>
    </section>

    <!-- Vendor -->
    <script src="app_assets/vendor/jquery/jquery.js"></script>
    <script src="app_assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="app_assets/vendor/popper/umd/popper.min.js"></script>
    <script src="app_assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="app_assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="app_assets/vendor/common/common.js"></script>
    <script src="app_assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="app_assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="app_assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="app_assets/vendor/jquery-ui/jquery-ui.js"></script>
    <script src="app_assets/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="app_assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="app_assets/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
    <script src="app_assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
    <script src="app_assets/vendor/flot/jquery.flot.js"></script>
    <script src="app_assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
    <script src="app_assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="app_assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="app_assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="app_assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="app_assets/vendor/raphael/raphael.js"></script>
    <script src="app_assets/vendor/morris/morris.js"></script>
    <script src="app_assets/vendor/gauge/gauge.js"></script>
    <script src="app_assets/vendor/snap.svg/snap.svg.js"></script>
    <script src="app_assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="app_assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="app_assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="app_assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="app_assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="app_assets/js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="app_assets/js/theme.init.js"></script>

    <!-- Examples -->
    <script src="app_assets/js/examples/examples.dashboard.js"></script>

</body>

</html>
