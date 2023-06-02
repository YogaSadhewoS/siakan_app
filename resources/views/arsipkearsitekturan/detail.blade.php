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
            <h4 class="text-form ml-40 mt-10">Arsip Kearsitekturan</h4>
            <span class="border-form border-2 mr-40 ml-40"></span>
            <div class="card-body">
                <div class="table-responsive">     
                    <br>
                    <br>
                    <table id="dataTable" class="table table-bordered text-form mr-40 ml-40 text-center" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO URUT</th>
                                <th>FONDS</th>
                                <th>JUDUL</th>
                                <th>KURUN WAKTU</th>
                                <th>ISI INFORMASI</th>
                                <th>JENIS PETA</th>
                                <th>PDF FILE</th>
                                <th>DETAIL</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a href="" class="btn btn-primary btn-sm ml-2">Edit</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="tambah" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Masukan Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="/pasok/store" method="post">

                <div class="form-group">
                    <div class="input_fields_wrap">
                    <button class="add_field_button btn btn-primary">Tambah Fields</button>
                    <table>
                    <tr>
                        <td>
                        <label for="">Nama Barang</label>
                        <br>
                            <select name="id_barang[]" id="" class="myselect form-control"  required>
                                <option selected disabled value="">Pilih Jenis Barang</option>

                                <option value=""></option>
     
                            </select>
                            </div>
                        </td>
                        <td class="pl-4">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah[]" class="form-control" required placeholder="Masukan Jumlah" required>
                        </td>
                    </tr>
                    </table>
                    
                    </div>
                    <div class="form-group">
                        <label for="">Nama Pemasok</label>
                        <input type="text" name="nama_pemasok" class="form-control" placeholder="Masukan Nama Pemasok" required>
                    </div>

                    <div class="form-group">
                        <label for="">Tanggal Pasok</label>
                        <input type="date" name="tanggal_pasok" class="form-control" required>
                    </div>
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
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