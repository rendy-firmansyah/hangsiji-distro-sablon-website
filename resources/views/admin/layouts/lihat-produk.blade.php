@extends('admin.main-dashboard')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Produk Kaos</h4>
                <p class="card-description">
                  Berikut merupakan data produk kaos dengan kategori produk dan distro.
                </p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Kategori Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ asset('images/content/' . $item->gambar) }}" alt="Image" class="img-fluid"></td>
                                <td>{{ optional($item->category)->nama_kategori }}</td>
                                <td>{{$item->nama_produk}}</td>
                                <td>{{$item->harga}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection