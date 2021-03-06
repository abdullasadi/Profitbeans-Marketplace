<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Import Fontawesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <title>{{ $title }}</title>
  </head>
  <body>
    <nav class="blue darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" data-activates="side-nav" class="button-collapse show-on-large mr-0">
            <i class="material-icons">menu</i>
          </a>
          <a href="#" data-activates="side-nav" class="button-collapse show-on-large ml-2">Menu</a>
          <!-- Side Navigation -->
          <ul id="side-nav" class="side-nav">
            <li>
              <div class="user-view">
                <div class="background">
                  <img src="{{ asset('img/ocean.jpg') }}">
                </div>
                <a href="#user">
                  <img class="circle" src="{{ asset('img/person1.jpg') }}">
                </a>
                <a href="#name">
                  <span class="white-text name">Balbir Singh</span>
                </a>
                <a href="#email">
                  <span class="white-text email">dvrunlimited@gmail.com</span>
                </a>
              </div>
            </li>
            <li>
              <a href="{{ route('dashboard') }}">
                <i class="material-icons">dashboard</i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#!">Products</a>
            </li>
            <li>
              <a href="{{ route('categories') }}">Categories</a>
            </li>
            <li>
              <a href="#!">User</a>
            </li>
            <li>
              <div class="divider"></div>
            </li>
            <li>
              <a class="subheader">Account Controller</a>
            </li>
            <li>
              <a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>

          <!-- Main Navigation -->
          <ul class="right">
            <li>
              <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>
              <a href="{{ route('products') }}">Products</a>
            </li>
            <li>
              <a href="{{ route('categories') }}">Categories</a>
            </li>
            <li>
              <a href="#!">User</a>
            </li>
            <li>
              <a href="{{ route('manufacturers') }}">Manufacturers</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <footer class="section secton-footer white-text center blue darken-3">
      <p>dvrunlimited admin &copy; 2018</p>
    </footer>

    <!-- Fixed Action Button -->
    <div class="fixed-action-btn click-to-toggle">
      <a class="btn-floating waves-effect waves-light  btn-large red">
        <i class="large material-icons">menu</i>
      </a>
      <ul>
        <li>
          <a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Products List">
            <i class="material-icons">insert_chart</i>
          </a>
        </li>
        <li>
          <a class="btn-floating yellow darken-1 tooltipped" data-position="left" data-delay="50" data-tooltip="Overstock Console">
            <i class="fab fa-opera"></i>
          </a>
        </li>
        <li>
          <a class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Walmart Console">
            <i class="fas fa-snowflake"></i>
          </a>
        </li>
        <li>
          <a class="btn-floating blue tooltipped" data-position="left" data-delay="50" data-tooltip="Amazon Console">
            <i class="fab fa-amazon"></i>
          </a>
        </li>
      </ul>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('js/materialize09.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/m-autocomplete.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script-admin.js') }}"></script>

    @yield('script')
  </body>
</html>
