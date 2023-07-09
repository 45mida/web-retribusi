<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class DashboardKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jenis.index', [
            'jenis' => Jenis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenis.create');
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
            'nama_jenis' => 'required|max:255',
            'jns_retribusi' => 'required|max:255',
            'norek_jenis' => 'required|max:255',
            'thn_target_anggaran' => 'required|max:5',
            'target_jns_ret' => 'required|max:255'
        ]);

        Jenis::create($validatedData);
        return redirect('/dashboard/jenis')->with('Berhasil', 'Kategori Retribusi Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jeni)
    {
        return view('dashboard.jenis.edit', [
            'jenis' => $jeni
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jeni)
    {
        $validatedData = $request->validate([
            'nama_jenis' => 'required|max:255',
            'jns_retribusi' => 'required|max:255',
            'norek_jenis' => 'required|max:255',
            'thn_target_anggaran' => 'required|max:5',
            'target_jns_ret' => 'required|max:255'
        ]);

        Jenis::where('id', $jeni->id)
            ->update($validatedData);
        return redirect('/dashboard/jenis')->with('Berhasil', 'Data Jenis Retribusi Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jeni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jeni)
    {
        Jenis::destroy($jeni->id);
        return redirect('/dashboard/jenis')->with('Berhasil', 'Data Kategori Berhasil Dihapus!');
    }
}