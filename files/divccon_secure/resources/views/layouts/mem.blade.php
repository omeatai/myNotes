<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>

@yield('title')

<!-- Bootstrap -->
    <link href="{{ asset('bootstrap/gen/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('bootstrap/gen/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('bootstrap/gen/vendors/nprogress/nprogress.css" rel="stylesheet') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('bootstrap/gen/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('bootstrap/boots/signin/membership.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('logo.png')}}">

    <style tyle="text/css">

        body {
               -webkit-print-color-adjust: exact !important;
        }

        .badge_bg{
                background-image: url("{{ asset('img/bg_sample.png') }}");
            }

        @media print
        {
            table { page-break-after:auto }
            tr    { page-break-inside:avoid; page-break-after:auto }
            td    { page-break-inside:avoid; page-break-after:auto }
            thead { display:table-header-group }
            tfoot { display:table-footer-group }

            #printPageButton {
                display: none;
            }

        }

    </style>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/dashboard" class="site_title"><img src="{{ asset('logo.png') }}" alt="DIVCCON 2020" height="42" width="42"><span>DIVCCON</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu-profile quick info -->
            @yield('menu-profile')
            <!-- /menu-profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>OPTIONS</h3>
                        <ul class="nav side-menu">
                            <li>
                                <ul class="nav child_menu">
                                    <li><a href="/dashboard">View Your Information</a></li>
                                    <li><a href="/changeinfo">Change Info</a></li>
                                    <li><a href="/changephoto">Change Photo</a></li>
                                    <li><a href="/contactadmin">Contact Admin</a></li>
                                    <li><a href="/logout">logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    {{--<a data-toggle="tooltip" data-placement="top" title="Settings">--}}
                    {{--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    {{--<a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
                    {{--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    {{--<a data-toggle="tooltip" data-placement="top" title="Lock">--}}
                    {{--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
                    {{--</a>--}}
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <!-- nav-profile -->
                            @yield('nav-profile')
                            <!-- /nav-profile -->
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="/dashboard"> Profile</a></li>
                                <li><a href="/contactadmin" target="_blank">Contact Admin</a></li>
                                <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <!-- title-info -->
                    @yield('title-info')
                    <!-- /title-info -->
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div id="mainpageid">
                    {{--MAIN PAGE--}}
                    @yield('main-page')
                    {{--/MAIN PAGE--}}
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                DIVCCON MEMBERSHIP PAGE by <a href="https://www.divccon.com">DIVCCON ICT TEAM</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('bootstrap/gen/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('bootstrap/gen/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bootstrap/gen/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('bootstrap/gen/vendors/nprogress/nprogress.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('bootstrap/gen/build/js/custom.min.js') }}"></script>

@yield('footer')
</body>
</html>
