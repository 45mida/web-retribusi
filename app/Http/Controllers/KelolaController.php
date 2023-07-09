<?php

namespace App\Http\Controllers;

use App\Models\Kelola;
use App\Http\Requests\StoreKelolaRequest;
use App\Http\Requests\UpdateKelolaRequest;

class KelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kelola', [
            "nama_dinasopd" => "Kelola",
            "kelola" => Kelola::filter(request(['search']))->paginate(6)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKelolaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKelolaRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKelolaRequest  $request
     * @param  \App\Models\Kelola  $kelola
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKelolaRequest $request, Kelola $kelola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelola  $kelola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelola $kelola)
    {
        //
    }
}