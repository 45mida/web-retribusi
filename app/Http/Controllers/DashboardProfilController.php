<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardProfilController extends Controller
{
    public function edit(Request $request)
    {
        return view('dashboard.profil.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        $request->user()->update([
            'password' => Hash::make($request->get('password'))
        ]);

        return redirect()->route('dashboard.profil.edit')->with('Berhasil', 'Data User Diubah!');
    }
}