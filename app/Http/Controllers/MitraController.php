<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MitraController extends Controller
{
    public function mitra($idMitra){
        $mitra = DB::table('produk_mitra')
        ->join('mitra_produk', 'mitra_produk.idmitra', '=', 'produk_mitra.idmitra')
        ->get();
        $idmitra = '';
        foreach ($mitra as $m) {
            $idmitra = $m->idmitra;
        }
        $produkmitra= DB::table('produk_mitra')
        ->where('produk_mitra.idmitra',$idmitra)
        ->join('mitra', 'mitra.idmitra', '=', 'produk_mitra.idmitra')
        ->get();
        $toko_mitra = DB::table('toko_mitra')->join('users', 'mitra_id', '=', 'toko_mitra.idmitra')->select('toko_mitra.*', 'users.mitra_id')->where('idmitra', $id)->first();
        return view('mitra', compact('mitra','produkmitra', 'toko_mitra', $idMitra));
    }
    public function index($id){
        // $nama_mitra = DB::table('users')->join('toko_mitra', 'idmitra', '=', 'mitra_id')->select('users.*','toko_mitra.*')->get();
        $toko_mitra = DB::table('toko_mitra')->join('users', 'mitra_id', '=', 'toko_mitra.idmitra')->select('toko_mitra.*', 'users.mitra_id')->where('idmitra', $id)->first();
        $toko_mitra2 = DB::table('toko_mitra')->where('idmitra', $id)->first();
        return view('mitra.profil', [
            'toko_mitra'=>$toko_mitra,
            'checkbox' => explode('---', $toko_mitra2->fasilitas_mitra),
            'checkbox1' => explode('---', $toko_mitra->sekitar_mitra)
        ]);
    }
    public function edit($id){
        $toko_mitra = DB::table('toko_mitra')->where('idmitra', $id)->first();
        return view('mitra.updateprofil', [
            'toko_mitra' => $toko_mitra,
            'checkbox' => explode('---', $toko_mitra->fasilitas_mitra),
            'checkbox1' => explode('---', $toko_mitra->sekitar_mitra)
        ]);
    }
    public function update(Request $request, $id)
    {
       $mitra = DB::table('toko_mitra')->where('idmitra', $id);
       $mitra->update([
            'nama_mitra' => $request->nama,
            'alamat_mitra' => $request->alamat,
            'kontak_mitra' => $request->kontak,
            'website_mitra' => $request->web,
            'sosmed_mitra' => $request->ig,
            'jam_buka'=>$request->jam_buka,
            'jam_tutup'=>$request->jam_tutup
        ]);

        if(!empty($request->input('fasilitas_mitra'))){
            $checkbox = join('---', $request->input('fasilitas_mitra'));
            DB::table('toko_mitra')->where('idmitra',$id)->update(['fasilitas_mitra'=>$checkbox]);
        } else{
            $mitra = '';
        }
        if(!empty($request->input('sekitar_mitra'))){
            $checkbox = join('---', $request->input('sekitar_mitra'));
            DB::table('toko_mitra')->where('idmitra',$id)->update(['sekitar_mitra'=>$checkbox]);
        } else{
            $mitra = '';
        }
        return redirect('/profil/'.$id);
    }
    public function gambarutama(Request $request, $id){
        $mitra = DB::table('toko_mitra')->where('idmitra', $id);
        $validatedData = $request->validate([
            'image'=>'image|file|max:4096'
        ]);
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        $mitra->update([
            'gambar_utama' => $nama_file
        ]);
        return redirect()->back();
    }

    public function gambar1(Request $request, $id){
        $mitra = DB::table('toko_mitra')->where('idmitra', $id);
        $validatedData = $request->validate([
            'image'=>'image|file|max:4096'
        ]);
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        $mitra->update([
            'gambar_1' => $nama_file
        ]);
        return redirect()->back();
    }
    public function gambar2(Request $request, $id){
        $mitra = DB::table('toko_mitra')->where('idmitra', $id);
        $validatedData = $request->validate([
            'image'=>'image|file|max:4096'
        ]);
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        $mitra->update([
            'gambar_2' => $nama_file
        ]);
        return redirect()->back();
    }
    public function gambar3(Request $request, $id){
        $mitra = DB::table('toko_mitra')->where('idmitra', $id);
        $validatedData = $request->validate([
            'image'=>'image|file|max:4096'
        ]);
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        $mitra->update([
            'gambar_3' => $nama_file
        ]);
        return redirect()->back();
    }
    public function gambar4(Request $request, $id){
        $mitra = DB::table('toko_mitra')->where('idmitra', $id);
        $validatedData = $request->validate([
            'image'=>'image|file|max:4096'
        ]);
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        $mitra->update([
            'gambar_4' => $nama_file
        ]);
        return redirect()->back();
    }
    public function gambar5(Request $request, $id){
        $mitra = DB::table('toko_mitra')->where('idmitra', $id);
        $validatedData = $request->validate([
            'image'=>'image|file|max:4096'
        ]);
        $file = $request->file('image');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
	    $file->move($tujuan_upload,$nama_file);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        $mitra->update([
            'gambar_5' => $nama_file
        ]);
        return redirect()->back();
    }
    public function store(Request $request)
    {
        $mitra = DB::table('toko_mitra');
       $mitra->create([
            'nama_mitra' => $request->nama,
            'alamat_mitra' => $request->alamat,
            'kontak_mitra' => $request->kontak,
            'website_mitra' => $request->web,
            'sosmed_mitra' => $request->ig,
        ]);
        if(!empty($request->input('fasilitas_toko'))){
            $checkbox = join('---', $request->input('fasilitas_toko'));
            DB::table('toko_mitra')->where('idmitra',$id)->create(['fasilitas_toko'=>$checkbox]);
        } else{
            $mitra = '';
        }
        return redirect('/profil/'.$id);
    }
    public function show($id){
        $toko = DB::table('toko_mitra')->where('idmitra', $id)->first();
        $produk_mitra = DB::table('mitra_produk')->where('idmitra', $id)->get();
        $now = Carbon::now();
        $start = Carbon::createFromTimeString($toko->jam_buka);
        $end = Carbon::createFromTimeString($toko->jam_tutup);
        $check = $now->between($start, $end);
        return view('mitra', compact('toko', 'produk_mitra','check'));
    }
    public function mitras($id){
        $toko_mitra = DB::table('toko_mitra')->join('users', 'mitra_id', '=', 'toko_mitra.idmitra')->select('toko_mitra.*', 'users.mitra_id')->where('idmitra', $id)->first();
        return view('mitra.dashboard', compact('toko_mitra'));
    }

}
