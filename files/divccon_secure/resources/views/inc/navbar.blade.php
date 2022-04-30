<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link {{ (Request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Request()->is('registration')) ? 'active' : '' }}" href="{{ route('registration') }}">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ (Request()->is('membership')) ? 'active' : '' }}" href="{{ route('membership') }}">Membership-Panel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Go</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="https://www.divccon.com">DIVCCON WEBSITE</a>
            <a class="dropdown-item" href="http://divccon.com/#contact" target="_blank">Contact Us</a>
            <a class="dropdown-item" href="">Admin</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
