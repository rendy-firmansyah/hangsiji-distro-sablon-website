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
                <h1>PRODUK KAOS DISTRO & SABLON</h1>
                <button href="#" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">HANG SIJI SABLON & DISTRO</button>
            </div>
        </div>
    </section>
    {{-- END SECTION ONE --}}

    <section class="produk py-5">
        <div class="container">
            <div class="choice-button d-flex flex-column flex-sm-row justify-content-center">
                <a href="{{route('produk.index')}}" class="btn btn-sablon px-4 mx-3 my-2">INFO PRODUK</a>
                <a href="{{route('produk.index-distro')}}" class="btn btn-distro px-4 mx-3 my-2">DISTRO</a>
                <a href="{{route('produk.index-sablon')}}" class="btn btn-sablon px-4 mx-3 my-2">SABLON</a>
            </div>
            {{-- CONTENT START --}}
            {{-- <div id="produk-konten"> --}}
            @yield('content')
            {{-- </div> --}}
            {{-- CONTENT END --}}
        </div>
    </section>

    @include('home.partials.footer')

    {{-- SCRIPT JS --}}
    @include('home.partials.script')

</body>
</html>