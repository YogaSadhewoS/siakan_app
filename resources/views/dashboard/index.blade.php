@extends('layouts.admin-layout')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>
  <div class="card rounded-0" style="width: 100%;">
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
          
            <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators" style="height:500px">
            <button style="border-radius: 50%; width: 12px !important; height: 12px !important;" 
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button style="border-radius: 50%; width: 12px !important; height: 12px !important;" 
                    type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/img1.jpg" class="d-block w-auto" alt="slide1">
              <div class="carousel-caption d-flex flex-column justify-content-center" style="height:1250px">
                <h1>Arsip Kearsitekturan</h1>
                <p class="justify-text center mr-40 ml-40">Kumpulan arsip kearsitekturan berisi kumpulan denah arsitektur
                  yang disimpan oleh Dinas Kearsipan dan Perpustakaan 
                  Provinsi Jawa Tengah </p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="/images/img2.jpg" class="d-block w-auto" alt="slide2">
              <div class="carousel-caption d-flex flex-column justify-content-center" style="height:1250px">
                <h1>Arsip Kartografi</h1>
                <p class="justify-text center mr-40 ml-40">Kumpulan arsip kartografi berisi kumpulan peta wilayah suatu daerah
                yang disimpan oleh Dinas Kearsipan dan Perpustakaan
                Provinsi Jawa Tengah</p>
              </div>

          </div>
          <button style="height:850px" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button style="height:850px" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>



  </div>
  </body>
</html>




@endsection