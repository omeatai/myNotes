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
              <h2 class="red"><strong> ALL PROVINCES</strong></h2>
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
                    <th>PROVINCE</th>
                    <th>Total Registered</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>ABA</td>
                    <td>{{$total_aba_province}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ABUJA</td>
                    <td>{{$total_abuja_province}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>BENDEL</td>
                    <td>{{$total_bendel_province}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>ENUGU</td>
                    <td>{{$total_enugu_province}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>IBADAN</td>
                    <td>{{$total_ibadan_province}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>JOS</td>
                    <td>{{$total_jos_province}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>KADUNA</td>
                    <td>{{$total_kaduna_province}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>KWARA</td>
                    <td>{{$total_kwara_province}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>LAGOS</td>
                    <td>{{$total_lagos_province}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>LOKOJA</td>
                    <td>{{$total_lokoja_province}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>NIGER DELTA</td>
                    <td>{{$total_niger_delta_province}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>OF THE NIGER</td>
                    <td>{{$total_of_the_niger_province}}</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>ONDO</td>
                    <td>{{$total_ondo_province}}</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>OWERRI</td>
                    <td>{{$total_owerri_province}}</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>INSTITUTIONS</td>
                    <td>{{$total_institution_province}}</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>CANA</td>
                    <td>{{$total_cana_province}}</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>TOTAL VISITORS</td>
                    <td>{{$total_visitor}}</td>
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
