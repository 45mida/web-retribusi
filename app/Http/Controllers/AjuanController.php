<?php

namespace App\Http\Controllers;

use App\Models\Ajuan;
use App\Models\Kelola;
use App\Models\Tarif;
use Illuminate\Http\Request;

class AjuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pesan', [
            //'spord' => Ajuan::where('user_id', auth()->user()->id)->get()
            'pesan' => Ajuan::all(),
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
        return view('pesan', [
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ajuan  $spord
     * @return \Illuminate\Http\Response
     */
    public function show(Ajuan $spord)
    {
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
    }
}