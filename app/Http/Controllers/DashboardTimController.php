<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardTimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tim.index', [
            'tims' => Tim::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tim.create');
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
            'nama_lengkap' => 'required|max:255',
            'nip' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto_tim' => 'image|file|max:2048'
        ]);

        if ($request->file('foto_tim')) {
            $validatedData['foto_tim'] = $request->file('foto_tim')->store('tim-profil');
        }

        Tim::create($validatedData);
        return redirect('/dashboard/tim')->with('Berhasil', 'Data Tim Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function show(Tim $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function edit(Tim $tim)
    {

        return view('dashboard.tim.edit', [
            'tim' => $tim
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tim $tim)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nip' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto_tim' => 'image|file|max:2048'
        ]);

        if (request()->hasFile('foto_tim') && request('foto_tim') != '') {
            $imagePath = public_path('storage/' . $tim->foto_tim);
            if (Tim::exists($imagePath)) {
                unlink($imagePath);
            }
            $validatedData['foto_tim'] = $request->file('foto_tim')->store('tim-profil');
        }

        Tim::where('id', $tim->id)
            ->update($validatedData);
        return redirect('/dashboard/tim')->with('Berhasil', 'Data Tim Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tim $tim)
    {
        if ($tim->foto_tim) {
            Storage::delete($tim->foto_tim);
        }
        Tim::destroy($tim->id);
        return redirect('/dashboard/tim')->with('Berhasil', 'Data Tim Berhasil Dihapus!');
    }
}