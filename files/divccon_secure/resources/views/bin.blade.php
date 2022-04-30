###########################################################
###########################################################
###########################################################
###########################################################
###########################################################

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>DIVCCON</title>
  </head>
  <body>
    <h1>DIVCCON</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>






###########################################################
###########################################################
###########################################################
###########################################################
###########################################################



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
<body>

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
          <a class="nav-link" href="{{ route('registration') }}" target="_blank">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('membership') }}" target="_blank">Membership-Panel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" target="_blank">Admin</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<main class="container">
<div class="row">
    <div class="col-6">
        <div class="bg-light p-5 rounded">
            <h1><img src="{{ asset('logo.png') }}" /><span class="divname">DIVCCON</span></h1>
            <p class="divname2">Welcome to DIVCCON 2021.</p>
            <div class="d-grid gap-2">
                <a class="btn btn-lg btn-primary" href="{{ route('registration') }}" target="_blank" role="button">NEW REGISTRATION</a>
                <a class="btn btn-lg btn-success" href="{{ route('membership') }}" target="_blank" role="button">MEMBERSHIP-PANEL</a>
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



#9A9C9F




###########################################################
###########################################################
###########################################################
###########################################################
###########################################################

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
        <link rel="icon" href="{{ asset('icons/logo.png')}}" type="image/png" />
        <title>DIVCCON</title>
        @yield('links')
    </head>
    <body class="grey">
        @include('inc.navbar')
        @yield('jumbo')
        <div class="container">
            @yield('content')
        </div>

        <footer id="footer" class="text-center">
            <p>Copyright 2020 &copy; DIVCCON ICT TEAM</p>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>


@extends('layouts.app')

@section('jumbo')
    <div class="jumbotron text-center jumbo">
        <div class="container">
            <p><img src="{{ asset('logo.png')}}" alt="DIVCCON LOGO" width="120" height="120"></p>
            <h1 class="display-3">Welcome to DIVCCON 2020.</h1>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="size-150">WHAT WOULD YOU LIKE TO DO?</h1>
                    <br>
                    <p><a class="btn btn-success btn-lg" href="/registration1" role="button"><b>NEW REGISTRATION</b> &raquo;</a></p>
                    <p><a class="btn btn-primary btn-lg" href="/membership" role="button"><b>MEMBERSHIP PANEL</b> &raquo;</a></p>
                    <p><a class="btn btn-light btn-lg" href="https://divccon.com/#how-to-register" target="_blank" role="button"><b>HOW TO REGISTER</b> &raquo;</a></p>
                    <p><a class="btn btn-danger btn-lg" href="https://www.divccon.com/" role="button"><b>BACK TO DIVCCON WEBSITE</b> &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

@endsection


###########################################################
###########################################################
###########################################################
###########################################################
###########################################################
































