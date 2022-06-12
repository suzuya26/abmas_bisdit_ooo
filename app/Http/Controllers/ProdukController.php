<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function tambah(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
		$nama_file = time()."_".$file->getClientOriginalName();
       // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
        DB::table('mitra_produk')->insert([
            'nama_produk_mitra' => $request->nama_produk,
            'harga_produk_mitra' => $request->harga_produk,
            'kemasan_produk_mitra' => $request->kemasan_produk,
            'idmitra' => Auth::user()->mitra_id,
            'stok_produk_mitra'=>$request->stok_produk,
            'idoleh' => 1,
            'gambar_produkMitra' => $nama_file
        ]);
        $request->session()->flash('success', 'Produk Anda berhasil ditambahkan');
        // return redirect('/daftarproduk/'.{{Auth::user()->mitra_id}});
        return redirect('/daftarproduk/'.Auth::user()->mitra_id);
    }
    public function tambahproduk($id){
        $mitra_produk = DB::table('mitra_produk')->where('id_produk_mitra', $id)->first();
        return view('mitra.tambahproduk', compact('mitra_produk'));
    }
    public function daftarproduk($id){
        $mitra_produk = DB::table('mitra_produk')->where('idmitra', $id)->get();
        return view('mitra.daftarproduk', compact('mitra_produk'));
    }

}
