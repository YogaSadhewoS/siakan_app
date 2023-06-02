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

        <div class="card rounded-0 " style="width: 100%; height: 100%;">
            <h4 class="text-form ml-40 mt-10">Kumpulan Arsip Kearsitekturan</h4>
            <span class="border-form border-2 mr-40 ml-40"></span>
            <div class="card-body">
                
            <div class="row-responsive mt-3 mr-40 ml-40 border-primary">
                <div class="col-md-5  ">
                    <div class="input-group">
                        <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5 rounded-pill" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
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
        .ms-n5 {
            margin-left: -40px;
        }
    </style>


</html>




@endsection