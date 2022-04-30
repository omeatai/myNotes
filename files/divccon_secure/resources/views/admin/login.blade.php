<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="icon" href="{{asset('adm/logo.png')}}">

  <title>DIVCCON ADMIN</title>

    <!-- Bootstrap core CSS -->
  <link href="{{asset('adm/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="{{asset('adm/signin.css')}}" rel="stylesheet">
  </head>

  <body class="text-center">



    <div class="form-signin">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img class="mb-4" src="{{asset('adm/logo.png')}}" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal"><strong>WELCOME TO THE DIVCCON ADMIN PAGE</strong></h1>
            @include('inc.messages')
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required autofocus>
            <p></p>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

            <div class="form-group">
                <select id="role" name="role" class="form-control">
                <option selected value="SECRETARIAT">SECRETARIAT</option>
                </select>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
            <p class="mt-5 mb-3 text-muted">&copy; DIVCCON.</p>
        </form>
    </div>

  </body>
</html>
