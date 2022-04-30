<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>DIVCCON FORM-4</title>

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
      <h2 class="topic">REGISTRATION FORM IV - Church</h2>
      <p class=""><span class="welcome">Nice!, {{ $title }} {{ $firstname }} {{ $lastname }} </span><br> <span class="topic2">CONTINUE TO FILL THE FORM BELOW:</span></p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-danger">Your registration progress:</span>
          <span class="badge bg-danger rounded-pill">75%</span>
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
            <strong>75%</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Church</h4>
        @include('inc.messages')
        <form method="POST" action="{{ route('registration4') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <label for="church" class="form-label">What CHURCH do you attend in Abuja?</label>
                    <select class="form-select" name="church" id="church" required autofocus>
                        <option value="" style="color: red" selected>-- Select CHURCH --</option>
                        <option value="CATHEDRAL">THE CATHEDRAL, LIFECAMP</option>
                        <option value="WUSE">WUSE ARCHDEACONRY</option>
                        <option value="ASOKORO">ASOKORO ARCHDEACONRY</option>
                        <option value="MAITAMA">MAITAMA ARCHDEACONRY</option>
                        <option value="GUDU">GUDU ARCHDEACONRY</option>
                        <option value="DURUMI">DURUMI ARCHDEACONRY</option>
                        <option value="MPAPE">MPAPE ARCHDEACONRY</option>
                        <option value="GWARINPA">GWARINPA ARCHDEACONRY</option>
                        <option value="KABUSA">KABUSA ARCHDEACONRY</option>
                        <option value="NULL">NOT IN ABUJA</option>
                    </select>
                </div>
                {{--EXAMPLE--}}
                <div id="" style="" class='form-group col-sm-6'>

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

  </body>
</html>
