@extends('layouts.print')

@section('main')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>UNPRINT BY OPTION: <small></small></h3>
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



        <!-- SEARCH BY OPTIONS: DIOCESE -->
        <div class="x_panel">
          <div class="x_title">
            <h2>DIOCESE</h2>
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
            <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('unprint_by_diocese') }}" data-parsley-validate enctype="multipart/form-data">
                @csrf
                @include('inc.messages')
              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value" >Value <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_single form-control" id="value" name="value" required="required"  tabindex="-1">
                    <option value="" style="color: red" selected>***Select Diocese</option>
                    <option value='' style='color: red'>-- VISITOR --</option>
                    <option value="ABROAD">ABROAD</option>
                    <option value="GUEST">GUEST (NON-ANGLICAN)</option>

                    <option value='' style='color: red'>-- INSTITUTION --</option>
                    <option value="CROWTHER SEMINARY, ABEOKUTA">CROWTHER THEOLOGICAL SEMINARY, ABEOKUTA</option>
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
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="search">Unprint by <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="select2_single form-control" id="search" name="search"  tabindex="-1">
                        <option value="diocese">DIOCESE</option>
                      </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success">Unprint</button>
                  <button onclick="window.close()" type="button" class="btn btn-danger">Go Back</button>
                </div>
              </div>
            </form>
          </div>
        </div>


        <!-- SEARCH BY OPTIONS: CHURCH -->
        <div class="x_panel">
          <div class="x_title">
            <h2>CHURCH</h2>
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
            <form class="form-horizontal form-label-left" id="demo-form2" method="POST" action="{{ route('unprint_by_church') }}" data-parsley-validate enctype="multipart/form-data">
                @csrf
                @include('inc.messages')
              <div class="form-group">

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value" >Value <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="select2_single form-control" id="value" name="value" required="required"  tabindex="-1">
                    <option value="" style="color: red" selected>***Select Church</option>
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

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="search">Unprint by <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="select2_single form-control" id="search" name="search"  tabindex="-1">
                        <option value="church">CHURCH</option>
                      </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" class="btn btn-success">Unprint</button>
                  <button onclick="window.close()" type="button" class="btn btn-danger">Go Back</button>
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

