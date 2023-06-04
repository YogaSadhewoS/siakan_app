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
            <h4 class="text-form ml-40 mt-10">Detail Arsip Kearsitekturan - {{ $kearsitekturan->judul }}</h4>
            <span class="border-form border-2 mr-40 ml-40"></span>
            <div class="card-body">
                <div class="table-responsive">     
                    <br>
                    <a href="{{ route('arsipkearsitekturan.index') }}" class="btn btn-primary ml-40">Kembali</a>
                    <br>
                    <br>
                    <table id="dataTable" class="table table-bordered text-form mr-40 ml-40" cellspacing="0">
                        <thead>
                            <tr>
                                <td>Fonds:</td>
                                <td>: {{ $kearsitekturan->fonds }}</td>
                                
                            </tr>
                            <tr>
                                <td>Seri Arsip</td>
                                <td>: {{ $kearsitekturan->seri_arsip }}</td>
                            </tr>
                            <tr>
                                <td>File</td>
                                <td>: {{ $kearsitekturan->file }}</td>
                            </tr>
                            <tr>
                                <td>Nomor Urut</td>
                                <td>: {{ $kearsitekturan->nomor_urut }}</td>
                            </tr>
                            <tr>
                                <td>Kode</td>
                                <td>: {{ $kearsitekturan->kode }}</td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td>: {{ $kearsitekturan->judul }}</td>
                            </tr>
                            <tr>
                                <td>Isi Informasi</td>
                                <td>: {{ $kearsitekturan->isi_informasi }}</td>
                            </tr>
                            <tr>
                                <td>Kurun Waktu</td>
                                <td>: {{ $kearsitekturan->kurun_waktu }}</td>
                            </tr>
                            <tr>
                                <td>Volume</td>
                                <td>: {{ $kearsitekturan->volume }}</td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>: {{ $kearsitekturan->ukuran }}</td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td>: {{ $kearsitekturan->warna }}</td>
                            </tr>
                            <tr>
                                <td>Cetak/Tulis</td>
                                <td>: {{ $kearsitekturan->cetak_tulis }}</td>
                            </tr>
                            <tr>
                                <td>Tinta/Pensil</td>
                                <td>: {{ $kearsitekturan->tinta_pensil }}</td>
                            </tr>
                            <tr>
                                <td>Asli/Fotokopi</td>
                                <td>: {{ $kearsitekturan->asli_fotokopi }}</td>
                            </tr>
                            <tr>
                                <td>Penerbit</td>
                                <td>: {{ $kearsitekturan->penerbit }}</td>
                            </tr>
                            <tr>
                                <td>Skala</td>
                                <td>: {{ $kearsitekturan->skala }}</td>
                            </tr>
                            <tr>
                                <td>Tunjuk silang</td>
                                <td>: {{ $kearsitekturan->referensi }}</td>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>





  </body>
    <style>
        /* Google Fonts Import Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        .text-form{
            color: #0091E1;
        }

        .border-form{
            border-color: #0091E1;
        }
    </style>


</html>




@endsection