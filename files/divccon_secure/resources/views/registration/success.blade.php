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
$location = $member->location;
$anglican = $member->anglican;
$province = $member->province;
$diocese = $member->diocese;
$church = $member->church;
$designation = $member->designation;
$committee = $member->committee;
$user_photo = $member->user_photo;
$batch = $member->batch;
$status = $member->status;

//LET THE BARCODE NUMBER BE TAKEN FROM THE MEMBER ID IN THE DATABASE
$barcode = $id;

//SET THE TAGNAME TO BE THE COMBINATION OF THE TITLE, FIRSTNAME AND LASTNAME
$tag_name = $title." ".$firstname;



/* SMS Variables with the values to be sent. */
/* create the required URL */
$message=UrlEncode("Congratulations, ".$title." ".$firstname." ".$lastname."! You have successfully registered for DIVCCON. YOUR ID is: ".$id."; PIN is: ".$pin.".");

$url = "http://www.smslive247.com/http/index.aspx?cmd=sendquickmsg&owneremail=omeatai@gmail.com&subacct=DIVCCON&subacctpwd=Empirex123&message=$message&sender=DIVCCON&sendto=$phone&msgtype=0";


/* call the URL */
@fopen($url, "r");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>DIVCCON SUCCESS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Orelega+One&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{asset('css/success.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Be+Vietnam:800&display=swap" rel="stylesheet">

    <style>
        .badge_bg{
                background-image: url("{{ asset('img/SAMPLE.png') }}");
            }
    </style>

  </head>
  <body class="bg-light">

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="{{ asset('logo.png') }}" alt="" width="72" height="57">
      <h2 class="topic">REGISTRATION COMPLETED!</h2>
      <p class=""><span class="welcome">CONGRATULATIONS! {{ $title }} {{ $firstname }} {{ $lastname }} </span><br> <span class="topic2">SEE YOUR DETAILS BELOW:</span></p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-success"><b>Your registration progress:</b></span>
          <span class="badge bg-success rounded-pill">100%</span>
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
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">PROVINCE</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">DIOCESE</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">CHURCH</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">DESIGNATION</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">PHOTO</h6>
              <small>completed</small>
            </div>
            <span class="fas fa-check fa-lg"></span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total Completed</span>
            <strong>100%</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3"></h4>
            <div class="row">

                <table class="table" style="width:100%">
                    <thead>
                        <tr>
                           <th scope="col">
                            <br/>
                            <button class="btn btn-danger btn-lg pageButton" onClick="window.print();">PRINT</button>
                            <b style="color: red">Note: Print in "Landscape" with scale "50%" for best print layout!</b>
                           </th>
                           <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                           <td>

                                <!-- THE BADGE -->
                                <div class="row badge_bg relative">
                                    <div>
                                        <img class="badge_pic" src="{{ asset('avatars/'.$user_photo) }}" alt="*" width="130" height="170">
                                    <div>
                                    <div class="b relative">

                                        @if(strlen($tag_name)>=25)
                                        <div class="badge_name_small">{{ $tag_name }}</div>
                                        @else
                                        <div class="badge_name">{{ $tag_name }}</div>
                                        @endif


                                        @if(strlen($lastname)>=15)
                                        <div class="badge_lastname_small">{{ $lastname }}</div>
                                        @else
                                        <div class="badge_lastname">{{ $lastname }}</div>
                                        @endif


                                        @if(strlen($diocese)>=14)
                                        <div class="badge_diocese_small">{{ $diocese }}</div>
                                        @else
                                        <div class="badge_diocese">{{ $diocese }}</div>
                                        @endif

                                        @if(strlen($designation)>=10)
                                        <div class="badge_designation_small">{{ $designation }}</div>
                                        @else
                                        <div class="badge_designation">{{ $designation }}</div>
                                        @endif

                                        <div class="badge_barcode">
                                            <img src="https://api.qrserver.com/v1/create-qr-code/?data={{ $barcode }}&amp;size=100x100" alt="" title="DIVCCON" width="50" height="50" />
                                        </div>

                                        <div>
                                            <p class="number">#{{ $id }}</p>
                                        </div>

                                    </div>
                                <div>
                                <!-- /THE BADGE -->
                           </td>
                            <td>
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">PIN</th>
                                        <td>{{ $pin }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">ID</th>
                                        <td>#{{ $id }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">TITLE</th>
                                        <td>{{ $title }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">FIRSTNAME</th>
                                        <td>{{ $firstname }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">LASTNAME</th>
                                        <td>{{ $lastname }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">PHONE</th>
                                        <td>{{ $phone }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">EMAIL</th>
                                        <td>{{ $email }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">SEX</th>
                                        <td>{{ $sex }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">LOCATION</th>
                                        <td>{{ $location }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">ANGLICAN?</th>
                                        <td>{{ $anglican }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">PROVINCE</th>
                                        <td>{{ $province }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">DIOCESE</th>
                                        <td>{{ $diocese }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">CHURCH</th>
                                        <td>{{ $church }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">DESIGNATION</th>
                                        <td>{{ $designation }}</td>
                                      </tr>
                                    </tbody>
                                </table>
                            </td>
                    </tbody>
                </table>

            </div>

            <hr class="my-4">
            <div class="d-grid gap-2">
                <a class="btn btn-lg btn-success" href="{{ route('membership') }}" role="button">GO TO MEMBERSHIP-PANEL</a>
                <a class="btn btn-lg btn-danger" href="http://www.divccon.com" role="button">BACK TO WEBSITE</a>
            </div>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Copyright 2021 &copy; DIVCCON ICT TEAM</p>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
