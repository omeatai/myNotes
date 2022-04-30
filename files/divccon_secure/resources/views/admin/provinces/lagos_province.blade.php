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
              <h2 class="dark blue"><strong> LAGOS PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>LAGOS</td>
                    <td>{{$total_lagos_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>EGBA</td>
                    <td>{{$total_egba_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>IJEBU</td>
                    <td>{{$total_ijebu_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>REMO</td>
                    <td>{{$total_remo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>YEWA</td>
                    <td>{{$total_yewa_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>LAGOS WEST</td>
                    <td>{{$total_lagos_west_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>BADAGRY</td>
                    <td>{{$total_badagry_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>IJEBU NORTH</td>
                    <td>{{$total_ijegbu_north_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>LAGOS MAINLAND</td>
                    <td>{{$total_lagos_mainland_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>IFO</td>
                    <td>{{$total_ifo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>EGBA WEST</td>
                    <td>{{$total_egba_west_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>AWORI</td>
                    <td>{{$total_awori_diocese}}</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>IJEBU SOUTH WEST</td>
                    <td>{{$total_ijegbu_south_west_diocese}}</td>
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
