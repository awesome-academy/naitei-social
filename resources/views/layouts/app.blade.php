<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@lang('app.social')</title>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/Font-Awesome/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/swiper.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/dark.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/font-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/library-for-naitei-social/css/responsive.css') }}" rel="stylesheet">
  <link href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet"> 
  @yield('styles')
</head>
<body class="stretched">
  <div id="wrapper" class="clearfix">
    <header id="header" class="transparent-header dark full-header no-sticky">
      <div id="header-wrap">
        <div class="container clearfix">
          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
          <nav id="primary-menu">
            <ul>
              @guest
              <li class="current"><a href="{{ route('welcome') }}"><div style="color: cornflowerblue">Home</div></a></li>
              <li><a href="{{ route('login') }}"><div style="color: cornflowerblue">Login</div></a></li>
              <li><a href="{{ route('register') }}"><div style="color: cornflowerblue">Register</div></a></li>
              @endguest
              @auth
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"><div style="color: crimson">Logout</div>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                  </form>
                </div>
              </li>
              @endauth
            </ul>
          </nav>
        </div>
      </div>
    </header>
    
    @yield('content')
    @include('shared.footer')
    <div id="gotoTop" class="icon-angle-up"></div>
  </div>
  <script src="{{ asset('bower_components/library-for-naitei-social/js/app.js') }}"></script>
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('bower_components/library-for-naitei-social/js/plugins.js') }}"></script>
  <script src="{{ asset('bower_components/library-for-naitei-social/js/functions.js') }}"></script>
  <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}"></script>
  @yield('scripts')
</body>
</html>
