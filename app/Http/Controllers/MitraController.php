<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller
{
    public function mitra(){
        $mitra = DB::table('mitra')
        ->join('lokasi', 'lokasi.idlokasi', '=', 'mitra.idlokasi')
        ->get();
        $idmitra = '';
        foreach ($mitra as $m) {
            $idmitra = $m->idmitra;
        }
        $produkmitra= DB::table('produk_mitra')
        ->where('produk_mitra.idmitra',$idmitra)
        ->join('mitra', 'mitra.idmitra', '=', 'produk_mitra.idmitra')
        ->get();
        return view('mitra', compact('mitra','produkmitra'));
    }
    public function index($id){
        $toko_mitra = DB::table('toko_mitra')->where('idmitra', $id)->first();
        return view('mitra.profil', compact('toko_mitra'));
    }
    public function edit($id){
        $toko_mitra = DB::table('toko_mitra')->where('idmitra', $id)->first();
        return view('mitra.updateprofil', compact('toko_mitra'));
    }
    public function update(Request $request, $id)
    {

        DB::table('toko_mitra')->where('idmitra', $id)->update([
            'nama_mitra' => $request->nama,
            'alamat_mitra' => $request->alamat,
            'kontak_mitra' => $request->kontak,
            'website_mitra' => $request->web,
            'sosmed_mitra' => $request->ig,
        ]);
        return redirect('/profil/'.$id);
    }

}
