<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/frame.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/frame.css') }}" rel="stylesheet">
</head>

<body>
  <div id="app">
    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar-header">
          
          <h3>
            <i class="fab fa-laravel red"></i> 
            Laravel 5.7
          </h3>
          <strong>
            <i class="fab fa-laravel red "></i>
            Laravel
          </strong>
        </div>

        <ul class="list-unstyled components">
          <li>
            <a href="/home">
              <i class="fas fa-home"></i>
              Home
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-briefcase"></i>
              About
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="fas fa-copy"></i>
              Pages
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="#">Kali Linux</a>
              </li>
              <li>
                <a href="#">Laravel</a>
              </li>
              <li>
                <a href="#">Maria DB</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-image"></i>
              Portfolio
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-question"></i>
              FAQ
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-paper-plane"></i>
              Contact
            </a>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
          <li>
            <a href="https://github.com/sangmoocha/Laravel-Learning/archive/master.zip" class="download">소스 내려받기</a>
          </li>
          <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
          </li>
        </ul>
      </nav>

      <!-- Page Content  -->
      <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
              <i class="fas fa-align-left"></i>
              <span>메뉴</span>
            </button>

            <ul class="nav justify-content-end">
              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" 
                   id="sidebarCollapse"
                   href="#" 
                   data-toggle="dropdown">
                   <i class="fas fa-user green"></i>
                   <span>{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user-edit green"></i>
                    프로필
                  </a>
                  <a 
                    class="dropdown-item"
                    href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt red"></i>
                    <span>로그아웃</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              </ul>
          </div>
        </nav>
        <main class="py-4">
          @yield('content')
        </main>
      </div>
    </div>
  </div>
</body>

</html>