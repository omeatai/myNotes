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
              <h2 class="dark blue"><strong> NIGER DELTA PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>NIGER DELTA</td>
                    <td>{{$total_niger_delta_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>CALABAR</td>
                    <td>{{$total_calabar_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>UYO</td>
                    <td>{{$total_uyo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>NIGER NORTH</td>
                    <td>{{$total_niger_north_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>NIGER WEST</td>
                    <td>{{$total_niger_west_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>OKRIKA</td>
                    <td>{{$total_okrika_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>AHOADA</td>
                    <td>{{$total_ahoada_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>OGONI</td>
                    <td>{{$total_ogoni_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>ETCHE</td>
                    <td>{{$total_etche_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>IKWERRE</td>
                    <td>{{$total_ikwerre_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>NORTHERN IZON</td>
                    <td>{{$total_northern_izon_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>OGBIA</td>
                    <td>{{$total_ogbia_diocese}}</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>EVO</td>
                    <td>{{$total_evo_diocese}}</td>
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
