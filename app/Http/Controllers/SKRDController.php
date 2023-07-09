<?php

namespace App\Http\Controllers;

use App\Models\SKRD;
use App\Models\Jenis;
use App\Models\Tarif;
use App\Models\Kelola;
use Illuminate\Http\Request;

class SKRDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.skrd.index', [
            //'spord' => Ajuan::where('user_id', auth()->user()->id)->get()
            'skrd' => SKRD::all(),
            'kelola' => Kelola::all(),
            'jenis' => Jenis::all(),
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
        return view('dashboard.skrd.create', [
            'kelola' => Kelola::all(),
            'jenis' => Jenis::all(),
            'tarif' => Tarif::all()
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
            'no_seri' => 'required|max:255',
            'masa_ret' => 'required|max:255',
            'thn_ret' => 'required|max:255',
            'terbit_ret' => 'required|max:255',
            'jenis_id' => 'required|max:17',
            'dinasopd_id' => 'max:50',
            'no_rek' => 'required|max:255',
            'tempo_ret' => 'max:255',
            'nama_pemesan' => 'max:255',
            'org_pemesan' => 'max:255',
            'alamat_pemesan' => 'required|max:255',
            'npwp' => 'max:255',
            'objek1' => 'required|max:255',
            'objek2' => 'max:255',
            'objek3' => 'max:255',
            'objek4' => 'max:255',
            'satuan1' => 'required|max:255',
            'satuan2' => 'max:255',
            'satuan3' => 'max:255',
            'satuan4' => 'max:255',
            'vol1' => 'required|max:255',
            'vol2' => 'max:255',
            'vol3' => 'max:255',
            'vol4' => 'max:255',
            'total' => 'required|max:255',
            'total_huruf' => 'required|max:255',
            'keterangan' => 'required|max:255'
        ]);

        SKRD::create($validatedData);
        return redirect('/dashboard/skrd')->with('Berhasil', 'SKRD Diterbitkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SKRD  $sKRD
     * @return \Illuminate\Http\Response
     */
    public function show(SKRD $sKRD)
    {
        return view('dashboard.skrd.show', [
            'skrd' => $sKRD
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SKRD  $sKRD
     * @return \Illuminate\Http\Response
     */
    public function edit(SKRD $sKRD)
    {
        return view('dashboard.skrd.edit', [
            'skrd' => $sKRD,
            'kelola' => Kelola::all(),
            'jenis' => Jenis::all(),
            'tarif' => Tarif::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SKRD  $sKRD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SKRD $sKRD)
    {
        $validatedData = $request->validate([
            'no_seri' => 'required|max:255',
            'masa_ret' => 'required|max:255',
            'thn_ret' => 'required|max:255',
            'terbit_ret' => 'required|max:255',
            'jenis_id' => 'required|max:17',
            'dinasopd_id' => 'max:50',
            'no_rek' => 'required|max:255',
            'tempo_ret' => 'max:255',
            'nama_pemesan' => 'max:255',
            'org_pemesan' => 'max:255',
            'alamat_pemesan' => 'required|max:255',
            'npwp' => 'max:255',
            'objek1' => 'required|max:255',
            'objek2' => 'max:255',
            'objek3' => 'max:255',
            'objek4' => 'max:255',
            'satuan1' => 'required|max:255',
            'satuan2' => 'max:255',
            'satuan3' => 'max:255',
            'satuan4' => 'max:255',
            'vol1' => 'required|max:255',
            'vol2' => 'max:255',
            'vol3' => 'max:255',
            'vol4' => 'max:255',
            'total' => 'required|max:255',
            'total_huruf' => 'required|max:255',
            'keterangan' => 'required|max:255'
        ]);

        SKRD::where('id', $sKRD->id)
            ->update($validatedData);
        return redirect('/dashboard/skrd')->with('Berhasil', 'Data SKRD Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SKRD  $sKRD
     * @return \Illuminate\Http\Response
     */
    public function destroy(SKRD $sKRD)
    {
        SKRD::destroy($sKRD->id);
        return redirect('/dashboard/skrd')->with('Berhasil', 'SKRD Terbit, Berhasil Dihapus!');
    }
}