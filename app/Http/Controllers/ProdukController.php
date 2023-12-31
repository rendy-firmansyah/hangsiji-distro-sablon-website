<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        return view('home.layouts.produk-info');
    }

    public function index_distro() {
        return view('home.layouts.produk-distro');
    }

    public function index_sablon() {
        return view('home.layouts.produk-sablon');
    }


    // Admin

    public function index_kategori() {
        $kategori = Category::all();
        return view('admin.layouts.lihat-kategori', compact('kategori'));
    }

    public function index_produk() {
        $produk = Produk::with('category')->get();
        return view('admin.layouts.lihat-produk', compact('produk'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.layouts.tambah-produk', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
            'kategori_id' => 'required|exists:categories,id'
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->input('nama_produk');
        $produk->harga = $request->input('harga');
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images/content'), $namaGambar);
            $produk->gambar = $namaGambar;
        }
        $produk->kategori_id = $request->input('kategori_id');

        $produk->save();

        return redirect()->route('produk-view-data');
    }
    // public function edit()
    // public function update()
    // public function delete()

    // Category
    // public function index_category() {
    //     $category = 
    // }
}
