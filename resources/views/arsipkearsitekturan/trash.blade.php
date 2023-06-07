@extends('layouts.admin-layout')
@section('content')

<!doctype html>
<html lang="en">

<title>Restore Arsip Kearsitekturan</title>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>

    <!-- <div class="card rounded-0" style="width: 100%;"> -->
        <!-- <h4 class="text-form ml-40 mt-10">Arsip Kearsitekturan</h4> -->
        <span class="mr-10 ml-20"></span>
        <div class="card-body mr-20 ml-20">
            <div class="container-fluid ">     
            <div class="card-header py-6 ">
                        <h6 class="m-2 h2 font-weight-bold" style="color: #E36159;">Kumpulan Data Terbuang Arsip Kearsitekturan</h6>
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
                        @foreach ($kearsitekturans as $kearsitekturan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kearsitekturan->fonds }}</td>
                            <td>{{ $kearsitekturan->judul }}</td>
                            <td>{{ $kearsitekturan->kurun_waktu }}</td>
                            <td>{{ $kearsitekturan->isi_informasi }}</td>
                            <td>{{ $kearsitekturan->tipe->nama }}</td>
                            <td class="d-flex align-items-center">
                            <div class="dropdown" style="background-color: #E36159; padding-right:10px">
                                <button type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/icondetail.png" alt="Tombol Aksi">
                                </button>
                                <button class="btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @can('admin')
                                        <li>
                                            <a href="{{ route('arsipkearsitekturan.restore', $kearsitekturan->id) }}" class="dropdown-item btn-primary btn-sm me-2" onclick="return confirm('Apakah anda yakin ingin mengembalikan data?')">
                                                Restore
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('arsipkearsitekturan.hardDelete', $kearsitekturan->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item btn-danger btn-sm me-2" onclick="return confirm('Apakah anda yakin ingin menghapus data secara permanen?')">Hard Delete</button>
                                            </form>
                                        </li>
                                    @endcan
                                </ul>
                            </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
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