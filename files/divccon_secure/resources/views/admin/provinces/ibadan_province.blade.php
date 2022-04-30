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
              <h2 class="dark blue"><strong> IBADAN PROVINCE (LIST OF DIOCESES)</strong></h2>
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
                    <td>IBADAN</td>
                    <td>{{$total_ibadan_diocese}}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ILESHA</td>
                    <td>{{$total_ilesha_diocese}}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>OSUN</td>
                    <td>{{$total_osun_diocese}}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>IFE</td>
                    <td>{{$total_ife_diocese}}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>OKE-OSUN</td>
                    <td>{{$total_oke_osun_diocese}}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>IBADAN NORTH</td>
                    <td>{{$total_ibadan_north_diocese}}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>IBADAN SOUTH</td>
                    <td>{{$total_ibadan_south_diocese}}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>OYO</td>
                    <td>{{$total_oyo_diocese}}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>OGBOMOSO</td>
                    <td>{{$total_ogbomoso_diocese}}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>OKE OGUN</td>
                    <td>{{$total_oke_ogun_diocese}}</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>AJAYI CROWTHER</td>
                    <td>{{$total_ajayi_crowther_diocese}}</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>IFE EAST</td>
                    <td>{{$total_ife_east_diocese}}</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>OSUN NORTH</td>
                    <td>{{$total_osun_north_diocese}}</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>ILESHA SOUTH</td>
                    <td>{{$total_ilesha_south_diocese}}</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>IJESHA NORTH</td>
                    <td>{{$total_ijesha_north_diocese}}</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>OSUN NORTH EAST</td>
                    <td>{{$total_osun_north_east_diocese}}</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>IJESHA NORTH EAST</td>
                    <td>{{$total_ijesha_north_east_diocese}}</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>ILESA SOUTH WEST</td>
                    <td>{{$total_ilesha_south_west_diocese}}</td>
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
