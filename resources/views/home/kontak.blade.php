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
                <h1>HUBUNGI KAMI</h1>
                <button href="#" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">KONTAK DAN ALAMAT</button>
            </div>
        </div>
    </section>
    {{-- END SECTION ONE --}}

    <section class="kontak-alamat py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="pb-3 title-pesan">KONTAK KAMI</h2>
                    <p>JIKA ANDA INGIN MENGAJUKAN PERTANYAAN KEPADA KAMI, HUBUNGI KAMI MELALUI KONTAK BERIKUT INI :</p>
                    <p>EMAIL : hangsijidistrosablon@gmail.com</p>
                    <div class="button-whatsapp mb-5">
                        <p>WHATSAPP</p>
                        <a href="" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp fa-2xl me-3" style="color: #ffffff;"></i>KLIK WHATSAPP</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="pb-3 title-pesan">KIRIM EMAIL</h2>
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">EMAIL</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">SUBJEK</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                            <label for="floatingTextarea">DESKRIPSI PEMESANAN</label>
                        </div>

                        <button type="submit" class="btn btn-pesan-sablon w-100">KIRIM EMAIL</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('home.partials.footer')

    {{-- SCRIPT JS --}}
    @include('home.partials.script')

</body>
</html>