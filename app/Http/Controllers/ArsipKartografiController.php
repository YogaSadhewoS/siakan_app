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
        $this->authorize('admin');
        $kartografi = Kartografi::find($id);
        $tipes = Tipe::all();
        $selectedTipeId = $kartografi->tipe_id; // Mengambil ID tipe arsip yang dipilih sebelumnya
        return view('arsipkartografi.edit', compact('kartografi', 'tipes', 'selectedTipeId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kartografi = Kartografi::findOrFail($id);

        $validatedData = $request->validate([
            'tipe_id' => 'required',
            'fonds' => 'required',
            'seri_arsip' => 'required',
            'file' => 'nullable',
            'nomor_urut' => 'required|integer',
            'kode' => 'required',
            'judul' => 'required',
            'isi_informasi' => 'nullable',
            'kurun_waktu' => 'required|date',
            'volume' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'cetak_tulis' => 'required',
            'tinta_pensil' => 'required',
            'asli_fotokopi' => 'required',
            'penerbit' => 'nullable',
            'skala' => 'required',
            'referensi' => 'required',
        ]);

        $kartografi->tipe_id = $validatedData['tipe_id'];
        $kartografi->fonds = $validatedData['fonds'];
        $kartografi->seri_arsip = $validatedData['seri_arsip'];
        $kartografi->file = $validatedData['file'];
        $kartografi->nomor_urut = $validatedData['nomor_urut'];
        $kartografi->kode = $validatedData['kode'];
        $kartografi->judul = $validatedData['judul'];
        $kartografi->isi_informasi = $validatedData['isi_informasi'];
        $kartografi->kurun_waktu = $validatedData['kurun_waktu'];
        $kartografi->volume = $validatedData['volume'];
        $kartografi->ukuran = $validatedData['ukuran'];
        $kartografi->warna = $validatedData['warna'];
        $kartografi->cetak_tulis = $validatedData['cetak_tulis'];
        $kartografi->tinta_pensil = $validatedData['tinta_pensil'];
        $kartografi->asli_fotokopi = $validatedData['asli_fotokopi'];
        $kartografi->penerbit = $validatedData['penerbit'];
        $kartografi->skala = $validatedData['skala'];
        $kartografi->referensi = $validatedData['referensi'];

        $kartografi->save();

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

    public function datakartografiuser()
    {
        $kartografis = Kartografi::all();
        return view('datakartografiuser.index', ['kartografis' => $kartografis]);
    }

    public function deletedKartografi()
    {
        $kartografis = Kartografi::onlyTrashed()->get();
        return view('arsipkartografi.trash', ['kartografis' => $kartografis]);
    }

    public function restore($id)
    {
        $kartografi = Kartografi::withTrashed()
            ->where('id', $id)
            ->first();
        if ($kartografi) {
            $kartografi->restore();
            return redirect()
                ->route('arsipkartografi.index')
                ->with('success', 'Kartografi restored successfully.');
        }
        return redirect()
            ->route('arsipkartografi.index')
            ->with('error', 'Failed to restore Kartografi.');
    }

    public function hardDelete($id)
    {
        $kartografi = Kartografi::withTrashed()
            ->where('id', $id)
            ->first();

        if ($kartografi) {
            $kartografi->forceDelete();
            return redirect()
                ->route('arsipkartografi.trash')
                ->with('success', 'Kartografi permanently deleted successfully.');
        }

        return redirect()
            ->route('arsipkartografi.trash')
            ->with('error', 'Failed to permanently delete Kartografi.');
    }
}
