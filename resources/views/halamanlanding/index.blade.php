@extends('halamanlanding.navbar')

@section('navbar')
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
                        {{--  <button class="btn btn-warning mt-3 border-radius: 100%;">Klik Disini</button>  --}}
                        <a href="{{ route('datakearsitekturanuser') }}" class="btn btn-warning mt-3" style="background-color: #FF9636; border-radius: 25px; color:white; width: 130px; height: 43px">KLIK DISINI</a>
                    </div>
                </div>


                <div class="carousel-item">
                    <img src="/images/img2.jpg" class="d-block w-100" alt="slide1" style="filter: brightness(0.7)">
                    <div class="carousel-caption mr-100 d-flex flex-column justify-content-center align-items-start"
                        style="height: 1350px; width:600px; margin-bottom: 50px;">
                        <h1 style="text-align: left">Arsip Kartografi</h1>
                        <p class="justify-text center mr-40 ml-40" style="text-align: left">Arsip Kartografi adalah arsip
                            yang isi informasinya digambarkan dalam
                            bentuk gambar grafis atau fotogrametrik maupun sistem atau legenda
                            peta yang menggambarkan suatu wilayah tertentu yang meliputi unsur
                            kartografi yaitu judul, skala, legenda, garis astronomis, misalnya peta,
                            dan atlas</p>
                        {{--  <!-- <button class="btn btn-warning mt-3 border-radius: 100%;" href="{{ route('datakartografiuser') }}">Klik Disini</button> -->  --}}
                        <a href="{{ route('datakartografiuser') }}" class="btn btn-warning mt-3" style="background-color: #FF9636; border-radius: 25px; color:white; width: 130px; height: 43px">KLIK DISINI</a>
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

    <footer class="bg-dark text-white footer">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 mb-md-0 text-start mb-50">
                    <h5 class="text-uppercase">Hak Cipta</h5>
                    <p class="footer-text">Seluruh isi dalam website ini dilindungi oleh Undang-undang Republik Indonesia.
                    </p>
                    <h5 class="text-uppercase">Alamat :</h5>
                    <p class="footer-text"> Jl. Dr. Setiabudi No 201C, Kode Pos 50263</p>
                    <h5 class="text-uppercase">Telepon :</h5>
                    <p class="footer-text">7473746</p>
                    <h5 class="text-uppercase">Email :</h5>
                    <p class="footer-text">sekretariat@arpusda.jatengprov.go.id</p>
                </div>
                <div class="col-md-4 mb-md-0 text-start">
                    <h5 class="text-uppercase">Tentang Kami</h5>
                    <p class="footer-text">Kami adalah Sistem Informasi Arsip yang menyediakan arsip kearsitekturan dan
                        kartografi untuk keperluan Anda.</p>
                </div>
                <div class="col-md-4 text-center text-md-start">
                    <h5 class="text-uppercase">Follow Kami</h5>
                    <a href="https://www.facebook.com/dinasarpusjateng" class="me-4" target="_blank" style="text-decoration: none">
                        <img src="/images/fb.png" alt="Facebook" width="28" height="28">
                    </a>
                    <a href="https://twitter.com/dinarpus_jateng" class="me-4" target="_blank" style="text-decoration: none">
                        <img src="/images/twitter.png" alt="Twitter" width="36" height="36">
                    </a>
                    <a href="https://www.instagram.com/dinas_arpus_jateng/" class="me-4" target="_blank" style="text-decoration: none">
                        <img src="/images/ig.png" alt="Instagram" width="32" height="32">
                    </a>
                    <a href="https://www.youtube.com/channel/UC9NGOWxiwmpLNx5gmlgPMoQ" class="me-4" target="_blank" style="text-decoration: none">
                        <img src="/images/yt.png" alt="Youtube" width="30" height="30">
                    </a>
                </div>
            </div>

        </div>
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2);">
            &copy; 2023 Sistem Informasi Arsip Kearsitekturan dan Kartografi
        </div>
    </footer>
@endsection
