<!doctype html>
@extends('halamanlanding.navbar')

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
            <div class="card-body mx-auto "style="width:80%;">
                <div class="container-fluid mt-5">    
                <div class="card-header py-6 ">
                            <h6 class="m-2 h2 font-weight-bold text-primary">Kumpulan Arsip Kearsitekturan</h6>
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
                                <th>NO URUT</th>
                                <th>FONDS</th>
                                <th>JUDUL</th>
                                <th>KURUN WAKTU</th>
                                <th>ISI INFORMASI</th>
                                <th>JENIS PETA</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kartografis as $kartografi)
                            <tr>
                                <td>{{ $kartografi->nomor_urut }}</td>
                                <td>{{ $kartografi->fonds }}</td>
                                <td>{{ $kartografi->judul }}</td>
                                <td>{{ $kartografi->kurun_waktu }}</td>
                                <td>{{ $kartografi->isi_informasi }}</td>
                                <td>{{ $kartografi->tipe->nama }}</td>
                                <td>
                                    {{--  <a href="/arsipkartografi{{ $kartografi->id }}" class="btn btn-primary btn-sm ml-2">Detail</a>--}}
                                    <form >
                                        <a href="{{ route('arsipkartografi.show', $kartografi->id) }}" class="btn btn-info">Show</a>
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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