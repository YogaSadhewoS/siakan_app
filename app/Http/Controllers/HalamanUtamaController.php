<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    function index(){
        return view('halamanutama.index');
    }
}
