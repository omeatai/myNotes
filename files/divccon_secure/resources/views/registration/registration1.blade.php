<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>DIVCCON FORM-1</title>

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
      <h2 class="topic">REGISTRATION FORM I - Personal Details</h2>
      <p class="topic2">To begin registration, Please Fill the form below. <br/>For Instructions on How to get a PIN or for assistance
          <a class="btn btn-danger btn-sm" href="https://www.divccon.com/how-to-register-for-divccon/" target="_blank" role="button"><b>CLICK HERE</b></a>
        <br/>or CALL: +234-8063818592 or +234-9096105650.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-danger">Your registration progress:</span>
          <span class="badge bg-danger rounded-pill">0%</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">FIRST NAME</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">LAST NAME</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">TITLE</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">PHONE</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">EMAIL</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">SEX</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">LOCATION</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">ANGLICAN?</h6>
              <small class="text-muted">Pending...</small>
            </div>
            <span class="fas fa-exclamation-triangle fa-lg"></span>
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
            <strong>0%</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Personal Details</h4>
        @include('inc.messages')
        <form method="POST" action="{{ route('registration') }}">
            @csrf
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="pin" class="form-label">PIN</label>
                    <input type="text" class="form-control" name="pin" id="pin" placeholder="PIN...(Eg.: A1B2C3)" value="" required>
                </div>
                <div class="col-sm-6">

                </div>`
            </div>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstname" class="form-label">First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="FIRSTNAME...(Eg.: JOHN)" value="{{ old('firstname') }}" required>
                 </div>

                <div class="col-sm-6">
                    <label for="lastname" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LASTNAME...(Eg.: DOE)" value="{{ old('lastname') }}" required>
                   </div>`
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="TITLE...(Eg.: Revd Canon)" value="{{ old('title') }}" required>
                </div>

                <div class="col-sm-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="PHONE...(Eg.: 08034567890)" value="{{ old('phone') }}" required>
                </div>`
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL....(Eg.: johndoe@gmail.com)" value="{{ old('email') }}" required>
                </div>
                <div class="col-sm-6">
                    <label for="confirmemail" class="form-label">Confirm Email</label>
                    <input type="email" class="form-control" name="confirmemail" id="confirmemail" placeholder="CONFIRM EMAIL....(Eg.: johndoe@gmail.com)" value="{{ old('confirmemail') }}" required>
                </div>`
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <label for="sex" class="form-label">Sex</label>
                    <select class="form-select" name="sex" id="sex" required autofocus>
                        <option value="" style="color: red" selected>Choose...</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>
                </div>
                <div class="col-sm-6"></div>`
            </div>

            <hr class="my-4">
            <p><button class="w-100 btn btn-primary btn-lg" type="submit">CONTINUE &raquo;</button></p>
            <p><a class="w-100 btn btn-danger btn-lg" href="/" role="button"><b>BACK TO HOME</b> &raquo;</a></p>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">Copyright 2021 &copy; DIVCCON ICT TEAM</p>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script src="form-validation.js"></script>
  </body>
</html>
