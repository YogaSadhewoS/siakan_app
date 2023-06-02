<?php

namespace App\Http\Controllers;

use App\Models\Kartografi;
use App\Models\Tipe;
use Illuminate\Http\Request;

class ArsipKartografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kartografis = Kartografi::all();
        return view('arsipkartografi.index', ['kartografis' => $kartografis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kartografi = Kartografi::find($id);
        return view('arsipkartografi.detail', ['kartografi' => $kartografi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kartografi = Kartografi::find($id);
        return view('arsipkartografi.edit', [
            'kartografi' => $kartografi,
            'tipes' => Tipe::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kartografi $kartografi)
    {
        // $kartografi = Kartografi::find($id);
        // $kartografi->tipe_id = $request->input('tipe_id');
        // $kartografi->fonds = $request->input('fonds');
        // $kartografi->seri_arsip = $request->input('seri_arsip');
        // $kartografi->file = $request->input('file');
        // $kartografi->nomor_urut = $request->input('nomor_urut');
        // $kartografi->kode = $request->input('kode');
        // $kartografi->judul = $request->input('judul');
        // $kartografi->isi_informasi = $request->input('isi_informasi');
        // $kartografi->kurun_waktu = $request->input('kurun_waktu');
        // $kartografi->volume = $request->input('volume');
        // $kartografi->ukuran = $request->input('ukuran');
        // $kartografi->warna = $request->input('warna');
        // $kartografi->cetak_tulis = $request->input('cetak_tulis');
        // $kartografi->tinta_pensil = $request->input('tinta_pensil');
        // $kartografi->asli_fotokopi = $request->input('asli_fotokopi');
        // $kartografi->penerbit = $request->input('penerbit');
        // $kartografi->skala = $request->input('skala');
        // $kartografi->referensi = $request->input('referensi');

        // $kartografi->save();
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

        // $validatedData['user_id'] = auth()->user()->id;

        $kartografi->update($request->all());

        return redirect()
            ->route('arsipkartografi.index')
            ->with('success', 'Kartografi updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kartografi = Kartografi::find($id);
        if ($kartografi) {
            $kartografi->delete();
            return redirect()
                ->route('arsipkartografi.index')
                ->with('success', 'Kartografi deleted successfully.');
        }
        return redirect()
            ->route('arsipkartografi.index')
            ->with('error', 'Failed to delete Kartografi.');
    }
}
