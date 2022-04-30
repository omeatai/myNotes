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
$based = $member->based;
$province = $member->province;
$diocese = $member->diocese;
$church = $member->church;
$designation = $member->designation;
$committee = $member->committee;
$user_photo = $member->user_photo;
$batch = $member->batch;
$status = $member->status;

?>
@extends('layouts.mem')

@section('title')
  <title>CONTACT ADMIN</title>
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
  <h3><strong>CONTACT ADMIN</strong></h3>
@stop

@section('main-page')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>DIVCCON SECRETARIAT</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>


        <div class="x_content">
          <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                <h2><strong>The Venerable Oluwaseun Owoeye</strong></h2>
                <h2><strong>+234(0)8063818592,+234(0)9096105650</strong></h2>
                <h2><strong>DIVCCON SECRETARY/ADMIN</strong></h2>
                <h2><strong>EMAIL: admin@divccon.com</strong></h2>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
                <br/>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
                <h2><strong>Engr. Ifeanyi Omeata</strong></h2>
                <h2><strong>+234(0)8136999580</strong></h2>
                <h2><strong>DIVCCON ICT/SOFTWARE</strong></h2>
                <h2><strong>EMAIL: admin@divccon.com</strong></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
