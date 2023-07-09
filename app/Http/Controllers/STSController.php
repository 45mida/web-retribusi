<?php

namespace App\Http\Controllers;

use App\Models\STS;
use App\Models\Kelola;
use App\Models\Tarif;
use Illuminate\Http\Request;

class STSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sts.index', [
            //'spord' => Ajuan::where('user_id', auth()->user()->id)->get()
            'sts' => STS::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sts.create', [
            'kelola' => Kelola::all()
        ]);

        return view('dashboard.sts.create', [
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\STS  $sTS
     * @return \Illuminate\Http\Response
     */
    public function show(STS $sTS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\STS  $sTS
     * @return \Illuminate\Http\Response
     */
    public function edit(STS $sTS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\STS  $sTS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, STS $sTS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\STS  $sTS
     * @return \Illuminate\Http\Response
     */
    public function destroy(STS $sTS)
    {
        //
    }
}