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
              <h2 class="dark blue"><strong> JOS PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>JOS</td>
                    <td>{{$total_jos_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>DAMATURU</td>
                    <td>{{$total_damaturu_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>YOLA</td>
                    <td>{{$total_yola_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>MAIDUGURI</td>
                    <td>{{$total_maiduguri_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>BAUCHI</td>
                    <td>{{$total_bauchi_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>JALINGO</td>
                    <td>{{$total_jalingo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>GOMBE</td>
                    <td>{{$total_gombe_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>PANKSHIN</td>
                    <td>{{$total_pankshin_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>BUKURU</td>
                    <td>{{$total_bukuru_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>LANGTANG</td>
                    <td>{{$total_langtang_diocese}}</td>
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
