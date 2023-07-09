<?php

namespace App\Http\Controllers;

use App\Models\Ajuan;
use App\Models\Kelola;
use App\Models\Tarif;
use Illuminate\Http\Request;

class DashboardKelolaAjuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.spord.index', [
            //'spord' => Ajuan::where('user_id', auth()->user()->id)->get()
            'spord' => Ajuan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.spord.create', [
            'kelola' => Kelola::all(),
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
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'organisasi' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'nohp' => 'required|max:17',
            'npwp' => 'max:50',
            'objek1' => 'required|max:255',
            'objek2' => 'max:255',
            'objek3' => 'max:255',
            'objek4' => 'max:255',
            'vol1' => 'required|max:255',
            'vol2' => 'max:255',
            'vol3' => 'max:255',
            'vol4' => 'max:255',
            'total' => 'required|max:255',
        ]);

        Ajuan::create($validatedData);
        return redirect('/dashboard/spord')->with('Berhasil', 'Ajuan Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ajuan  $spord
     * @return \Illuminate\Http\Response
     */
    public function show(Ajuan $dataspord)
    {
        //return $dataspord;
        return view('dashboard.dataspord.show', [
            'dataspord' => $dataspord
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ajuan  $ajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ajuan $ajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ajuan  $ajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ajuan $ajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ajuan  $ajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ajuan $spord)
    {
        Ajuan::destroy($spord->id);
        return redirect('/dashboard/dataspord')->with('Berhasil', 'Data Ajuan Dihapus!');
    }
}