<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    public $table = 'produks';

    public $fillable = ['nama_produk', 'harga', 'gambar', 'kategori_id'];

    public function category() {
        return $this->belongsTo(Category::class, 'kategori_id');
    }
}
