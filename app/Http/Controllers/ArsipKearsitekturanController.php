<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArsipKearsitekturanController extends Controller
{
    function index(){
        return view('arsipkearsitekturan.index');
    }
}
