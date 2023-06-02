@extends('layouts.admin-layout')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="/css/formkearsitekturan.css" rel="stylesheet">
</head>
  <body>
  <div class="card rounded-0" style="width: 100%;">
    <h4 class="text-form ml-40 mt-10">Formulir Deskripsi Arsip Kearsitekturan</h4>
    <span class="border-form border-2 mr-40 ml-40"></span>
        <form class="center mr-40 ml-40 mt-10" >

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">FONDS</label>
            <div class="col-sm-10 mb-4">
            <input type="text" class="form-control" id="#" placeholder="Fonds" aria-describedby="inputGroupPrepend2" required required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">SERI ARSIP</label>
            <div class="col-sm-10 mb-4">
            <input type="text" class="form-control" id="#" placeholder="Seri Arsip" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">FILE</label>
            <div class="col-sm-10 mb-4">
            <input type="text" class="form-control" id="#" placeholder="File" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">NOMOR URUT</label>
            <div class="col-sm-3 mb-4">
            <input type="number" class="form-control" id="#" placeholder="Nomor Urut" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">KODE</label>
            <div class="col-sm-3 mb-4">
            <input type="number" class="form-control" id="#" placeholder="Kode" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">JUDUL</label>
            <div class="col-sm-10 mb-4">
            <input type="number" class="form-control" id="#" placeholder="Judul" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">ISI INFORMASI</label>
            <div class="col-sm-10 mb-4">
            <input type="number" class="form-control" id="#" placeholder="Isi Informasi" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">KURUN WAKTU</label>
            <div class="col-sm-3 mb-4">
            <input type="date" class="form-control" id="#" placeholder="Kurun Waktu" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">VOLUME</label>
            <div class="col-sm-10 mb-4">
            <input type="number" class="form-control" id="#" placeholder="Volume" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">UKURAN</label>
            <div class="col-sm-3 mb-4">
            <input type="number" class="form-control" id="#" placeholder="Ukuran" required>
            </div>
        </div>



        <fieldset class="mb-6 form-group">
            <legend class="col-form-label col-sm-2 pt-0 text-form">WARNA</legend>
            <div class="form-check form-check-inline mr-5">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                <label class="form-check-label " for="inlineRadio1">HITAM PUTIH</label>
            </div>
            <div class="form-check form-check-inline ml-10">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                <label class="form-check-label " for="inlineRadio2">WARNA</label>
        </div>
        </fieldset>

        <fieldset class="mb-6 form-group">
            <legend class="col-form-label col-sm-2 pt-0 text-form">CETAK/TULIS</legend>
            <div class="form-check form-check-inline mr-5">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                <label class="form-check-label " for="inlineRadio1">CETAK</label>
            </div>
            <div class="form-check form-check-inline ml-20">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                <label class="form-check-label " for="inlineRadio2">TULIS</label>
            </div>
        </fieldset>

        <fieldset class="mb-6 form-group">
            <legend class="col-form-label col-sm-2 pt-0 text-form">TINTA/PENSIL</legend>
            <div class="form-check form-check-inline mr-5">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                <label class="form-check-label " for="inlineRadio1">TINTA</label>
            </div>
            <div class="form-check form-check-inline ml-20">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                <label class="form-check-label " for="inlineRadio2">PENSIL</label>
            </div>
        </fieldset>

        <fieldset class="mb-6 form-group">
            <legend class="col-form-label col-sm-2 pt-0 text-form">ASLI/FOTOKOPI</legend>
            <div class="form-check form-check-inline mr-5">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" required>
                <label class="form-check-label " for="inlineRadio1">ASLI</label>
            </div>
            <div class="form-check form-check-inline ml-20">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                <label class="form-check-label " for="inlineRadio2">FOTOKOPI</label>
            </div>
        </fieldset>


        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">PENERBIT</label>
            <div class="col-sm-10 mb-4">
            <input type="text" class="form-control" id="#" placeholder="Penerbit" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">SKALA</label>
            <div class="col-sm-3 mb-4">
            <input type="text" class="form-control" id="#" placeholder="Skala" required>
            </div>
        </div>


        <div class="form-group row">
            <label class="text-form col-sm-2 col-form-label">JENIS ARSIP<br>KEARSITEKTURAN<br></label>
            <div class="form-check form-check-inline col-sm-3 mb-4">
            <select class="form-select" aria-label="Default select example" required>
                <option selected>Lihat Menu</option>
                <option value="1">SITE PLAN</option>
                <option value="2">BLUEPRINT</option>
                <option value="3">DENAH</option>
                <option value="4">SKETSA DESAIN</option>
                <option value="5">PAMFLET/LEAFLET</option>
                <option value="6">DRAWING</option>
                <option value="7">GAMBAR REKAYASA</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">TUNJUK SILANG</label>
            <div class="col-sm-3 mb-4">
            <input type="text" class="form-control" id="#" placeholder="Tunjuk Silang" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="#" class="text-form col-sm-2 col-form-label">PDF</label>
            <div class="col-sm-3 mb-4">
                <input class="form-control" type="file" id="formFile" required>
            </div>
        </div>


        </fieldset>
        <div class="form-group row">
            <div class="col-sm-2">Checkbox</div>
            <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                Example checkbox
                </label>
            </div>
            </div>
        </div>
        <div class="mb-20 form-group row">
            <div class="col-sm-10 mb-50">
            <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>​
        </form>
    </div>

    <!-- <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
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