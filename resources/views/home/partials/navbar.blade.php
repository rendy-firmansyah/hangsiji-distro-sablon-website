<nav class="navbar py-3 navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Hang Siji</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-4 me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('beranda.index')}}">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('tentang.index')}}">TENTANG KAMI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pemesanan-index')}}">PESAN SABLON</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('produk.index')}}">PRODUK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('kontak.index')}}">KONTAK</a>
          </li>
        </ul>
        <a href="{{route('pemesanan-index')}}" class="btn btn-started">Get Started</a>
      </div>
    </div>
</nav>