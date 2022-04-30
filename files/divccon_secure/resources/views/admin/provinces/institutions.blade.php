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
              <h2 class="dark blue"><strong> INSTITUTIONS (LIST OF INSTITUTIONS)</strong></h2>
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
                    <th>INSTITUTION</th>
                    <th>Total Registered</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>CROWTHER THEOLOGICAL SEMINARY, ABEOKUTA</td>
                    <td>{{$total_crowderseminary_institution}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>IBRU CENTRE, AGBARA OTTO</td>
                    <td>{{$total_ibru_institution}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>TRINITY COLLEGE, UMUAHIA</td>
                    <td>{{$total_trinity_institution}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>IMMANUEL COLLEGE OF THEOLOGY, IBADAN</td>
                    <td>{{$total_immanuel_institution}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>VINING COLLEGE OF THEOLOGY, AKURE</td>
                    <td>{{$total_vining_institution}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>ST. FRANCIS OF ASSISI, WUSASA</td>
                    <td>{{$total_stfancis_institution}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>ST. PAUL'S SEMINARY, AWKA</td>
                    <td>{{$total_pauls_institution}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>CROWTHER THEOLOGICAL COLLEGE, OKENE</td>
                    <td>{{$total_crowdercollege_institution}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>POLICE CHAPLAINCY</td>
                    <td>{{$total_police_institution}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>OTHER INSTITUTIONS</td>
                    <td>{{$total_otherinstitutions_institution}}</td>
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
