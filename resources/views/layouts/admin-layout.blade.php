<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <style>
        .navbar-collapse {
            display: flex;
            justify-content: center;
        }
    </style>




</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="navbar-collapse" style="width: 1700px;">
                <a class="navbar-brand text-primary">Sistem Informasi Arsip Kearsitekturan dan Kartografi</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="/images/orang.png" alt="User" width="32" height="32">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="sidebar close">
        <div class="logo-details">
            <span class="logo_name">SIAKAN</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('home') }}">Dashboard</a></li>
                </ul>
            </li>

            @can('admin')
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Formulir</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Formulir</a></li>
                    <li><a href="{{ route('formkearsitekturan.index') }}">Formulir Kearsitekturan</a></li>
                    <li><a href="{{ route('formkartografi.index') }}">Formulir Kartografi</a></li>
                </ul>
            </li>
            @endcan

            <li>
                <a href="{{ route('arsipkearsitekturan.index') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Arsip Kearsitekturan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('arsipkearsitekturan.index') }}">Arsip Kearsitekturan</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('arsipkartografi.index') }}">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Arsip Kartografi</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="{{ route('arsipkartografi.index') }}">Arsip Kartografi</a></li>
                </ul>
            </li>

            @can('admin')
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-compass'></i>
                        <span class="link_name">Restore</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Restore</a></li>
                    <li><a href="{{ route('arsipkearsitekturan.trash') }}">Restore Kearsitekturan</a></li>
                    <li><a href="{{ route('arsipkartografi.trash') }}">Restore Kartografi</a></li>
                </ul>
            </li>
            @endcan

            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Logout</span>
                </a>
                <ul class="sub-menu blank">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>

            @yield('content')
        </div>
    </section>



    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>






    </div>

</body>

</html>
