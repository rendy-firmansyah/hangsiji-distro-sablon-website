@extends('admin.main-dashboard')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data Kategori</h4>
                <p class="card-description">
                  Berikut adalah daftar kategorinya...
                </p>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nama_kategori}}</td>
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