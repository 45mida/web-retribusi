<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use App\Models\Kelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardTarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tarif.index', [
            'tarif' => Tarif::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tarif.create', [
            'kelola' => Kelola::all()
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
            'dinasopd_id' => 'required|max:255',
            'jns_layanan' => 'required|max:255',
            'satuan' => 'required|max:255',
            'tarif_layanan' => 'required|max:255',
            'tarif_saranan' => 'required|max:255',
            'tarif_total' => 'required|max:255',
            'foto_objek' => 'image|file|max:2048'
        ]);

        if ($request->file('foto_objek')) {
            $validatedData['foto_objek'] = $request->file('foto_objek')->store('objek');
        }

        Tarif::create($validatedData);
        return redirect('/dashboard/tarif')->with('Berhasil', 'Tarif Objek Retribusi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function show(Tarif $tarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarif $tarif)
    {
        return view('dashboard.tarif.edit', [
            'tarif' => $tarif,
            'kelola' => Kelola::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarif $tarif)
    {
        $validatedData = $request->validate([
            'dinasopd_id' => 'required|max:255',
            'jns_layanan' => 'required|max:255',
            'satuan' => 'required|max:255',
            'tarif_layanan' => 'required|max:255',
            'tarif_saranan' => 'required|max:255',
            'tarif_total' => 'required|max:255',
            'foto_objek' => 'image|file|max:2048'
        ]);

        if (request()->hasFile('foto_objek') && request('foto_objek') != '') {
            $imagePath = public_path('storage/' . $tarif->foto_objek);
            if (Tarif::exists($imagePath)) {
                unlink($imagePath);
            }
            $validatedData['foto_objek'] = $request->file('foto_objek')->store('objek');
        }

        Tarif::where('id', $tarif->id)
            ->update($validatedData);
        return redirect('/dashboard/tarif')->with('Berhasil', 'Data Tarif Objek Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarif $tarif)
    {
        if ($tarif->foto_objek) {
            Storage::delete($tarif->foto_objek);
        }
        Tarif::destroy($tarif->id);
        return redirect('/dashboard/tarif')->with('Berhasil', 'Tarif Objek Berhasil Dihapus!');
    }
}