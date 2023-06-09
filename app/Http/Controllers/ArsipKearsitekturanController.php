<?php

namespace App\Http\Controllers;

use App\Models\Kearsitekturan;
use App\Models\Tipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArsipKearsitekturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kearsitekturans = Kearsitekturan::all();
        return view('arsipkearsitekturan.index', ['kearsitekturans' => $kearsitekturans]);
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
        $kearsitekturan = Kearsitekturan::find($id);
        return view('arsipkearsitekturan.detail', ['kearsitekturan' => $kearsitekturan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $this->authorize('admin');
        $kearsitekturan = Kearsitekturan::find($id);
        $tipes = Tipe::all();
        $selectedTipeId = $kearsitekturan->tipe_id; // Mengambil ID tipe arsip yang dipilih sebelumnya
        return view('arsipkearsitekturan.edit', compact('kearsitekturan', 'tipes', 'selectedTipeId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kearsitekturan = Kearsitekturan::findOrFail($id);

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
            'image'=>'image|file|max:2048'
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('arsip-images');
        }

        $kearsitekturan->tipe_id = $validatedData['tipe_id'];
        $kearsitekturan->fonds = $validatedData['fonds'];
        $kearsitekturan->seri_arsip = $validatedData['seri_arsip'];
        $kearsitekturan->file = $validatedData['file'];
        $kearsitekturan->nomor_urut = $validatedData['nomor_urut'];
        $kearsitekturan->kode = $validatedData['kode'];
        $kearsitekturan->judul = $validatedData['judul'];
        $kearsitekturan->isi_informasi = $validatedData['isi_informasi'];
        $kearsitekturan->kurun_waktu = $validatedData['kurun_waktu'];
        $kearsitekturan->volume = $validatedData['volume'];
        $kearsitekturan->ukuran = $validatedData['ukuran'];
        $kearsitekturan->warna = $validatedData['warna'];
        $kearsitekturan->cetak_tulis = $validatedData['cetak_tulis'];
        $kearsitekturan->tinta_pensil = $validatedData['tinta_pensil'];
        $kearsitekturan->asli_fotokopi = $validatedData['asli_fotokopi'];
        $kearsitekturan->penerbit = $validatedData['penerbit'];
        $kearsitekturan->skala = $validatedData['skala'];
        $kearsitekturan->referensi = $validatedData['referensi'];
        $kearsitekturan->image = $validatedData['image'];

        $kearsitekturan->save();

        return redirect()
            ->route('arsipkearsitekturan.index')
            ->with('success', 'Kearsitekturan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kearsitekturan = Kearsitekturan::find($id);
        if ($kearsitekturan) {
            $kearsitekturan->delete();
            return redirect()
                ->route('arsipkearsitekturan.index')
                ->with('success', 'Kearsitekturan deleted successfully.');
        }
        return redirect()
            ->route('arsipkearsitekturan.index')
            ->with('error', 'Failed to delete Kearsitekturan.');
    }

    public function datakearsitekturanuser()
    {
        $kearsitekturans = Kearsitekturan::all();
        return view('datakearsitekturanuser.index', ['kearsitekturans' => $kearsitekturans]);
    }

    public function deletedKearsitekturan()
    {
        $kearsitekturans = Kearsitekturan::onlyTrashed()->get();
        return view('arsipkearsitekturan.trash', ['kearsitekturans' => $kearsitekturans]);
    }

    public function restore($id)
    {
        $kearsitekturan = Kearsitekturan::withTrashed()
            ->where('id', $id)
            ->first();
        if ($kearsitekturan) {
            $kearsitekturan->restore();
            return redirect()
                ->route('arsipkearsitekturan.index')
                ->with('success', 'Kearsitekturan restored successfully.');
        }
        return redirect()
            ->route('arsipkearsitekturan.index')
            ->with('error', 'Failed to restore Kearsitekturan.');
    }

    public function hardDelete($id)
    {
        $kearsitekturan = Kearsitekturan::withTrashed()
            ->where('id', $id)
            ->first();

            if($kearsitekturan->image){
                Storage::delete($kearsitekturan->image);
            }

        if ($kearsitekturan) {
            $kearsitekturan->forceDelete();
            return redirect()
                ->route('arsipkearsitekturan.trash')
                ->with('success', 'Kearsitekturan permanently deleted successfully.');
        }

        return redirect()
            ->route('arsipkearsitekturan.trash')
            ->with('error', 'Failed to permanently delete kearsitekturan.');
    }
}
