@extends('admin.main-dashboard')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambah Produk</h4>
                <p class="card-description">
                  Note : Lengkapi inputan untuk menambah data produk
                </p>
                <form class="forms-sample" action="{{route('produk-store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_produk" placeholder="Masukkan nama produk" name="nama_produk">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk" name="harga">
                  </div>
                  <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                  <div class="form-group">
                    <label for="kategori_id">Kategori</label>
                    <select class="form-control" id="kategori_id" name="kategori_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                  <button type="submit" class="btn btn-primary me-2 w-100">Submit</button>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection