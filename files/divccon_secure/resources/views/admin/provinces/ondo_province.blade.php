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
              <h2 class="dark blue"><strong> ONDO PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>ONDO</td>
                    <td>{{$total_ondo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>EKITI</td>
                    <td>{{$total_ekiti_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>AKOKO</td>
                    <td>{{$total_akoko_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>OWO</td>
                    <td>{{$total_owo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>AKURE</td>
                    <td>{{$total_akure_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>ON THE COAST</td>
                    <td>{{$total_on_the_coast_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>EKITI WEST</td>
                    <td>{{$total_ekiti_west_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>EKITI OKE</td>
                    <td>{{$total_ekiti_oke_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>ILAJE</td>
                    <td>{{$total_ilaje_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>IRELE ESEDO</td>
                    <td>{{$total_irele_esedo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>ILE-OLUJI</td>
                    <td>{{$total_ile_oluji_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>IDO-ANI</td>
                    <td>{{$total_ido_ani_diocese}}</td>
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
