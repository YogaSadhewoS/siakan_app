@extends('layouts.admin-layout')
@section('content')
    <!doctype html>
    <html lang="en">

    <title>Form Kearsitekturan</title>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="/css/formkartografi.css" rel="stylesheet">
    </head>

    <body>
        <div class="card rounded-0" style="width: 100%;">
            <h4 class="text-form ml-40 mt-10">Formulir Deskripsi Arsip Kearsitekturan</h4>
            <span class="border-form border-2 mr-40 ml-40"></span>
            <form method="post" action="/formkearsitekturan" class="center mr-40 ml-40 mt-10">
                @csrf
                <div class="form-group row">
                    <label for="fonds" class="text-form col-sm-2 col-form-label">FONDS</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="fonds" name="fonds" placeholder="Fonds"
                            aria-describedby="inputGroupPrepend2" required required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="seri_arsip" class="text-form col-sm-2 col-form-label">SERI ARSIP</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="seri_arsip" name="seri_arsip" placeholder="Seri Arsip" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="text-form col-sm-2 col-form-label">FILE</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="file" name="file" placeholder="File" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nomor_urut" class="text-form col-sm-2 col-form-label">NOMOR URUT</label>
                    <div class="col-sm-3 mb-4">
                        <input type="number" class="form-control" id="nomor_urut" name="nomor_urut" placeholder="Nomor Urut" min="1" oninput="validity.valid||(value='');" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kode" class="text-form col-sm-2 col-form-label">KODE</label>
                    <div class="col-sm-3 mb-4">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="judul" class="text-form col-sm-2 col-form-label">JUDUL</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="isi_informasi" class="text-form col-sm-2 col-form-label">ISI INFORMASI</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="isi_informasi" name="isi_informasi" placeholder="Isi Informasi" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kurun_waktu" class="text-form col-sm-2 col-form-label">KURUN WAKTU</label>
                    <div class="col-sm-3 mb-4">
                        <input type="date" class="form-control" id="kurun_waktu" name="kurun_waktu" placeholder="Kurun Waktu" required>
                    </div>
                </div>
                
                <script>
                    const inputElement = document.getElementById('kurun_waktu');
                    const today = new Date().toISOString().split('T')[0];
                    inputElement.setAttribute('max', today);
                </script>

                <div class="form-group row">
                    <label for="volume" class="text-form col-sm-2 col-form-label">VOLUME</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="volume" name="volume" placeholder="Volume" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ukuran" class="text-form col-sm-2 col-form-label">UKURAN</label>
                    <div class="col-sm-3 mb-4">
                        <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran" required>
                    </div>
                </div>



                <fieldset class="mb-6 form-group">
                    <legend class="col-form-label col-sm-2 pt-0 text-form">WARNA</legend>
                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="radio" name="warna"
                            value="Hitam Putih" required>
                        <label class="form-check-label " for="warna">HITAM PUTIH</label>
                    </div>
                    <div class="form-check form-check-inline ml-10">
                        <input class="form-check-input" type="radio" name="warna"
                            value="Warna" required>
                        <label class="form-check-label " for="warna">WARNA</label>
                    </div>
                </fieldset>

                <fieldset class="mb-6 form-group">
                    <legend class="col-form-label col-sm-2 pt-0 text-form">CETAK/TULIS</legend>
                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="radio" name="cetak_tulis"
                            value="Cetak" required>
                        <label class="form-check-label " for="cetak_tulis">CETAK</label>
                    </div>
                    <div class="form-check form-check-inline ml-20">
                        <input class="form-check-input" type="radio" name="cetak_tulis"
                            value="Tulis" required>
                        <label class="form-check-label " for="cetak_tulis">TULIS</label>
                    </div>
                </fieldset>

                <fieldset class="mb-6 form-group">
                    <legend class="col-form-label col-sm-2 pt-0 text-form">TINTA/PENSIL</legend>
                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="radio" name="tinta_pensil"
                            value="Tinta" required>
                        <label class="form-check-label " for="tinta_pensil">TINTA</label>
                    </div>
                    <div class="form-check form-check-inline ml-20">
                        <input class="form-check-input" type="radio" name="tinta_pensil"
                            value="Pensil" required>
                        <label class="form-check-label " for="tinta_pensil">PENSIL</label>
                    </div>
                </fieldset>

                <fieldset class="mb-6 form-group">
                    <legend class="col-form-label col-sm-2 pt-0 text-form">ASLI/FOTOKOPI</legend>
                    <div class="form-check form-check-inline mr-5">
                        <input class="form-check-input" type="radio" name="asli_fotokopi"
                            value="Asli" required>
                        <label class="form-check-label " for="asli_fotokopi">ASLI</label>
                    </div>
                    <div class="form-check form-check-inline ml-20">
                        <input class="form-check-input" type="radio" name="asli_fotokopi"
                            value="Fotokopi" required>
                        <label class="form-check-label " for="asli_fotokopi">FOTOKOPI</label>
                    </div>
                </fieldset>


                <div class="form-group row">
                    <label for="penerbit" class="text-form col-sm-2 col-form-label">PENERBIT</label>
                    <div class="col-sm-10 mb-4">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Penerbit" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="skala" class="text-form col-sm-2 col-form-label">SKALA</label>
                    <div class="col-sm-3 mb-4">
                        <input type="text" class="form-control" id="skala" name="skala" placeholder="Skala" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="text-form col-sm-2 col-form-label">JENIS ARSIP<br>KEARSITEKTURAN<br></label>
                    <div class="form-check form-check-inline col-sm-3 mb-4">
                        <select class="form-select" name="tipe_id">
                            @foreach ($tipes as $tipe)
                                @if (in_array($tipe->id, [1, 2, 3, 4, 5, 6, 7]))
                                    <option value="{{ $tipe->id }}">{{ $tipe->nama }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="referensi" class="text-form col-sm-2 col-form-label">TUNJUK SILANG</label>
                    <div class="col-sm-3 mb-4">
                        <input type="text" class="form-control" id="referensi" name="referensi" placeholder="Tunjuk Silang" required>
                    </div>
                </div>

                {{--  <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">PDF</label>
            <div class="col-sm-3 mb-4">
                <input class="form-control" type="file" id="formFile" required>
            </div>
        </div>  --}}


                </fieldset>

                <div class="mb-20 form-group row">
                    <div class="col-sm-10 mb-50">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function(form) {
                        form.addEventListener('submit', function(event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script> -->

    </body>

    </html>
@endsection
