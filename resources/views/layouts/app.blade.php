<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SUSL') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('header')

</head>
<body>
    <div id="app" style="contain: content;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" {{ Auth::check() ? (Auth::user()->Admin() ? 'href = admin' : '' ) : '' }}>
                    {{ config('app.name', 'SUSL') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="{{Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="/"> Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="{{Request::is('academic') ? 'active' : '' }}">
                            <a class="nav-link" href="/academic"> Academic Registration </a>
                        </li>

                        <li class="{{Request::is('hostel') ? 'active' : '' }}">
                            <a class="nav-link" href="/hostel"> Hostel Registration </a>
                        </li>

                        <li class="{{Request::is('repeat') ? 'active' : '' }}">
                            <a class="nav-link" href="/repeat"> Repeat Examination </a>
                        </li>    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-outline-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if (Auth::user()->role->name == 'Administrator' || Auth::user()->role->name == 'Head of the Dept.' || Auth::user()->role->name == 'Coordinator' || Auth::user()->role->name == 'Dean' || Auth::user()->role->name == 'Boys hostel Warden' || Auth::user()->role->name == 'Girls hostel Warden')

                                        <a class="dropdown-item" href="/admin">Admin Panel</a>
                                        
                                    @endif

                                
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

        <main class="py-0 py-sm-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
