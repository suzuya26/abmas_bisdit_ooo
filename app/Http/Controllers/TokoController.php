<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Page;

class TokoController extends Controller
{
    public function show($idtoko){
        $page = Page::first();
        $page->visitsCounter()->increment();

        $toko = DB::table('toko_oleh')->where('idtoko', $idtoko)->first();
        $produk_toko = DB::table('produk_toko')->where('idtoko', $idtoko)->get();
        $now = Carbon::now();
        $start = Carbon::createFromTimeString($toko->jam_buka);
        $end = Carbon::createFromTimeString($toko->jam_tutup);
        $check = $now->between($start, $end);
        return view('toko', compact('toko', 'idtoko', 'check', 'produk_toko','page'));
    }

}
