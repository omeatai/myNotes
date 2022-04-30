@extends('layouts.adm')

@section('main')

<div class="right_col" role="main">
    <div class="">

      <!-- top tiles -->
            @include('inc.head')
      <!-- /top tiles -->

      <div class="clearfix"></div>

      <!-- 1 -->
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2 class="red"><strong> ABUJA DIOCESE (LIST OF ARCHDEACONRIES)</strong></h2>
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
              <br />

              <link href="{{ asset('table/css.css') }}" rel="stylesheet">

                <table>
                  <tr>
                    <th>#</th>
                    <th>ARCHDEACONRY</th>
                    <th>Total Registered</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>THE CATHEDRAL</td>
                    <td>{{$total_the_cathedral}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>WUSE</td>
                    <td>{{$total_wuse}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ASOKORO</td>
                    <td>{{$total_asokoro}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>MAITAMA</td>
                    <td>{{$total_maitama}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>GUDU</td>
                    <td>{{$total_gudu}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>DURUMI</td>
                    <td>{{$total_durumi}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>MPAPE</td>
                    <td>{{$total_mpape}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>GWARINPA</td>
                    <td>{{$total_gwarinpa}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>KABUSA</td>
                    <td>{{$total_kabusa}}</td>
                  </tr>

                </table>

            </div>
          </div>
        </div>
      </div>
      <!-- /1 -->



    </div>
  </div>
  <!-- /page content -->




@endsection
