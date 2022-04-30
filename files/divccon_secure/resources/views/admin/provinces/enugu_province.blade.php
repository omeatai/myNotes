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
              <h2 class="dark blue"><strong> ENUGU PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>ENUGU</td>
                    <td>{{$total_enugu_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>NSUKKA</td>
                    <td>{{$total_nsukka_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>ABAKALIKI</td>
                    <td>{{$total_abakaliki_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>OJI RIVER</td>
                    <td>{{$total_oji_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>AWGU/ANINRI</td>
                    <td>{{$total_awgu_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>ENUGU NORTH</td>
                    <td>{{$total_enugu_north_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>NGBO</td>
                    <td>{{$total_ngbo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>IKWO</td>
                    <td>{{$total_ikwo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>AFIKPO</td>
                    <td>{{$total_afikpo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>NIKE</td>
                    <td>{{$total_nike_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>UDI</td>
                    <td>{{$total_udi_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>EHA AMUFU</td>
                    <td>{{$total_eha_amufu_diocese}}</td>
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
