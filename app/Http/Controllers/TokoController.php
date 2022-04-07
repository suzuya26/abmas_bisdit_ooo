<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokoController extends Controller
{
    public function show(){
        $toko = DB::table('toko_oleh')->get();
        return view('toko', compact('toko'));
    }

}
