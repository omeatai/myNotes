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
              <h2 class="dark blue"><strong> OWERRI PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <th>DIOCESE</th>
                    <th>Total Registered</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>OWERRI</td>
                    <td>{{$total_owerri_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ORLU</td>
                    <td>{{$total_orlu_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>MBAISE</td>
                    <td>{{$total_mbaise_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ISI-MBANO</td>
                    <td>{{$total_isi_mbano_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>OKIGWE SOUTH</td>
                    <td>{{$total_okigwe_south_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>EGBU</td>
                    <td>{{$total_egbu_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>IDEATO</td>
                    <td>{{$total_ideato_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>OHAJI/EGBEMA</td>
                    <td>{{$total_ohaji_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>ON THE LAKE</td>
                    <td>{{$total_on_the_lake_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>ORU</td>
                    <td>{{$total_oru_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>OKIGWE</td>
                    <td>{{$total_okigwe_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>IKEDURU</td>
                    <td>{{$total_ikeduru_diocese}}</td>
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
