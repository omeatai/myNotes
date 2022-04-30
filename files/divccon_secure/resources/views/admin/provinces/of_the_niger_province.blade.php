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
              <h2 class="dark blue"><strong> OF THE NIGER PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>ON THE NIGER</td>
                    <td>{{$total_on_the_niger_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>AWKA</td>
                    <td>{{$total_awka_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>NNEWI</td>
                    <td>{{$total_nnewi_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>AGUATA</td>
                    <td>{{$total_aguata_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>OGBARU</td>
                    <td>{{$total_ogbaru_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>IHIALA</td>
                    <td>{{$total_ihiala_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>NIGER WEST</td>
                    <td>{{$total_niger_west_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>MBAMILI</td>
                    <td>{{$total_mbamili_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>AMICHI</td>
                    <td>{{$total_amichi_diocese}}</td>
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
