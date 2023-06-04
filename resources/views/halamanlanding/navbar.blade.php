

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
      .navbar-collapse {
        display: flex;
        justify-content: center;
      }
      .carousel {
        margin-bottom: 0;
      }

      .footer {
        padding-top: 50px;
        padding-bottom: 0px;
        
      }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="navbar-collapse d-flex justify-content-start" >
        <a class="navbar-brand text-start" href="/">
          <img src="/images/logo1.png" alt="logo1" width="200" height="60">
        </a>
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-primary" href="{{ route('register') }}">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('navbar')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>