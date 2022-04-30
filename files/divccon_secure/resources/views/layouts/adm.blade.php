<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('logo.png')}}" type="image/png" />

    <title>DIVCCON</title>

    <!-- Bootstrap -->
    <link href="{{ asset('gen/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('gen/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gen/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('gen/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('gen/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('gen/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('gen/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('gen/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('gen/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">


    <!-- Datatables -->
    <link href="{{ asset('gen/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('gen/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('gen/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('gen/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('gen/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('gen/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('gen/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('gen/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('gen/build/css/custom.min.css')}}" rel="stylesheet">

    <!-- Include the above in your HEAD tag ---------->
    <link href="{{ URL::asset('up/dist/css/bootstrap-imageupload.css') }}" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/secretariat" class="site_title"><i class="fa fa-university"></i> <span>DIVCCON</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('logo.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{$member->username}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/secretariat">Dashboard</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-home"></i> Provinces <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="/abuja_province">ABUJA PROVINCE</a></li>
                        <li><a href="/of_the_niger_province">OF THE NIGER PROVINCE</a></li>
                        <li><a href="/niger_delta_province">NIGER DELTA PROVINCE</a></li>
                        <li><a href="/ibadan_province">IBADAN PROVINCE</a></li>
                        <li><a href="/ondo_province">ONDO PROVINCE</a></li>
                        <li><a href="/kaduna_province">KADUNA PROVINCE</a></li>
                        <li><a href="/owerri_province">OWERRI PROVINCE</a></li>
                        <li><a href="/bendel_province">BENDEL PROVINCE</a></li>
                        <li><a href="/enugu_province">ENUGU PROVINCE</a></li>
                        <li><a href="/aba_province">ABA PROVINCE</a></li>
                        <li><a href="/kwara_province">KWARA PROVINCE</a></li>
                        <li><a href="/jos_province">JOS PROVINCE</a></li>
                        <li><a href="/lagos_province">LAGOS PROVINCE</a></li>
                        <li><a href="/lokoja_province">LOKOJA PROVINCE</a></li>
                        <li><a href="/institutions">INSTITUTIONS</a></li>
                        <li><a href="/cana">CANA</a></li>
                        <li><a href="/visitors">VISITORS</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-home"></i> Archdeaconries <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="/abuja_archdeaconries">ABUJA</a></li>
                        </ul>
                      </li>

                  <li><a><i class="fa fa-home"></i> Search & Change <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/search" target="_blank">SEARCH ALL</a></li>
                      <li><a href="/search_by_option" target="_blank">SEARCH BY OPTION</a></li>
                      <li><a href="/edit_changeinfo_intro" target="_blank">CHANGE INFO</a></li>
                      <li><a href="/edit_changephoto" target="_blank">CHANGE PHOTO</a></li>
                      <li><a href="/edit_changecommittee" target="_blank">CHANGE COMMITTEE</a></li>
                      <li><a href="/edit_new_registration" target="_blank">NEW REGISTRATION</a></li>
                      <li><a href="/edit_send_to_pool" target="_blank">SEND TO POOL/UNPOOL</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-table"></i> Print Tags<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="/print_by_option" target="_blank">PRINT BY OPTION</a></li>
                        <li><a href="/unprint_by_option" target="_blank">UNPRINT BY OPTION</a></li>
                        <li><a href="/print_from_pool" target="_blank">PRINT FROM POOL</a></li>
                        <li><a href="/print_from_waiting" target="_blank">PRINT FROM WAITING</a></li>
                        <li><a href="/print_from_pending" target="_blank">PRINT FROM PENDING</a></li>
                        <li><a href="/print_from_notprinted" target="_blank">PRINT FROM NOT-PRINTED</a></li>


                    </ul>
                  </li>

                </ul>
              </div>
              <div class="menu_section">
                <h3>DIVCCON</h3>
                <ul class="nav side-menu">
                  <li><a href="#"><i class="fa fa-laptop"></i> HELP LINE <br>+234-8136999580<br>omeatai@gmail.com</a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">

              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}">
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

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <div class="clearfix"></div>


        @yield('main')


        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a href="https://www.divccon.com">DIVCCON ADMIN PANEL</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('gen/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('gen/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('gen/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('gen/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('gen/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('gen/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('gen/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('gen/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('gen/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('gen/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('gen/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('gen/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('gen/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('gen/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('gen/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('gen/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('gen/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('gen/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('gen/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('gen/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('gen/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Datatables -->
    <script src="{{ asset('gen/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('gen/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('gen/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('gen/build/js/custom.min.js')}}"></script>

  </body>
</html>
