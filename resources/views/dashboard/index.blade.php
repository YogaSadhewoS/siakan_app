@extends('layouts.admin-layout')
@section('content')

<!doctype html>
<html lang="en">
    <title>Dashboard</title>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>
    <div class="card rounded-0" style="width: 100%;">
      <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators" style="height: 100px">
              <button style="border-radius: 30%; width: 200px !important; height: 7px !important;" type="button"
                  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"
                  aria-label="Slide 1"></button>
              <button style="border-radius: 30%; width: 200px !important; height: 7px !important;" type="button"
                  data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>

          <div class="carousel-inner" style="height: 800px;">
              <div class="carousel-item active">
                  <img src="/images/img1.jpg" class="d-block w-100" alt="slide1" style="filter: brightness(0.7)">
                  <div class="carousel-caption mr-100 d-flex flex-column justify-content-center align-items-start"
                      style="height: 1350px; width:600px; margin-bottom: 50px;">
                      <h1 style="text-align: left">Arsip Kearsitekturan</h1>
                      <p class="justify-text center" style="text-align: left">Arsip Kearsitekturan adalah arsip yang
                          mempresentasikan objek tidak bergerak
                          seperti pembangunan gedung, monumen/tugu, benteng, gerbang, tempat ibadah,
                          makam, waduk, jembatan, dan sejenisnya yang meliputi tahapan design konsep
                          (proposal design, sketsa, gambar skematis, gambar perspektif, gambar presentasi,
                          model 3 dimensi); tahapan site survei (rencana); tahapan konstruksi (gambar kerja,
                          rancang bangun, rencana kunci, change order; dan tahapan pasca konstruksi
                          (annotated plans, gambar terukur).)
                      </p>
                      {{--  <a href="{{route('arsipkearsitekturan.index')}}" class="btn btn-warning mt-3" style="background-color: #FF9636; border-radius: 25px; color:white; width: 130px; height: 43px">KLIK DISINI</a>  --}}
                  </div>
              </div>


              <div class="carousel-item">
                  <img src="/images/img2.jpg" class="d-block w-100" alt="slide1" style="filter: brightness(0.7)">
                  <div class="carousel-caption mr-100 d-flex flex-column justify-content-center align-items-start"
                      style="height: 1350px; width:600px; margin-bottom: 50px;">
                      <h1 style="text-align: left">Arsip Kartografi</h1>
                      <p class="justify-text center" style="text-align: left">Arsip Kartografi adalah arsip
                          yang isi informasinya digambarkan dalam
                          bentuk gambar grafis atau fotogrametrik maupun sistem atau legenda
                          peta yang menggambarkan suatu wilayah tertentu yang meliputi unsur
                          kartografi yaitu judul, skala, legenda, garis astronomis, misalnya peta,
                          dan atlas</p>
                      {{--  <a href="{{route('arsipkartografi.index')}}" class="btn btn-warning mt-3" style="background-color: #FF9636; border-radius: 25px; color:white; width: 130px; height: 43px">KLIK DISINI</a>  --}}
                  </div>
              </div>
          </div>
      </div>

      <button style="height: 850px" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button style="height: 850px" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

@endsection