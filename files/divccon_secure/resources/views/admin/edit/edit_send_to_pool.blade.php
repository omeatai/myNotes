@extends('layouts.edit')

@section('main')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>SEND TO POOL: <small></small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>BY ID </h2>
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
            <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('post_send_to_pool') }}" data-parsley-validate enctype="multipart/form-data">
                @csrf
                @include('inc.messages')

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">ID<span class="required">:</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" id="ids" name="ids" rows="5" placeholder="List a single ID or all the required Ids (separated by commas)." required></textarea>
                  </div>
                </div>

              <br>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pool">Send to <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="select2_single form-control" name="pool"  tabindex="-1">
                        <option value=3 selected>POOL</option>
                        <option value=0>NOT PRINTED</option>
                        <option value=1>WAITING</option>
                        <option value=2>PRINTED</option>
                        <option value=4>PENDING</option>
                      </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-lg btn-success btn-block">SEND</button>
                        <p></p>
                        <div><a href="/edit_send_to_pool" class="btn btn-lg btn-primary btn-block" role="button">REFRESH</a></div><p></p>
                        <button onclick="window.close()" type="button" class="btn btn-lg btn-danger btn-block"><strong>GO BACK/CLOSE</strong></button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>




    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>BY PIN </h2>
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
            <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('post_send_to_pool') }}" data-parsley-validate enctype="multipart/form-data">
                @csrf
                @include('inc.messages')

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">PIN<span class="required">:</span>
                  </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea class="form-control" id="pins" name="pins" rows="5" placeholder="List a single PIN or all the required Pins (separated by commas)." required></textarea>
                  </div>
                </div>

              <br>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pool">Send to <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="select2_single form-control" name="pool"  tabindex="-1">
                        <option value=3 selected>POOL</option>
                        <option value=0>NOT PRINTED</option>
                        <option value=1>WAITING</option>
                        <option value=2>PRINTED</option>
                        <option value=4>PENDING</option>
                      </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-lg btn-success btn-block">SEND</button>
                        <p></p>
                        <div><a href="/send_to_pool" class="btn btn-lg btn-primary btn-block" role="button">REFRESH</a></div><p></p>
                        <button onclick="window.close()" type="button" class="btn btn-lg btn-danger btn-block"><strong>GO BACK/CLOSE</strong></button>
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
<!-- /page content -->

@endsection




