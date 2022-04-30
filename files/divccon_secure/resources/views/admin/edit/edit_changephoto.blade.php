@extends('layouts.edit')

@section('main')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>CHANGE PHOTO: <small></small></h3>
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
          @include('inc.messages')

          <div class="x_content">

            <br />
            <div class="col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                      <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('post_changephoto') }}" data-parsley-validate enctype="multipart/form-data">
                        @csrf
                            <!-- bootstrap-imageupload. -->
                            <div class="imageupload panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title pull-center" >ID:</h3>

                                </div>
                                <div class="file-tab panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="Enter THE ID HERE" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="user_photo" name="user_photo" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /bootstrap-imageupload. -->
                            <!-- bootstrap-imageupload method buttons. -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">CHANGE PHOTO</button>
                            <p></p>
                            <div><a href="/edit_changephoto" class="btn btn-lg btn-primary btn-block" role="button">REFRESH</a></div><p></p>
                            <button onclick="window.close()" type="button" class="btn btn-lg btn-danger btn-block"><strong>GO BACK/CLOSE</strong></button>
                            <br><br>

                      </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4"></div>


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
          @include('inc.messages')
          <div class="x_content">

            <br />
            <div class="col-md-4 col-sm-4 col-xs-4"></div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('post_changephoto') }}" data-parsley-validate enctype="multipart/form-data">
                    @csrf

                            <!-- bootstrap-imageupload. -->
                            <div class="imageupload panel panel-default">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title pull-center" >PIN:</h3>

                                </div>
                                <div class="file-tab panel-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="pin" name="pin" aria-describedby="pin" placeholder="Enter THE PIN HERE" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="user_photo" name="user_photo" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /bootstrap-imageupload. -->
                            <!-- bootstrap-imageupload method buttons. -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">CHANGE PHOTO</button>
                            <p></p>
                            <div><a href="/edit_changephoto" class="btn btn-lg btn-primary btn-block" role="button">REFRESH</a></div><p></p>
                            <button onclick="window.close()" type="button" class="btn btn-lg btn-danger btn-block"><strong>GO BACK/CLOSE</strong></button>
                            <br><br>

                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4"></div>


          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->

@endsection
