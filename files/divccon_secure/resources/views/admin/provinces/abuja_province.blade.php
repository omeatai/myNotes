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
              <h2 class="dark blue"><strong> ABUJA PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>ABUJA</td>
                    <td>{{$total_abuja_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>KAFANCHAN</td>
                    <td>{{$total_kafanchan_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>MAKURDI</td>
                    <td>{{$total_makurdi_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>OTUKPO</td>
                    <td>{{$total_otukpo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>GWAGWALADA</td>
                    <td>{{$total_gwagwalada_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>LAFIA</td>
                    <td>{{$total_lafia_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>KUBWA</td>
                    <td>{{$total_kubwa_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>ZONKWA</td>
                    <td>{{$total_zonkwa_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>KWOI</td>
                    <td>{{$total_kwoi_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>ZAKI-BIAM</td>
                    <td>{{$total_zaki_biam_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>GBOKO</td>
                    <td>{{$total_gboko_diocese}}</td>
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
