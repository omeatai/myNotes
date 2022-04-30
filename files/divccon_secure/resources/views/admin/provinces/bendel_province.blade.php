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
              <h2 class="dark blue"><strong> BENDEL PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>BENIN</td>
                    <td>{{$total_benin_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ASABA</td>
                    <td>{{$total_asaba_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>WARRI</td>
                    <td>{{$total_warri_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>SABONGIDA ORA</td>
                    <td>{{$total_sabongida_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>UGHELLI</td>
                    <td>{{$total_ughelli_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>OLEH</td>
                    <td>{{$total_oleh_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>ESAN</td>
                    <td>{{$total_esan_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>IKA</td>
                    <td>{{$total_ika_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>WESTERN IZON</td>
                    <td>{{$total_western_izon_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>AKOKO EDO</td>
                    <td>{{$total_akoko_edo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>ETSAKO</td>
                    <td>{{$total_etsako_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>NDOKWA</td>
                    <td>{{$total_ndokwa_diocese}}</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>SAPELE</td>
                    <td>{{$total_sapele_diocese}}</td>
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
