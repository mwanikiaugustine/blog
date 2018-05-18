<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class='col-md-3'>
        <div class="nav-side-menu">
            <div class="brand">Brand Logo</div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                <div class="menu-list">

                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                          <a href="#">
                          <i class="fa fa-dashboard fa-lg"></i> Dashboard
                          </a>
                        </li>

                        <li  data-toggle="collapse" data-target="#projects" class="collapsed active">
                          <a href="#"><i class="fa fa-gift fa-lg"></i> Projects <span class="arrow"></span></a>
                        </li>
                        <li data-toggle="collapse" data-target="#myProjects" class="collapsed">
                          <a href="#"><i class="fa fa-globe fa-lg"></i> My Projects <span class="arrow"></span></a>
                        </li> 
                        <li data-toggle="collapse" data-target="#issues" class="collapsed">
                          <a href="#"><i class="fa fa-globe fa-lg"></i> Issues <span class="arrow"></span></a>
                        </li>
                        <li data-toggle="collapse" data-target="#boards" class="collapsed">
                          <a href="#"><i class="fa fa-globe fa-lg"></i> User Boards <span class="arrow"></span></a>
                        </li>
                        <li data-toggle="collapse" data-target="#departments" class="collapsed">
                          <a href="{{ url('/department') }}"><i class="fa fa-globe fa-lg"></i> Departments <span class="arrow"></span></a>
                        </li>
                        <li data-toggle="collapse" data-target="#categories" class="collapsed">
                          <a href="{{ url('/categories') }}"><i class="fa fa-globe fa-lg"></i> Task Categories <span class="arrow"></span></a>
                        </li>
                        <li data-toggle="collapse" data-target="#tasks" class="collapsed">
                          <a href="{{ url('/tasks') }}"><i class="fa fa-globe fa-lg"></i> Task & Follow Up <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="tasks">
                            <li class="active"><a href="#">Tasks</a></li>
                            <li><a href="#">User Boards</a></li>
                        </ul>

                    </ul>
             </div>
        </div>
    </div> 
    <div class="col-md-9">    
        <main class="py-4">
            <div class="main">
                @yield('content')
            </div>
        </main>
    </div>
    </div>
</body>
</html>
