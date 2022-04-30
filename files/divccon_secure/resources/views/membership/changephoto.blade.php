<?php
$num = $member->id;
$num_length = strlen((string)$num);

switch($num_length){
    case 1:
        $id = "00000".$num;
        break;
    case 2:
        $id = "0000".$num;
        break;
    case 3:
        $id = "000".$num;
        break;
    case 4:
        $id = "00".$num;
        break;
    case 5:
        $id = "0".$num;
        break;

    default :
        $id = "UNCONFIRMED";
        break;
}

//GET ALL MEMBER VARIABLES FROM DATABASE
$pin = $member->pin;
$title = $member->title;
$firstname = $member->firstname;
$lastname = $member->lastname;
$phone = $member->phone;
$email = $member->email;
$sex = $member->sex;
$anglican = $member->anglican;
$location = $member->location;
$province = $member->province;
$diocese = $member->diocese;
$church = $member->church;
$designation = $member->designation;
$committee = $member->committee;
$user_photo = $member->user_photo;
$batch = $member->batch;
$status = $member->status;

// //IF THE MEMBER IS ASSIGNED TO A COMMITEE
// if($committee != "NULL"){
//   $designation = $committee;
// }


//LET THE BARCODE NUMBER BE TAKEN FROM THE MEMBER ID IN THE DATABASE
$barcode = $id;

//SET THE TAGNAME TO BE THE COMBINATION OF THE TITLE, FIRSTNAME AND LASTNAME
$tag_name = $title." ".$firstname;

?>
@extends('layouts.mem')

@section('title')
  <title>CHANGE PHOTO</title>

  <!-- Bootstrap -->
  <link href="{{ asset('bootstrap/gen/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('bootstrap/gen/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('bootstrap/gen/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="{{ asset('bootstrap/gen/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
  <!-- bootstrap-datetimepicker -->
  <link href="{{ asset('bootstrap/gen/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
  <!-- Ion.RangeSlider -->
  <link href="{{ asset('bootstrap/gen/vendors/normalize-css/normalize.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap/gen/vendors/ion.rangeSlider/css/ion.rangeSlider.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap/gen/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
  <!-- Bootstrap Colorpicker -->
  <link href="{{ asset('bootstrap/gen/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

  <link href="{{ asset('bootstrap/gen/vendors/cropper/dist/cropper.min.css') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('bootstrap/gen/build/css/custom.min.css') }}" rel="stylesheet">

    <!--Include the above in your HEAD tag ---------->
    <link href="{{ URL::asset('bootstrap/up/dist/css/bootstrap-imageupload.css') }}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
@stop

@section('menu-profile')
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{ asset('avatars/'.$user_photo) }}" alt="MEMBER_PHOTO" class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>{{$title}} {{$firstname}} {{$lastname}}</h2>
    </div>
    <div class="clearfix"></div>
  </div>
@stop

@section('nav-profile')
  <img src="{{ asset('avatars/'.$user_photo) }}" alt="">{{$title}} {{$firstname}} {{$lastname}}
@stop

@section('title-info')
  <h3><strong>CHANGE YOUR PHOTO</strong></h3>
@stop

@section('main-page')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
          @include('inc.messages')

              <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
              <link href="{{ asset('css/upload.css')}}" rel="stylesheet">
              <link href="{{ asset('css/upload2.css')}}" rel="stylesheet">
              <form name="upload" method="post" action="{{ route('changephoto') }}" enctype="multipart/form-data" accept-charset="utf-8">
                  @csrf
                  <div class="row">
                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <div class="profile_img">
                      <div id="crop-avatar">
                        <!-- Current avatar -->
                        <img class="img-responsive avatar-view" src="{{ asset('avatars/'.$user_photo) }}" alt="Avatar" title="Profile Pic" width="200" height="200">
                      </div>
                    </div>
                    <h5><strong>{{$title}} {{$firstname}} {{$lastname}}</strong></h5>
                    <a href="/dashboard" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>View Full Profile</a>
                    <a href="/changeinfo" class="btn btn-dark blue-button"><i class="fa fa-edit m-right-xs"></i>Change Info</a><br>
                    <a href="/logout" class="btn btn-danger"><i class="fa fa-edit m-right-xs"></i>Logout</a>
                    <br />
                </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 center">
                        <div class="btn-container">
                            <!--the three icons: default, ok file (img), error file (not an img)-->
                            <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                            <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                            <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>
                            <!--this field changes dinamically displaying the filename we are trying to upload-->
                            <p id="namefile">Only pics allowed! (jpg,jpeg,png)</p>
                            <!--our custom btn which which stays under the actual one-->
                            <button type="button" id="btnup" class="btn btn-primary btn-lg">Browse to upload your pic!</button><br><br>
                            <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                            <input type="file" value="" name="fileup" id="fileup" class="imgInp">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div runat="server">
                          <h3>Preview</h3>
                          <img class="blah" id="photo" src="{{ asset('no_image.jpg')}}" alt="Your photo should be here" />
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $('.blah').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]); // convert to base64 string
                                }
                            }

                            $(".imgInp").change(function() {
                                readURL(this);
                            });
                        </script>
                    </div>
                  </div>
                  <!--additional fields-->
                  <div class="row">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                          <p><button type="submit" class="btn btn-success btn-block">CHANGE PHOTO</button></p>
                          <p><a class="btn btn-warning btn-block" href="/changephoto" role="button"><b>REFRESH</b> &raquo;</a></p>
                          <p><a class="btn btn-danger btn-block" href="/dashboard" role="button"><b>BACK TO DASHBOARD</b> &raquo;</a></p>
                      </div>
                      <div class="col-md-3"></div>
                  </div>
              </form>
              <hr>
        </div>
      </div>
    </div>
  </div>
@stop



@section('footer')


@stop
