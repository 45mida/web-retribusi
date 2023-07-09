<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'sumjasausaha' => DB::table('jenis')->where('jns_retribusi', 'Retribusi Jasa Usaha')->SUM('target_jns_ret'),
            'sumjasaumum' => DB::table('jenis')->where('jns_retribusi', 'Retribusi Jasa Umum')->SUM('target_jns_ret'),
            'sumizin' => DB::table('jenis')->where('jns_retribusi', 'Retribusi Perizinan Tertentu')->SUM('target_jns_ret'),
        ]);
    }
}