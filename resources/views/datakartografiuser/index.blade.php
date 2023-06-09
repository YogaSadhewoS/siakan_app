<!doctype html>
@extends('halamanlanding.navbar')

@php
    use Carbon\Carbon;
@endphp

<title>Kumpulan Arsip Kartografi</title>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- css datatable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

  @section('navbar')

        <!-- <div class="card rounded-0" style="width: 100%;"> -->
            <!-- <h4 class="text-form ml-40 mt-10">Arsip Kartografi</h4> -->
            <!-- <span class="mr-20 ml-30"></span> -->
            <div class="card-body mx-auto "style="width:80%; padding-bottom: 50px">
                <div class="container-fluid mt-5">    
                <div class="card-header py-6 ">
                            <h6 class="m-2 h2 font-weight-bold" style="color: #E36159;">Kumpulan Arsip Kartografi</h6>
                            <!-- <span class="border-form border-2 mr-40 ml-40"></span> -->

                        </div>
                    <br>
                    @if ($message = Session::get('success'))
                            <div class="alert alert-success" ml-40>
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                    <table id="table" class="ui celled table table-bordered" style="width:100%;">
                    <!-- class="table table-bordered text-form mr-40 ml-40 text-center" cellspacing="0" -->
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>FONDS</th>
                                <th>JUDUL</th>
                                <th>KURUN WAKTU</th>
                                <th>ISI INFORMASI</th>
                                <th>JENIS PETA</th>
                                <th>DETAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kartografis as $kartografi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kartografi->fonds }}</td>
                                <td>{{ $kartografi->judul }}</td>
                                <td>{{ $kartografi->kurun_waktu }}</td>
                                <td>{{ $kartografi->isi_informasi }}</td>
                                <td>{{ $kartografi->tipe->nama }}</td>
                                <td>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $kartografi->id }}">
                                        <img src="/images/icondetail.png" alt="Tombol Aksi">
                                    </a>
                                    
                                </td>
                            </tr>
                            <!-- Modal Detail -->
                              <div class="modal fade" id="modalDetail{{ $kartografi->id }}" tabindex="-1" aria-labelledby="modalDetailLabel{{ $kartografi->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDetailLabel{{ $kartografi->id }}" style="color: #999; margin-left:100px;">Detail Informasi Arsip Kartografi - {{ $kartografi->judul }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="display: flex; justify-content: center; margin-bottom: 5%">
                                                @if ($kartografi->image)
                                                <img src="{{ asset('storage/' . $kartografi->image) }}" alt="gambar arsip" style="max-width: 100%; width: 35rem; height: 20rem;">
                                                @else
                                                <img src="{{ asset('images/logoarpus.png') }}" alt="gambar arsip" style="max-width: 100%; width: 10rem; height: 10rem;">
                                                @endif
                                            </div>
                                        <dl class="row" style="margin-left:100px; color: #999;">
                                            <dt class="col-sm-4">FONDS</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->fonds) }}</dd>

                                            <dt class="col-sm-4" >SERI ARSIP</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->seri_arsip) }}</dd>

                                            <dt class="col-sm-4">FILE</dt>
                                            <dd class="col-sm-8" >{{ strtoupper($kartografi->file) }}</dd>

                                            <dt class="col-sm-4">NOMOR URUT</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->nomor_urut) }}</dd>

                                            <dt class="col-sm-4">KODE</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->kode) }}</dd>

                                            <dt class="col-sm-4">JUDUL</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->judul) }}</dd>

                                            <dt class="col-sm-4">ISI INFORMASI</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->isi_informasi) }}</dd>

                                            <dt class="col-sm-4">KURUN WAKTU</dt>
                                            <dd class="col-sm-8">{{ Carbon::parse($kartografi->kurun_waktu)->format('d M Y') }}</dd>

                                            <dt class="col-sm-4">VOLUME</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->volume) }}</dd>

                                            <dt class="col-sm-4">UKURAN</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->ukuran) }}</dd>

                                            <dt class="col-sm-4">WARNA</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->warna) }}</dd>

                                            <dt class="col-sm-4">CETAK/TULIS</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->cetak_tulis) }}</dd>

                                            <dt class="col-sm-4">TINTA/PENSIL</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->tinta_pensil) }}</dd>

                                            <dt class="col-sm-4">ASLI/FOTOKOPI</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->asli_fotokopi) }}</dd>

                                            <dt class="col-sm-4">PENERBIT</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->penerbit) }}</dd>

                                            <dt class="col-sm-4">SKALA</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->skala) }}</dd>

                                            <dt class="col-sm-4">TUNJUK SILANG</dt>
                                            <dd class="col-sm-8">{{ strtoupper($kartografi->referensi) }}</dd>
                                        </dl>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- End Modal Detail -->
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <a href="/" style="background-color: #E36159; border-radius: 10px; color: white; padding: 0.5% 3%; text-decoration: none; letter-spacing: 0.05em;">
                        KEMBALI
                    </a>
                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

          <script>
            $(document).ready(function () {
              $('#table').DataTable();
            });
          </script>
@endsection
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