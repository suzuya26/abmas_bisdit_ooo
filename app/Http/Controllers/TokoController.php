<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function show($id){
        $toko = DB::table('toko_oleh')->where('idtoko', $id)->first();
        return view('toko', compact('toko'));
    }

}
