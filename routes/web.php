<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OlehController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\favoriteController as ControllersFavoriteController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UtamaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [IndexController::class, 'index']);
Route::get('/', [UtamaController::class, 'show']);
Route::get('varianoleh/{idoleh}', [OlehController::class, 'detailvarianoleh']);
Route::get('login', [LoginController::class, 'index'])->middleware('guest');
Route::post('login', [LoginController::class, 'auth']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);
Route::get('daerah', [FilterController::class, 'daerahasal']);
Route::get('filter/{kategori}/{by}', [FilterController::class, 'filterby']);
Route::get('jenis/{jenis}', [FilterController::class, 'varianjenis']);
Route::get('favorit', [FavoriteController::class, 'favorit']);
Route::get('mitra', [MitraController::class, 'mitra']);
Route::get('search', [SearchController::class, 'search']);
Route::get('/favorit/hapus/{idbookmark}',[FavoriteController::class,'hapusfavorit']);

Route::get('/dashboard/{id}', [ProdukController::class, 'dashboard']);

Route::get('/daftarproduk', function () {return view('mitra.daftarproduk');});
Route::get('/tambahproduk', function () {return view('mitra.tambahproduk');});
Route::get('/updateprofil', function () {return view('mitra.updateprofil');});

Route::get('/toko/{idtoko}', [TokoController::class, 'show']);
Route::post('/update/{id}', [MitraController::class, 'update'])->name('update');
Route::post('/updateGambar1/{id}', [MitraController::class, 'gambar1']);
Route::post('/updateGambar2/{id}', [MitraController::class, 'gambar2']);
Route::post('/updateGambar3/{id}', [MitraController::class, 'gambar3']);
Route::post('/updateGambar4/{id}', [MitraController::class, 'gambar4']);
Route::post('/updateGambar5/{id}', [MitraController::class, 'gambar5']);
Route::get('/profil/{id}', [MitraController::class, 'index'])->name('profil');
Route::get('/edit/{id}', [MitraController::class, 'edit'])->name('edit');
Route::get('/daftarproduk/{id}', [ProdukController::class, 'daftarproduk'])->name('daftarproduk');
Route::get('/mitra/{idMitra}', [MitraController::class, 'show'])->middleware('mitra')->name('mitra');
Route::get('/edit/tambahproduk/{id}', [ProdukController::class, 'tambahproduk'])->name('tambahproduk');
Route::post('/tambah', [ProdukController::class, 'tambah']);

Route::get('oleh/{idoleh}', [OlehController::class, 'detailoleh']);




