<?php

namespace App\Http\Controllers;

use App\Models\Kelola;
use App\Models\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardKelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kelola.index', [
            'kelola' => Kelola::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kelola.create', [
            'jenis' => Jenis::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dinasopd' => 'required|max:255',
            'jenis_id' => 'required|max:255',
            'thn_anggaran' => 'required|max:255',
            'target_anggaran' => 'required|max:255',
            'foto_dinasopd' => 'image|file|max:4096'
        ]);

        if ($request->file('foto_dinasopd')) {
            $validatedData['foto_dinasopd'] = $request->file('foto_dinasopd')->store('opd-upt');
        }

        Kelola::create($validatedData);
        return redirect('/dashboard/kelola')->with('Berhasil', 'Dinas/UPT Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelola  $kelola
     * @return \Illuminate\Http\Response
     */
    public function show(Kelola $kelola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelola  $kelola
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelola $kelola)
    {
        return view('dashboard.kelola.edit', [
            'kelola' => $kelola,
            'jenis' => Jenis::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelola  $kelola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelola $kelola)
    {
        $validatedData = $request->validate([
            'nama_dinasopd' => 'required|max:255',
            'jenis_id' => 'required|max:255',
            'thn_anggaran' => 'required|max:255',
            'target_anggaran' => 'required|max:255',
            'foto_dinasopd' => 'image|file|max:4096'
        ]);

        if (request()->hasFile('foto_dinasopd') && request('foto_dinasopd') != '') {
            $imagePath = public_path('storage/' . $kelola->foto_dinasopd);
            if (Kelola::exists($imagePath)) {
                unlink($imagePath);
            }
            $validatedData['foto_dinasopd'] = $request->file('foto_dinasopd')->store('opd-upt');
        }

        Kelola::where('id', $kelola->id)
            ->update($validatedData);
        return redirect('/dashboard/kelola')->with('Berhasil', 'Data Dinas/UPT Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelola  $kelola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelola $kelola)
    {
        if ($kelola->foto_dinasopd) {
            Storage::delete($kelola->foto_dinasopd);
        }
        Kelola::destroy($kelola->id);
        return redirect('/dashboard/kelola')->with('Berhasil', 'Data Dinas/UPT Berhasil Dihapus!');
    }
}