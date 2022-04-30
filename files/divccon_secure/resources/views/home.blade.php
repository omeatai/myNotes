<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>DIVCCON</title>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Orelega+One&display=swap" rel="stylesheet">

<!-- Favicons -->
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">

</head>
<body class="grey">

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand divname" href="{{ route('home') }}">DIVCCON</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('registration') }}" >Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('membership') }}" >Membership-Panel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" >Admin</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<main class="container grey">
<div class="row">
    <div class="col-6">
        <div class="bg-light p-5 rounded">
            <h1><img src="{{ asset('logo.png') }}" /><span class="divname">DIVCCON</span></h1>
            <p class="divname2">Welcome to DIVCCON 2021 Registration.</p>
            <div class="d-grid gap-2">
                <a class="btn btn-lg btn-primary" href="{{ route('registration') }}" role="button">NEW REGISTRATION</a>
                <a class="btn btn-lg btn-success" href="{{ route('membership') }}"  role="button">MEMBERSHIP-PANEL</a>
                <a class="btn btn-lg btn-danger" href="http://www.divccon.com" role="button">BACK TO WEBSITE</a>
            </div>
        </div>
    </div>
    <div class="col-6 logo">
        <div class="row">
            <img src="{{ asset('logo_ang.png') }}" height="250px" width="300px" />
        </div>
    </div>

</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
