      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">PRODUK KAOS</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-package-variant"></i>
              <span class="menu-title">Data Produk Kaos</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('produk-create')}}">Tambah Produk Kaos</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('produk-view-data')}}">Lihat Produk Kaos</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('produk-view-data-kategori')}}">Lihat Kategori Kaos</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Tambah Produk Info</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pemesanan</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-shopping"></i>
              <span class="menu-title">Data Pemesanan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('pesanan-create')}}">Tambah Pesanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('pesanan-view-data')}}">Lihat Pesanan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">PROMO</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-star-box-outline"></i>
              <span class="menu-title">Promo Penjualan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Tambah Promo </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">KOMENTAR PELANGGAN</li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="menu-icon mdi mdi-comment-eye-outline"></i>
              <span class="menu-title">Lihat Komentar</span>
            </a>
          </li>
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>