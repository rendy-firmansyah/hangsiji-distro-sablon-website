<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $table = 'categories';

    public $fillable = ['nama_kategori'];

    public function produk() {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
