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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    
    
    
    
    
    
    </head>
<body>


<div class="header" >
  <div>
  <span class="text">Sistem Informasi Arsip Kearsitekturan dan Kartografi</span>
  </div>
</div>


  <div class="sidebar close">
    <div class="logo-details">
      <span class="logo_name">SIAKAN</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="{{route('home')}}">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{route('home')}}">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Formulir</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Formulir</a></li>
          <li><a href="{{route('formkearsitekturan')}}">Formulir Kearsitekturan</a></li>
          <li><a href="{{route('formkartografi.index')}}">Formulir Kartografi</a></li>
        </ul>
      </li>

      <li>
        <a href="{{route('arsipkearsitekturan')}}">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Arsip Kearsitekturan</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{route('arsipkearsitekturan')}}">Arsip Kearsitekturan</a></li>
        </ul>
      </li>
      <li>
        <a href="{{route('arsipkartografi.index')}}">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Arsip Kartografi</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{route('arsipkartografi.index')}}">Arsip Kartografi</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Restore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Restore</a></li>
        </ul>
      </li>
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
      <i class='bx bx-menu' ></i>
      
      @yield('content')
    </div> 
  </section>
  


          <script>
                  let arrow = document.querySelectorAll(".arrow");
                  for (var i = 0; i < arrow.length; i++) {
                    arrow[i].addEventListener("click", (e)=>{
                  let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                  arrowParent.classList.toggle("showMenu");
                    });
                  }
                  let sidebar = document.querySelector(".sidebar");
                  let sidebarBtn = document.querySelector(".bx-menu");
                  console.log(sidebarBtn);
                  sidebarBtn.addEventListener("click", ()=>{
                  sidebar.classList.toggle("close");
                  });

          </script>


</div>

</body>
</html>