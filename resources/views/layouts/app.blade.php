<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistem Informasi Akademik (SIAKAD)</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome icon -->
    <script src="https://kit.fontawesome.com/5f815bdce1.js" crossorigin="anonymous"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .wrapper {
            display: flex;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background-color: #242e4a;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 26px;
            background: #242e4a;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }

        #sidebar ul.components {
            padding: 20px 0;
            /* border-bottom: 1px solid #47748b; */
        }

        #sidebar ul p {
            color: #black;
            padding: 10px;
        }

        #sidebar>ul>li {
            padding-inline: 10px;
            border-radius: 10px;
        }

        #sidebar ul li a {
            padding: 10px 20px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar>ul>li>a>span {
            margin-left: 10px;
        }

        #sidebar ul li.active>a,
        [aria-expanded="true"],
        #sidebar ul li:hover>a {
            color: #fff;
            background: #283779;
            border-radius: 10px;
            transition: all 0.5s;
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @auth
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="/logo.png" alt="Logo UHB" style="width: 50px" height="50px">
                    <h4 href="{{ url('/home') }}">
                        SIAKAD
                    </h4>
                </div>
                <ul class="list-unstyled components">
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/home') }}" style="color: #fff; ">
                            <i class="fa fa-home"></i> <span>Beranda</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('data-mahasiswa') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/data-mahasiswa') }}" style="color: #fff">
                            <i class="fa fa-users"></i> <span>Data Siswa</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('jadwal-matakuliah') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/jadwal-matakuliah') }}" style="color: #fff">
                            <i class="fa fa-book"></i> <span>Data Jadwal Pelajaran</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('prodi') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/prodi') }}" style="color: #fff">
                            <i class="fa fa-graduation-cap"></i> <span>Data Guru</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('pembayaran') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/pembayaran') }}" style="color: #fff">
                            <i class="fa-solid fa-file-invoice-dollar"></i> <span>Data Angsuran SPP</span>
                        </a>
                    </li>

                </ul>
            </nav>
        @endauth

        <div id="content" class="bg-light" style="width: 100%">
            <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#242e4a; width:100%">
                <div class="container py-3">
                    <div id="content" style="margin-right:30px">
                        <button type="button" id="sidebarCollapse" class="btn border">
                            <i class="fa-solid fa-bars text-light"></i>
                        </button>
                    </div>
                    <span class="navbar-brand text-light">
                        @yield('title')
                    </span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <i class="fa-solid fa-bars"></i>
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #fff"
                                            href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" style="color: #fff"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a style="color: #fff" id="navbarDropdown" class="nav-link dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="py-4" style="height:85vh; overflow-y: scroll">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>

</body>

</html>
