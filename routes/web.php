<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DashboardAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});


// Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'get_dashboard'])->name('dashboard');

    // Produk
    Route::controller(ProdukController::class)->group(function () {
        Route::get('/produk/create', 'create')->name('produk-create');
        Route::get('/produk/viewproduk', 'index_produk')->name('produk-view-data');
        Route::get('/produk/viewkategori', 'index_kategori')->name('produk-view-data-kategori');
        Route::post('/produk/store', 'store')->name('produk-store');
    });

    // Pesanan
    Route::controller(PemesananController::class)->group(function () {
        Route::get('/pesanan/create', 'create_pesanan')->name('pesanan-create');
        Route::get('/pesanan/viewpesanan', 'index_pesanan')->name('pesanan-view-data');
    });
    
});

// User
Route::resource('beranda', HomeController::class);
Route::resource('tentang', AboutController::class);
Route::get('/pemesanan', [PemesananController::class, 'index_pemesanan_home'])->name('pemesanan-index');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/distro', [ProdukController::class, 'index_distro'])->name('produk.index-distro');
Route::get('/produk/sablon', [ProdukController::class, 'index_sablon'])->name('produk.index-sablon');
Route::resource('kontak', ContactController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
