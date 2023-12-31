<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Hang Siji Sablon & Distro</title>
    @include('home.partials.styling')
</head>
<body>

    @include('home.partials.header-navbar')
    @include('home.partials.navbar')

    {{-- SECTION ONE --}}
    <section class="hero">
        <div class="banner">
            <div class="overlay"></div>
            <img src="{{asset('banner/contohbg.png')}}" alt="" class="banner-image">
            <div class="banner-content">
                <h1>TENTANG KAMI</h1>
                <button href="#" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">HANG SIJI SABLON & DISTRO</button>
            </div>
        </div>
    </section>
    {{-- END SECTION ONE --}}

    {{-- PROFIL START --}}
    <section class="profil py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h2 class="title-kontak">PROFIL PERUSAHAAN</h2>
                    <p class="">HANG SIJI MERUPAKAN SALAH SATU PERUSAHAAN PENYEDIA JASA SABLON DAN BAJU DISTRO. HANG SIJI BERTEMPAT DI KABUPATEN BANYUWANGI JAWA TIMUR, TEPATNYA PADA DAERAH DUSUN GUNUNGSARI DESA SUMBERGONDO. PERUSAHAAN INI TELAH BERDIRI SEJAK TAHUN 2012. </p>
                    <h2 class="title-kontak">OWNER</h2>
                    <p class="">
                        OWNER PERUSAHAAN : WAWAN DAN NEVI<br>
                        NOMOR TELEPON : 082357082325<br>
                        NOTE :<br>
                        “HUBUNGI OWNER DIATAS JIKA ANDA INGIN BEKERJA SAMA DENGAN PERUSAHAAN HANG SIJI DISTRO & SABLON”.
                    </p>
                </div>
                <div class="col-md-5 col-sm-12 d-flex justify-content-center">
                    <div class="card logo shadow">
                        <img src="{{asset('banner/icon/logo-penyablon.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- PROFIL END --}}



    @include('home.partials.footer')

    {{-- SCRIPT JS --}}
    @include('home.partials.script')

</body>
</html>