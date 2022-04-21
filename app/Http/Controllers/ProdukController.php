<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function tambah(Request $request, $id)
    {

        DB::table('mitra_produk')->where('id_produk_mitra', $id)->insert([
            'nama_produk_mitra' => $request->nama_produk,
            'gambar_produk_mitra' => $request->gambar_produk,
            'harga_produk_mitra' => $request->harga_produk,
            'kemasan_produk_mitra' => $request->kemasan_produk,
            'idmitra' => $request->idmitra,
            'idoleh' => $request->idoleh,
        ]);
        return redirect()->back();
    }
    public function tambahproduk($id){
        $mitra_produk = DB::table('mitra_produk')->where('id_produk_mitra', $id)->first();
        return view('mitra.tambahproduk', compact('mitra_produk'));
    }
}
