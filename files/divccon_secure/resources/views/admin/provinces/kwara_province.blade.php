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
              <h2 class="dark blue"><strong> KWARA PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>KWARA</td>
                    <td>{{$total_kwara_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>OFFA</td>
                    <td>{{$total_offa_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>IGBOMINA</td>
                    <td>{{$total_igbomina_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>NEW BUSSA</td>
                    <td>{{$total_new_bussa_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>OMU ARAN</td>
                    <td>{{$total_omu_aran_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>JEBBA</td>
                    <td>{{$total_jebba_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>EKITI KWARA</td>
                    <td>{{$total_ekiti_kwara_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>IGBOMINA WEST</td>
                    <td>{{$total_igbomina_west_diocese}}</td>
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
