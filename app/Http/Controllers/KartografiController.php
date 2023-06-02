<?php

namespace App\Http\Controllers;

use App\Models\Kartografi;
use App\Http\Requests\StoreKartografiRequest;
use App\Http\Requests\UpdateKartografiRequest;

class KartografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('formkartografi.index');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKartografiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kartografi $kartografi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kartografi $kartografi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKartografiRequest $request, Kartografi $kartografi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kartografi $kartografi)
    {
        //
    }
}
