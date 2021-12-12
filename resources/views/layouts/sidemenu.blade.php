<head>
    <!-- Styles -->
    <link   href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<div class="vertical-nav " id="sidebar">
  <div class="py-4 px-3 mb-4 ">
    <div class="media d-flex align-items-center">
      <img src="https://bootstrapious.com/i/snippets/sn-v-nav/avatar.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h5 class="m-0 text-light"> <small>{{ Auth::user()->name }}</small></h5>
        <p class="font-weight-dark text-light mb-0">Bienvenido</p>
      </div>
    </div>
  </div>
  <ul class="nav flex-column mb-0 text-center">
  <br><br><br><br>
    <li class="nav-item text-light ">
      <img  src="{{ asset('img/dashboard.png') }}" alt="">
      <a href="/dashboard" class="nav-link  text-light">
        <i class="fa fa-th-large mr-3 fa-fw"></i>  Dashboard  </a>
    </li>
    <br>
    <li class="nav-item dropdown">
        <img  src="{{ asset('img/areas.png') }}" alt="">
      <div class="">
        <a class="nav-link text-light"><i class="fa fa-th-large mr-3 text-primary fa-fw"></i>Areas</a>
        <div class="dropdown-content">
          <a href="triturado">Triturado</a>
          <a href="raspado">Raspado</a>
          <a href="deshidratadora">Deshidratadora</a>
          <a href="freido">Freido</a>
        </div>
      </div>
    </li>
      <br>
    <li class="nav-item">
      <img  src="{{ asset('img/reportes.png') }}" alt="">
      <a href="#" class="nav-link text-light">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>  Reportes  </a>
    </li>
      <br>
    <li class="nav-item">
      <img  src="{{ asset('img/administracion.png') }}" alt="">
      <a href="#" class="nav-link text-light">  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>  Administracion  </a>
    </li>
    <br>
    <br>
    <br>
    <li class="nav-item text-center">
      <img  src="{{ asset('img/back.png') }}" alt="">
      <a class="nav-link text-light text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          {{ __('Salir') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>
      </ul>

</div>
