@extends('layouts.edit')

@section('main')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>CHANGE INFO: <small></small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </div>
        </div>
      </div>
    </div>

    @include('inc.messages')

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>BY ID</h2>
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

            <div class="col-md-12 col-sm-12 col-xs-12">
                      <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('post_changeinfo_intro') }}" data-parsley-validate enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id" >ID: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id" name="id"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br><br><br>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">SELECT</button>
                          <a href="/secretariat" type="submit" class="btn btn-danger">Go Back</a>
                        </div>
                      </div><br><br>

                      </form>
            </div>



          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>BY PIN</h2>
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

            <div class="col-md-12 col-sm-12 col-xs-12">
                <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('post_changeinfo_intro') }}" data-parsley-validate enctype="multipart/form-data">
                    @csrf

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value" >PIN: <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="pin" name="pin"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div><br><br><br>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">SELECT</button>
                          <a href="/secretariat" type="submit" class="btn btn-danger">Go Back</a>
                        </div>
                      </div>
                      <br><br>

                    </form>
            </div>



          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->

@endsection
