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

    {{-- SECTION ONE START--}}
    <section class="hero">
        <div class="banner">
            <div class="overlay"></div>
            <img src="{{asset('banner/contohbg.png')}}" alt="" class="banner-image">
            <div class="banner-content">
                <h1>PEMESANAN KUSTOM SABLON</h1>
                <button href="#" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">HANG SIJI SABLON & DISTRO</button>
            </div>
        </div>
    </section>
    {{-- END SECTION ONE --}}

    <section class="from-pemesanan py-5">
        <div class="container">
            <h2 class="pb-3 title-pesan">ISI FORM PEMESANAN</h2>
            <form action="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">NAMA PEMESAN</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">ALAMAT PEMESAN (TULIS SECARA LENGKAP)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">NO WHATSAPP</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">LINK DESAIN (JIKA ADA)</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"></textarea>
                            <label for="floatingTextarea">DESKRIPSI PEMESANAN</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-pesan-sablon w-100">PESAN SEKARANG</button>
            </form>
        </div>
    </section>

    @include('home.partials.footer')

    {{-- SCRIPT JS --}}
    @include('home.partials.script')
</body>
</html>