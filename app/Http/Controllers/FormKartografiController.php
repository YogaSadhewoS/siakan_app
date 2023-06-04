<?php

namespace App\Http\Controllers;

use App\Models\Kartografi;
use App\Models\Tipe;
use Illuminate\Http\Request;

class FormKartografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('formkartografi.index', [
            'tipes' => Tipe::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formkartografi.index', [
            'tipes' => Tipe::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipe_id'=>'required',
            'fonds'=>'required',
            'seri_arsip'=>'required',
            'file'=>'required',
            'nomor_urut'=>'required',
            'kode'=>'required',
            'judul'=>'required',
            'isi_informasi'=>'required',
            'kurun_waktu'=>'required',
            'volume'=>'required',
            'ukuran'=>'required',
            'warna'=>'required',
            'cetak_tulis'=>'required',
            'tinta_pensil'=>'required',
            'asli_fotokopi'=>'required',
            'penerbit'=>'required',
            'skala'=>'required',
            'referensi'=>'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Kartografi::create($validatedData);

        return redirect('/arsipkartografi');
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
    public function update(Request $request, Kartografi $kartografi)
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
