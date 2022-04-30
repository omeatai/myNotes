<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>DIVCCON FORM-3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Orelega+One&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">

  </head>
  <body class="bg-light">

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{ asset('logo.png') }}" alt="" width="72" height="57">
      <h2 class="topic">REGISTRATION FORM III - Province & Diocese</h2>
      <p class=""><span class="welcome">Well done, {{ $title }} {{ $firstname }} {{ $lastname }} </span><br> <span class="topic2">PLEASE CONTINUE TO FILL THE FORM BELOW:</span></p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-danger">Your registration progress:</span>
          <span class="badge bg-danger rounded-pill">60%</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">FIRST NAME</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">LAST NAME</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">TITLE</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">PHONE</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">EMAIL</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">SEX</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">LOCATION</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">ANGLICAN?</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">PROVINCE</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">DIOCESE</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">CHURCH</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">DESIGNATION</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">PHOTO</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total Completed</span>
            <strong>60%</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Province & Diocese</h4>
        @include('inc.messages')
        <form method="POST" action="{{ route('registration3') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="province" class="form-label">What is your PROVINCE?</label>
                    <select class="form-select" name="province" id="province" onChange="getMyDiocese();" required autofocus>
                        <option value="" style="color: red" selected>-- Select PROVINCE --</option>
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
                        <option value="NIGERDELTA">NIGER DELTA PROVINCE</option>
                        <option value="OFTHENIGER">OF THE NIGER PROVINCE</option>
                        <option value="ONDO">ONDO PROVINCE</option>
                        <option value="OWERRI">OWERRI PROVINCE</option>
                        <option value="CANA">CANA</option>
                    </select>
                </div>
                {{--EXAMPLE--}}
                <div id="DIV_EXAMPLE" style="" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='EXAMPLE' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select your PROVINCE first --</option>
                    </select>
                </div>
                {{--LIST OF DIOCESES HIDDEN--}}
                {{--1. INSTITUTION--}}
                <div id="DIV_INSTITUTION" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='INSTITUTION' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select an INSTITUTION --</option>
                        <option value='CROWTHER SEMINARY, ABEOKUTA'>CROWTHER THEOLOGICAL SEMINARY, ABEOKUTA</option>
                        <option value='IBRU CENTRE, AGBARA OTTO'>IBRU CENTRE, AGBARA OTTO</option>
                        <option value='TRINITY COLLEGE, UMUAHIA'>TRINITY COLLEGE, UMUAHIA</option>
                        <option value='IMMANUEL COLLEGE, IBADAN'>IMMANUEL COLLEGE OF THEOLOGY, IBADAN</option>
                        <option value='VINING COLLEGE, AKURE'>VINING COLLEGE OF THEOLOGY, AKURE</option>
                        <option value='ST. FRANCIS OF ASSISI, WUSASA'>ST. FRANCIS OF ASSISI, WUSASA</option>
                        <option value='ST. PAULS SEMINARY, AWKA '>ST. PAUL'S SEMINARY, AWKA</option>
                        <option value='CROWTHER COLLEGE, OKENE '>CROWTHER THEOLOGICAL COLLEGE, OKENE</option>
                        <option value='POLICE CHAPLAINCY'>POLICE CHAPLAINCY</option>
                        <option value='INSTITUTION'>OTHER INSTITUTIONS</option>
                    </select>
                </div>
                {{--2. LAGOS--}}
                <div id="DIV_LAGOS" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='LAGOS' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--3. OFTHENIGER--}}
                <div id="DIV_OFTHENIGER" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='OFTHENIGER' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
                        <option value="ON THE NIGER">ON THE NIGER</option>
                        <option value="AWKA">AWKA</option>
                        <option value="NNEWI">NNEWI</option>
                        <option value="AGUATA">AGUATA</option>
                        <option value="OGBARU">OGBARU</option>
                        <option value="IHIALA">IHIALA</option>
                        <option value="NIGER WEST">NIGER WEST</option>
                        <option value="MBAMILI">MBAMILI</option>
                        <option value="AMICHI">AMICHI</option>
                    </select>
                </div>
                {{--4. NIGERDELTA--}}
                <div id="DIV_NIGERDELTA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='NIGERDELTA' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--5. IBADAN--}}
                <div id="DIV_IBADAN" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='IBADAN' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--6. ONDO--}}
                <div id="DIV_ONDO" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='ONDO' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--7. KADUNA--}}
                <div id="DIV_KADUNA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='KADUNA' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--8. OWERRI--}}
                <div id="DIV_OWERRI" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='OWERRI' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--9. BENDEL--}}
                <div id="DIV_BENDEL" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='BENDEL' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--10. ENUGU--}}
                <div id="DIV_ENUGU" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='ENUGU' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--11. ABA--}}
                <div id="DIV_ABA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='ABA' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
                        <option value="ABA">ABA</option>
                        <option value="UMUAHIA">UMUAHIA</option>
                        <option value="UKWA">UKWA</option>
                        <option value="ISUIKWUATO-UMUNNEOCHI">ISUIKWUATO-UMUNNEOCHI</option>
                        <option value="AROCHUKWU">AROCHUKWU</option>
                        <option value="IKWUANO">IKWUANO</option>
                        <option value="ISIALA NGWA SOUTH">ISIALA NGWA SOUTH</option>
                        <option value="ISIALA NGWA">ISIALA NGWA</option>
                        <option value="ABA NGWA NORTH">ABA NGWA NORTH</option>
                    </select>
                </div>
                {{--12. KWARA--}}
                <div id="DIV_KWARA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='KWARA' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
                        <option value="KWARA">KWARA</option>
                        <option value="OFFA">OFFA</option>
                        <option value="IGBOMINA">IGBOMINA</option>
                        <option value="NEW BUSSA">NEW BUSSA</option>
                        <option value="OMU ARAN">OMU ARAN</option>
                        <option value="JEBBA">JEBBA</option>
                        <option value="EKITI KWARA">EKITI KWARA</option>
                        <option value="IGBOMINA WEST">IGBOMINA WEST</option>
                    </select>
                </div>
                {{--13. JOS--}}
                <div id="DIV_JOS" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='JOS' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--14. ABUJA--}}
                <div id="DIV_ABUJA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='ABUJA' disabled = 'disabled' onChange="getMyChurch(this);" required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--15. LOKOJA--}}
                <div id="DIV_LOKOJA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='LOKOJA' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
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
                    </select>
                </div>
                {{--16. CANA--}}
                <div id="DIV_CANA" style="display: none;" class='form-group col-sm-6'>
                    <label for="diocese" class="form-label">What is your DIOCESE?</label>
                    <select class='form-control select' name='diocese' id='CANA' disabled = 'disabled' required autofocus>
                        <option value='' style='color: red' selected>-- Select a DIOCESE --</option>
                        <option value="CANA">CANA</option>
                    </select>
                </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Copyright 2021 &copy; DIVCCON ICT TEAM</p>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="{{ asset('js/reg3.js')}}"></script>
<script src="form-validation.js"></script>
  </body>
</html>
