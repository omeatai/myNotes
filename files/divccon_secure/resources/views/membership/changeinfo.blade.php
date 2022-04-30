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
  <title>CHANGE INFORMATION</title>
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
  <h3><strong>CHANGE YOUR INFORMATION</strong></h3>
@stop

@section('main-page')
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>MY PROFILE</h2>
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
      <a href="/dashboard" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>View Full Profile</a>
      <a href="/changephoto" class="btn btn-primary"><i class="fa fa-edit m-right-xs"></i>Change Photo</a><br>
      <a href="/logout" id="printPageButton" class="btn btn-danger"><i class="fa fa-edit m-right-xs"></i>Logout</a>
      <br />
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">

      <div class="row">
        @include('inc.messages')
        <form method="POST" action="{{ route('changeinfo') }}">
            @csrf
            <p style="text-align: center; font-size:120%">Edit your Information below and confirm changes:</p>
            <div class="row form-group">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <h2><label for="id">ID: </label></h2>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input class="form-control" name="id" id="id" type="text" placeholder="{{$id}}" value="{{$id}}" readonly="readonly">
            </div>

            </div>

            <div class="row form-group">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <h2><label for="pin">PIN: </label></h2>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input class="form-control" name="pin" id="pin" type="text" placeholder="{{$pin}}" value="{{$pin}}" readonly="readonly">
            </div>
            </div>



            <div class="row form-group">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <h2><label for="title">TITLE: </label></h2>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input class="form-control" name="title" id="title" type="text" placeholder="ENTER TITLE..." value={{$title}} required autofocus>
            </div>
            </div>

            <div class="row form-group">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <h2><label for="firstname">FIRSTNAME: </label></h2>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
                <input class="form-control" name="firstname" id="firstname" type="text" placeholder="ENTER FIRSTNAME..." value={{$firstname}} required autofocus>
            </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="lastname">LASTNAME: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <input class="form-control" name="lastname" id="lastname" type="text" placeholder="ENTER LASTNAME..." value={{$lastname}} required autofocus>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="phone">PHONE: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <input class="form-control" name="phone" id="phone" type="text" placeholder="ENTER PHONE..." value={{$phone}} required autofocus>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="email">EMAIL: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <input class="form-control" name="email" id="email" type="text" placeholder="ENTER EMAIL..." value={{$email}} required autofocus>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="sex">SEX: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="sex" id="sex" required>
                        <option value="{{ $sex }}" style="color: red" selected>{{$sex}}</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="sex">LOCATION: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="location" id="location" required>
                        <option value="{{ $location }}" style="color: red" selected>{{$location}}</option>
                        <option value="HOME">NIGERIA</option>
                        <option value="ABROAD">ABROAD (OUTSIDE NIGERIA)</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="anglican">ANGLICAN: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="anglican" id="anglican" required>
                        <option value="{{ $anglican }}" style="color: red" selected>{{$anglican}}</option>
                        <option value="ANGLICAN">YES, ANGLICAN</option>
                        <option value="NON_ANGLICAN">NO, NON-ANGLICAN</option>
                    </select>
                </div>
            </div>





            {{--LIST OF PROVINCES--}}
            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="province">PROVINCE: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="province" id="province" required autofocus>
                        <option value="{{ $province }}" style="color: red" selected>{{ $province }}</option>
                        <option value="INSTITUTION">INSTITUTION</option>
                        <option value="ABA">ABA PROVINCE</option>
                        <option value="ABUJA">ABUJA PROVINCE</option>
                        <option value="BENDEL">BENDEL PROVINCE</option>
                        <option value="ENUGU">ENUGU PROVINCE</option>
                        <option value="IBADAN">IBADAN PROVINCE</option>
                        <option value="JOS">JOS PROVINCE</option>
                        <option value="KADUNA">KADUNA PROVINCE</option>
                        <option value="KWARA">KWARA PROVINCE</option>
                        <option value="LAGOS">LAGOS PROVINCE</option>
                        <option value="LOKOJA">LOKOJA PROVINCE</option>
                        <option value="NIGER DELTA">NIGER DELTA PROVINCE</option>
                        <option value="OF THE NIGER">OF THE NIGER PROVINCE</option>
                        <option value="ONDO">ONDO PROVINCE</option>
                        <option value="OWERRI">OWERRI PROVINCE</option>
                        <option value="CANA">CANA</option>
                        <option value= "ABROAD">ABROAD</option>
                        <option value= "GUEST">NON-ANGLICAN</option>
                    </select>
                </div>
            </div>

            {{--LIST OF DIOCESES--}}
            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="diocese">DIOCESE: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="diocese" id="diocese" required autofocus>
                        <option value="{{ $diocese }}" style="color: red" selected>{{ $diocese }}</option>

                        <option value='' style='color: red'>-- INSTITUTION --</option>
                        <option value="CROWTHER SEMINARY, ABEOKUTA">CROWTHER THEOLOGICAL SEMINARY, ABEOKUTA</option>
                        <option value='IBRU CENTRE, AGBARA OTTO'>IBRU CENTRE, AGBARA OTTO</option>
                        <option value="TRINITY COLLEGE, UMUAHIA">TRINITY COLLEGE, UMUAHIA</option>
                        <option value="IMMANUEL COLLEGE, IBADAN">IMMANUEL COLLEGE OF THEOLOGY, IBADAN</option>
                        <option value="VINING COLLEGE, AKURE">VINING COLLEGE OF THEOLOGY, AKURE</option>
                        <option value="ST. FRANCIS OF ASSISI, WUSASA">ST. FRANCIS OF ASSISI, WUSASA</option>
                        <option value="ST. PAULS SEMINARY, AWKA">ST. PAUL'S SEMINARY, AWKA</option>
                        <option value="CROWTHER COLLEGE, OKENE">CROWTHER THEOLOGICAL COLLEGE, OKENE</option>
                        <option value="POLICE CHAPLAINCY">POLICE CHAPLAINCY</option>
                        <option value="INSTITUTION">OTHER INSTITUTIONS</option>

                        <option value='' style='color: red'>-- ABA PROVINCE --</option>
                        <option value="ABA">ABA</option>
                        <option value="UMUAHIA">UMUAHIA</option>
                        <option value="UKWA">UKWA</option>
                        <option value="ISUIKWUATO-UMUNNEOCHI">ISUIKWUATO-UMUNNEOCHI</option>
                        <option value="AROCHUKWU">AROCHUKWU</option>
                        <option value="IKWUANO">IKWUANO</option>
                        <option value="ISIALA NGWA SOUTH">ISIALA NGWA SOUTH</option>
                        <option value="ISIALA NGWA">ISIALA NGWA</option>
                        <option value="ABA NGWA NORTH">ABA NGWA NORTH</option>

                        <option value='' style='color: red'>-- ABUJA PROVINCE --</option>
                        <option value="ABUJA">ABUJA</option>
                        <option value="KAFANCHAN">KAFANCHAN</option>
                        <option value="MAKURDI">MAKURDI</option>
                        <option value="OTUKPO">OTUKPO</option>
                        <option value="GWAGWALADA">GWAGWALADA</option>
                        <option value="LAFIA">LAFIA</option>
                        <option value="KUBWA">KUBWA</option>
                        <option value="ZONKWA">ZONKWA</option>
                        <option value="KWOI">KWOI</option>
                        <option value="ZAKI-BIAM">ZAKI-BIAM</option>
                        <option value="GBOKO">GBOKO</option>

                        <option value='' style='color: red'>-- BENDEL PROVINCE --</option>
                        <option value="BENIN">BENIN</option>
                        <option value="ASABA">ASABA</option>
                        <option value="WARRI">WARRI</option>
                        <option value="SABONGIDA ORA">SABONGIDA ORA</option>
                        <option value="UGHELLI">UGHELLI</option>
                        <option value="OLEH">OLEH</option>
                        <option value="ESAN">ESAN</option>
                        <option value="IKA">IKA</option>
                        <option value="WESTERN IZON">WESTERN IZON</option>
                        <option value="AKOKO EDO">AKOKO EDO</option>
                        <option value="ETSAKO">ETSAKO</option>
                        <option value="NDOKWA">NDOKWA</option>
                        <option value="SAPELE">SAPELE</option>

                        <option value='' style='color: red'>-- ENUGU PROVINCE --</option>
                        <option value="ENUGU">ENUGU</option>
                        <option value="NSUKKA">NSUKKA</option>
                        <option value="ABAKALIKI">ABAKALIKI</option>
                        <option value="OJI RIVER">OJI RIVER</option>
                        <option value="AWGU/ANINRI">AWGU/ANINRI</option>
                        <option value="ENUGU NORTH">ENUGU NORTH</option>
                        <option value="NGBO">NGBO</option>
                        <option value="IKWO">IKWO</option>
                        <option value="AFIKPO">AFIKPO</option>
                        <option value="NIKE">NIKE</option>
                        <option value="UDI">UDI</option>
                        <option value="EHA AMUFU">EHA AMUFU</option>

                        <option value='' style='color: red'>-- IBADAN PROVINCE --</option>
                        <option value="IBADAN">IBADAN</option>
                        <option value="ILESHA">ILESHA</option>
                        <option value="OSUN">OSUN</option>
                        <option value="IFE">IFE</option>
                        <option value="OKE-OSUN">OKE-OSUN</option>
                        <option value="IBADAN NORTH">IBADAN NORTH</option>
                        <option value="IBADAN SOUTH">IBADAN SOUTH</option>
                        <option value="OYO">OYO</option>
                        <option value="OGBOMOSO">OGBOMOSO</option>
                        <option value="OKE OGUN">OKE OGUN</option>
                        <option value="AJAYI CROWTHER">AJAYI CROWTHER</option>
                        <option value="IFE EAST">IFE EAST</option>
                        <option value="OSUN NORTH">OSUN NORTH</option>
                        <option value="ILESHA SOUTH">ILESHA SOUTH</option>
                        <option value="IJESHA NORTH">IJESHA NORTH</option>
                        <option value="OSUN NORTH EAST">OSUN NORTH EAST</option>
                        <option value="IJESHA NORTH EAST">IJESHA NORTH EAST</option>
                        <option value="ILESA SOUTH WEST">ILESA SOUTH WEST</option>

                        <option value='' style='color: red'>-- JOS PROVINCE --</option>
                        <option value="JOS">JOS</option>
                        <option value="DAMATURU">DAMATURU</option>
                        <option value="YOLA">YOLA</option>
                        <option value="MAIDUGURI">MAIDUGURI</option>
                        <option value="BAUCHI">BAUCHI</option>
                        <option value="JALINGO">JALINGO</option>
                        <option value="GOMBE">GOMBE</option>
                        <option value="PANKSHIN">PANKSHIN</option>
                        <option value="BUKURU">BUKURU</option>
                        <option value="LANGTANG">LANGTANG</option>

                        <option value='' style='color: red'>-- KADUNA PROVINCE --</option>
                        <option value="KADUNA">KADUNA</option>
                        <option value="KANO">KANO</option>
                        <option value="KATSINA">KATSINA</option>
                        <option value="SOKOTO">SOKOTO</option>
                        <option value="KEBBI">KEBBI</option>
                        <option value="DUTSE">DUTSE</option>
                        <option value="WUSASA">WUSASA</option>
                        <option value="GUSAU">GUSAU</option>
                        <option value="ZARIA">ZARIA</option>
                        <option value="BARI">BARI</option>
                        <option value="IKARA">IKARA</option>

                        <option value='' style='color: red'>-- KWARA PROVINCE --</option>
                        <option value="KWARA">KWARA</option>
                        <option value="OFFA">OFFA</option>
                        <option value="IGBOMINA">IGBOMINA</option>
                        <option value="NEW BUSSA">NEW BUSSA</option>
                        <option value="OMU ARAN">OMU ARAN</option>
                        <option value="JEBBA">JEBBA</option>
                        <option value="EKITI KWARA">EKITI KWARA</option>
                        <option value="IGBOMINA WEST">IGBOMINA WEST</option>

                        <option value='' style='color: red'>-- LAGOS PROVINCE --</option>
                        <option value='LAGOS'>LAGOS</option>
                        <option value='EGBA'>EGBA</option>
                        <option value='IJEBU'>IJEBU</option>
                        <option value='REMO'>REMO</option>
                        <option value='YEWA'>YEWA</option>
                        <option value='LAGOS WEST'>LAGOS WEST</option>
                        <option value='BADAGRY'>BADAGRY</option>
                        <option value='IJEBU NORTH'>IJEBU NORTH</option>
                        <option value='LAGOS MAINLAND'>LAGOS MAINLAND</option>
                        <option value='IFO'>IFO</option>
                        <option value='EGBA WEST'>EGBA WEST</option>
                        <option value='AWORI'>AWORI</option>
                        <option value='IJEBU SOUTH WEST'>IJEBU SOUTH WEST</option>

                        <option value='' style='color: red'>-- LOKOJA PROVINCE --</option>
                        <option value="LOKOJA">LOKOJA</option>
                        <option value="MINNA">MINNA</option>
                        <option value="BIDA">BIDA</option>
                        <option value="IDAH">IDAH</option>
                        <option value="KABBA">KABBA</option>
                        <option value="KONTAGORA">KONTAGORA</option>
                        <option value="KUTIGI">KUTIGI</option>
                        <option value="IJUMU">IJUMU</option>
                        <option value="OKENE">OKENE</option>
                        <option value="OGORI-MAGONGO">OGORI-MAGONGO</option>
                        <option value="DOKO">DOKO</option>

                        <option value='' style='color: red'>-- NIGER DELTA PROVINCE --</option>
                        <option value="NIGER DELTA">NIGER DELTA</option>
                        <option value="CALABAR">CALABAR</option>
                        <option value="UYO">UYO</option>
                        <option value="NIGER DELTA NORTH">NIGER DELTA NORTH</option>
                        <option value="NIGER DELTA WEST">NIGER DELTA WEST</option>
                        <option value="OKRIKA">OKRIKA</option>
                        <option value="AHOADA">AHOADA</option>
                        <option value="OGONI">OGONI</option>
                        <option value="ETCHE">ETCHE</option>
                        <option value="IKWERRE">IKWERRE</option>
                        <option value="NORTHERN IZON">NORTHERN IZON</option>
                        <option value="OGBIA">OGBIA</option>
                        <option value="EVO">EVO</option>

                        <option value='' style='color: red'>-- OF THE NIGER PROVINCE --</option>
                        <option value="ON THE NIGER">ON THE NIGER</option>
                        <option value="AWKA">AWKA</option>
                        <option value="NNEWI">NNEWI</option>
                        <option value="AGUATA">AGUATA</option>
                        <option value="OGBARU">OGBARU</option>
                        <option value="IHIALA">IHIALA</option>
                        <option value="NIGER WEST">NIGER WEST</option>
                        <option value="MBAMILI">MBAMILI</option>
                        <option value="AMICHI">AMICHI</option>

                        <option value='' style='color: red'>-- ONDO PROVINCE --</option>
                        <option value="ONDO">ONDO</option>
                        <option value="EKITI">EKITI</option>
                        <option value="AKOKO">AKOKO</option>
                        <option value="OWO">OWO</option>
                        <option value="AKURE">AKURE</option>
                        <option value="ON THE COAST">ON THE COAST</option>
                        <option value="EKITI WEST">EKITI WEST</option>
                        <option value="EKITI OKE">EKITI OKE</option>
                        <option value="ILAJE">ILAJE</option>
                        <option value="IRELE ESEDO">IRELE ESEDO</option>
                        <option value="ILE-OLUJI">ILE-OLUJI</option>
                        <option value="IDO-ANI">IDO-ANI</option>

                        <option value='' style='color: red'>-- OWERRI PROVINCE --</option>
                        <option value="OWERRI">OWERRI</option>
                        <option value="ORLU">ORLU</option>
                        <option value="MBAISE">MBAISE</option>
                        <option value="ISI-MBANO">ISI-MBANO</option>
                        <option value="OKIGWE SOUTH">OKIGWE SOUTH</option>
                        <option value="EGBU">EGBU</option>
                        <option value="IDEATO">IDEATO</option>
                        <option value="OHAJI/EGBEMA">OHAJI/EGBEMA</option>
                        <option value="ON THE LAKE">ON THE LAKE</option>
                        <option value="ORU">ORU</option>
                        <option value="OKIGWE">OKIGWE</option>
                        <option value="IKEDURU">IKEDURU</option>

                        <option value='' style='color: red'>-- CANA PROVINCE --</option>
                        <option value="CANA">CANA</option>

                        <option value='' style='color: red'>-- ABROAD OR VISITOR --</option>
                        <option value= "ABROAD">ABROAD</option>
                        <option value= "GUEST">NON-ANGLICAN</option>

                    </select>
                </div>
            </div>


            {{--LIST OF DESIGNATION--}}
            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="designation">DESIGNATION: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="designation" id="designation" required autofocus>
                        <option value="{{ $designation }}" style="color: red" selected>{{ $designation }} </option>
                        <option value="DELEGATE">DELEGATE</option>
                        <option value="CLERGY">CLERGY</option>
                        <option value="BISHOPS_WIFE">BISHOPS WIFE</option>
                        <option value="BISHOP">BISHOP</option>
                        <option value="ARCHBISHOP">ARCHBISHOP</option>
                        <option value="PRIMATE">PRIMATE</option>
                        <option value= "VISITOR">VISITOR</option>
                    </select>
                </div>
            </div>


            {{--LIST OF CHURCHES--}}
            <div class="row form-group">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <h2><label for="church">CHURCH: </label></h2>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <select class="form-control select" name="church" id="church" required autofocus>
                        <option value="{{ $church }}" style="color: red" selected>{{ $church }} </option>
                        <option value= "NULL">NOT IN ABUJA DIOCESE</option>
                        <option value= "NULL">NON-ANGLICAN</option>
                        <option value="CATHEDRAL">THE CATHEDRAL, LIFECAMP</option>
                        <option value="WUSE">WUSE ARCHDEACONRY</option>
                        <option value="ASOKORO">ASOKORO ARCHDEACONRY</option>
                        <option value="MAITAMA">MAITAMA ARCHDEACONRY</option>
                        <option value="GUDU">GUDU ARCHDEACONRY</option>
                        <option value="DURUMI">DURUMI ARCHDEACONRY</option>
                        <option value="MPAPE">MPAPE ARCHDEACONRY</option>
                        <option value="GWARINPA">GWARINPA ARCHDEACONRY</option>
                        <option value="KABUSA">KABUSA ARCHDEACONRY</option>
                    </select>
                </div>
            </div>

            <br>

            <p><button type="submit" class="btn btn-danger btn-block blue-button">CONFIRM CHANGE</button></p>
            <p><a class="btn btn-primary btn-block" href="/dashboard" role="button"><b>BACK TO DASHBOARD</b> &raquo;</a></p>
            </form>

      </div>
      <br><br><br><br>

    </div>
  </div>
      </div>
    </div>
  </div>
@stop



@section('footer')


@stop
