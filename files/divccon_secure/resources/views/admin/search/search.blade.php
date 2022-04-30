<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('logo.png')}}" type="image/png" />

    <title>SEARCH ALL</title>
    <!-- Bootstrap -->
    <link href="{{ asset('go/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('go/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('go/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="{{ asset('table/cssx.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div class="main_container">

        <div class="clearfix"></div>


        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SEARCH ALL ({{$members_count}} REGISTERED)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">

                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                              <th>Id</th>
                              <th>Pin</th>
                              <th>Title</th>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Phone</th>
                              <th>Province</th>
                              <th>Diocese</th>
                              <th>Designation</th>
                              <th>Printed?</th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($members as $mem)
                            <?php
                            switch ($mem->printed) {
                                case 0:
                                      $status = 'NOT PRINTED';
                                      $status_color = 'danger';
                                      break;
                                case 1:
                                      $status = 'WAITING';
                                      $status_color = 'warning';
                                      break;
                                case 2:
                                      $status = 'PRINTED';
                                      $status_color = 'success';
                                      break;
                                case 3:
                                      $status = 'POOL';
                                      $status_color = 'primary';
                                      break;
                                case 4:
                                      $status = 'PENDING';
                                      $status_color = 'info';
                                      break;
                            }

                            if($mem->province == NULL) {
                                $mem->province = 'NULL';
                              }
                            if($mem->diocese == NULL) {
                                $mem->diocese = 'NULL';
                              }
                            if($mem->designation == NULL) {
                                $mem->designation = 'NULL';
                              }
                            ?>

                          <tr>
                              <td>{{$mem->id}}</td>
                              <td>{{$mem->pin}}</td>
                              <td>{{$mem->title}}</td>
                              <td>{{$mem->firstname}}</td>
                              <td>{{$mem->lastname}}</td>
                              <td>{{$mem->phone}}</td>
                              <td>{{$mem->province}}</td>
                              <td>{{$mem->diocese}}</td>
                              <td>{{$mem->designation}}</td>
                              <td><button type="button" class="btn btn-{{$status_color}} btn-xs">{{$status}}</button></td>
                          </tr>
                          @endforeach

                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->




        <button onclick="window.close()" type="button" class="btn btn-block btn-primary"><strong>GO BACK</strong></button>
        <button onclick="window.close()" type="button" class="btn btn-block btn-danger"><strong>CLOSE</strong></button>

      </div>
    </div>

    <!-- Bootstrap -->
    <script src="{{ asset('go/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('go/build/js/custom.min.js')}}"></script>
    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
          $('#example').DataTable( {
            "pagingType": "full_numbers"
          });
        } );
    </script>




<!-- jQuery -->
<script src="{{ asset('go/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('go/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('go/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('go/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('go/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{ asset('go/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ asset('go/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{ asset('go/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ asset('go/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('go/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('go/build/js/custom.min.js')}}"></script>


  </body>
</html>
