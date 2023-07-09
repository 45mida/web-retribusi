<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardKelolaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create', [
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
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'jabatan' => 'max:255',
            'dinasopd_id' => 'max:255',
            'nohp' => 'required|max:17',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/dashboard/user')->with('Berhasil', 'Data Pengguna Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', [
            'user' => $user,
            'kelola' => Kelola::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|min:5|max:255',
            'jabatan' => 'max:255',
            'dinasopd_id' => 'max:255',
            'nohp' => 'required|max:17',
            'email' => 'required|email|max:255',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/dashboard/user')->with('Berhasil', 'Data User Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('Berhasil', 'Data Berhasil Dihapus!');
    }
}