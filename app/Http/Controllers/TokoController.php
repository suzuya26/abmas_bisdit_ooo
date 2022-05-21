<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TokoController extends Controller
{
    public function show($id){
        $toko = DB::table('toko_oleh')->where('idtoko', $id)->first();
        $produk_toko = DB::table('produk_toko')->where('idtoko', $id)->get();
        $now = Carbon::now();
        $start = Carbon::createFromTimeString($toko->jam_buka);
        $end = Carbon::createFromTimeString($toko->jam_tutup);
        $check = $now->between($start, $end);
        return view('toko', compact('toko', 'produk_toko', 'check'));
    }

}
