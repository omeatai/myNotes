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

?>
@extends('layouts.mem')

@section('title')
  <title>DASHBOARD</title>
@stop

@section('menu-profile')
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="{{ asset('avatars/'.$user_photo) }}" alt="..." class="img-circle profile_img">
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
  <h3><strong>Welcome, </strong>{{$title}} {{$firstname}} {{$lastname}}</h3>
@stop

@section('main-page')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>MY PROFILE</h2>
          @include('inc.messages')
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
          <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
            <div class="profile_img">
              <div id="crop-avatar">
                <!-- Current avatar -->
                <img class="img-responsive avatar-view" src="{{ asset('avatars/'.$user_photo) }}" alt="Avatar" title="Profile Pic" width="200" height="200">
              </div>
            </div>
            <h4><strong>{{$title}} {{$firstname}} {{$lastname}}</strong></h4>
            <a href="/changeinfo" id="printPageButton" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
            <a onClick="window.print()" id="printPageButton" class="btn btn-primary print-window"><i class="fa fa-edit m-right-xs"></i>Print Profile</a><br>
            <a href="/logout" id="printPageButton" class="btn btn-danger"><i class="fa fa-edit m-right-xs"></i>Logout</a>
            <br />
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12" id="pageunbreak">

            <!-- start user projects -->
            <table class="data table table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th><strong>INFORMATION</strong></th>
                <th><strong>YOUR DETAILS</strong></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>YOUR <strong>MEMBER ID:</strong></td>
                <td><h2><strong>{{$id}}</strong></h2></td>
              </tr>
              <tr>
                <td>2</td>
                <td>YOUR <strong>PIN:</strong></td>
                <td><h2><strong>{{$pin}}</strong></h2></td>
              </tr>
              <tr>
                <td>3</td>
                <td>YOUR <strong>TITLE:</strong></td>
                <td><h2><strong>{{$title}}</strong></h2></td>
              </tr>
              <tr>
                <td>4</td>
                <td>YOUR <strong>FIRSTNAME:</strong></td>
                <td><h2><strong>{{$firstname}}</strong></h2></td>
              </tr>
              <tr>
                <td>6</td>
                <td>YOUR <strong>LASTNAME:</strong></td>
                <td><h2><strong>{{$lastname}}</strong></h2></td>
              </tr>
              <tr>
                <td>7</td>
                <td>YOUR <strong>PHONE:</strong></td>
                <td><h2><strong>{{$phone}}</strong></h2></td>
              </tr>
              <tr>
                <td>8</td>
                <td>YOUR <strong>EMAIL:</strong></td>
                <td><h2><strong>{{$email}}</strong></h2></td>
              </tr>
              <tr>
                <td>9</td>
                <td>YOUR <strong>SEX:</strong></td>
                <td><h2><strong>{{$sex}}</strong></h2></td>
              </tr>
              <tr>
                <td>10</td>
                <td>YOU'RE <strong>ANGLICAN:</strong></td>
                <td><h2><strong>{{$anglican}}</strong></h2></td>
              </tr>
              <tr>
                <td>11</td>
                <td>YOU'RE <strong>LOCATION:</strong></td>
                <td><h2><strong>{{$location}}</strong></h2></td>
              </tr>
              <tr>
                <td>12</td>
                <td>YOUR <strong>PROVINCE:</strong></td>
                <td><h2>
                    @if($province == "NULL")
                    <strong>NONE</strong>
                    @else
                    <strong>{{$province}}</strong>
                    @endif
                </h2></td>
              </tr>
              <tr>
                <td>13</td>
                <td>YOUR <strong>DIOCESE:</strong></td>
                <td><h2>
                    @if($diocese == "NULL")
                    <strong>NONE</strong>
                    @else
                    <strong>{{$diocese}}</strong>
                    @endif
                </h2></td>
              </tr>
              <tr>
                  <td>14</td>
                  <td>YOUR <strong>CHURCH:</strong></td>
                  <td><h2>
                    @if($church == "NULL")
                    <strong>OUTSIDE ABUJA</strong>
                    @else
                    <strong>{{$church}}</strong>
                    @endif
                  </h2></td>
              </tr>
              <tr>
                <td>15</td>
                <td>YOUR <strong>DESIGNATION:</strong></td>
                <td><h2>
                    @if($designation == "NULL")
                    <strong>NONE</strong>
                    @else
                    <strong>{{$designation}}</strong>
                    @endif
                </h2></td>
              </tr>
              <tr>
                <td>16</td>
                <td>YOUR <strong>COMMITTEE:</strong></td>
                <td><h2>
                  @if($committee == "NULL")
                  <strong>NOT ISSUED</strong>
                  @else
                  <strong>{{$committee}}</strong>
                  @endif
                </h2></td>
              </tr>
              </tbody>
            </table>
            <!-- end user projects -->
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
