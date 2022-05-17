<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtamaController extends Controller
{
    public function show(){
        $varianoleh = DB::table('varianoleh')->where('idlokasi', '=', '66')->get();
        return view('layouts.utama', compact('varianoleh'));
    }
}
