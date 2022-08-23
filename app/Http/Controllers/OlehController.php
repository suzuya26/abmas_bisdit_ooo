<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Page;

class OlehController extends Controller
{
    public function detailvarianoleh($idoleh)
    {
        $page = Page::first();
        $page->visitsCounter()->increment();

        $varianoleh = DB::table('varianoleh')
            ->leftjoin('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->leftjoin('mitra', 'mitra.idmitra', '=', 'varianoleh.idmitra')
            ->leftjoin('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->leftjoin('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where('idoleh', $idoleh)
            ->get();

        $tempatbeli = DB::table('tempatbeli')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'tempatbeli.idlokasi')
            ->leftjoin('varianoleh', 'varianoleh.idoleh', '=', 'tempatbeli.idoleh')
            ->where('tempatbeli.idoleh', $idoleh)
            ->get();

        $provinsi = '';
        foreach ($varianoleh as $v) {
            $provinsi = $v->provinsi;
        }
        $rekomlokasi = DB::table('varianoleh')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['provinsi', '=', $provinsi],
                ['idoleh', '!=', $idoleh],
            ])
            ->limit(9)
            ->get();

        $namavarian = '';
        foreach ($varianoleh as $v) {
            $namavarian = $v->namavarian;
        }

        $rekomvarianjenis = DB::table('varianoleh')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where([
                ['namavarian', '=', $namavarian],
                ['idoleh', '!=', $idoleh],
            ])
            ->limit(9)
            ->get();

        return view('varianoleh', compact('varianoleh', 'tempatbeli', 'rekomlokasi', 'rekomvarianjenis', 'idoleh','page'));
    }

    public function detailoleh($idoleh)
    {
        $page = Page::first();
        $page->visitsCounter()->increment();

        $varianoleh = DB::table('varianoleh')
            ->leftjoin('bahandasar', 'bahandasar.idbahan', '=', 'varianoleh.idbahan')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('masak', 'masak.idmasak', '=', 'varianoleh.idmasak')
            ->leftjoin('mitra', 'mitra.idmitra', '=', 'varianoleh.idmitra')
            ->leftjoin('rasa', 'rasa.idrasa', '=', 'varianoleh.idrasa')
            ->leftjoin('tekstur', 'tekstur.idtekstur', '=', 'varianoleh.idtekstur')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where('idoleh', $idoleh)
            ->get();

        $tempatbeli = DB::table('tempatbeli')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'tempatbeli.idlokasi')
            ->leftjoin('varianoleh', 'varianoleh.idoleh', '=', 'tempatbeli.idoleh')
            ->where('tempatbeli.idoleh', $idoleh)
            ->get();

        $provinsi = '';
        foreach ($varianoleh as $v) {
            $provinsi = $v->provinsi;
        }
        $rekomlokasi = DB::table('varianoleh')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->where([
                ['provinsi', '=', $provinsi],
                ['idoleh', '!=', $idoleh],
            ])
            ->limit(9)
            ->get();

        $namavarian = '';
        foreach ($varianoleh as $v) {
            $namavarian = $v->namavarian;
        }

        $rekomvarianjenis = DB::table('varianoleh')
            ->leftjoin('lokasi', 'lokasi.idlokasi', '=', 'varianoleh.idlokasi')
            ->leftjoin('varianjenis', 'varianjenis.id_varian', '=', 'varianoleh.id_varian')
            ->where([
                ['namavarian', '=', $namavarian],
                ['idoleh', '!=', $idoleh],
            ])
            ->limit(9)
            ->get();

            $toko = DB::table('tempatbeli')->first();
            $now = Carbon::now();
            $jam = preg_split('/ - /', $toko->jambuka);
            $start = Carbon::createFromTimeString($jam[0]);
            $end = Carbon::createFromTimeString($jam[1]);
            $check = $now->between($start, $end);


        return view('oleh', compact('varianoleh', 'tempatbeli', 'rekomlokasi', 'rekomvarianjenis', 'idoleh','toko','jam','check','page'));
    }
}
