<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Hang Siji Sablon & Distro</title>
    @include('home.partials.styling')
    {{-- Animation Scroll --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    {{-- HEADER INFO --}}
    @include('home.partials.header-navbar')
    {{-- HEADER INFO END --}}

    {{-- NAVBAR START --}}
    @include('home.partials.navbar')
    {{-- NAVBAR END --}}

    {{-- SECTION ONE --}}
    <section class="hero">
        <div class="owl-carousel owl-theme banner-carousel">
            <div class="banner">
                <div class="overlay"></div>
                <img src="{{asset('banner/contohbg.png')}}" alt="" class="banner-image">
                <div class="banner-content">
                    <h1 class="">BUAT CUSTOM SABLON BERSAMA KELUARGAMU BERSAMA KAMI "HANG SIJI DISTRO & SABLON"</h1>
                    <a href="{{route('pemesanan-index')}}" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">PESAN MULAI SEKARANG !</a>
                </div>
            </div>
            <div class="banner">
                <div class="overlay"></div>
                <img src="{{asset('banner/banner2.png')}}" alt="" class="banner-image">
                <div class="banner-content">
                    <h1 class="">BUAT CUSTOM SABLON BERSAMA KELUARGAMU BERSAMA KAMI "HANG SIJI DISTRO & SABLON"</h1>
                    <a href="{{route('pemesanan-index')}}" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">PESAN MULAI SEKARANG !</a>
                </div>
            </div>
            <div class="banner">
                <div class="overlay"></div>
                <img src="{{asset('banner/banner3.png')}}" alt="" class="banner-image">
                <div class="banner-content">
                    <h1 class="">BUAT CUSTOM SABLON BERSAMA KELUARGAMU BERSAMA KAMI "HANG SIJI DISTRO & SABLON"</h1>
                    <a href="{{route('pemesanan-index')}}" class="btn btn-pesan" style="font-size: 20px; font-weight: 700;">PESAN MULAI SEKARANG !</a>
                </div>
            </div>
        </div>
    </section>
    {{-- END SECTION ONE --}}

    {{-- OUR CLIENT START --}}
    <div class="container">
        <section class="customer-logos slider">
            <div class="slide"><img src="{{asset('banner/partner/google.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/facebook.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/instagram.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/twitter.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/uber.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/nike.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/adidas.png')}}" alt=""></div>
            <div class="slide"><img src="{{asset('banner/partner/youtube.png')}}" alt=""></div>
        </section>
    </div>
    {{-- OUR CLIENT END --}}

    {{-- PROMO START --}}
    <section class="promo">
        <div class="container">
            <div class="title p-4">
                <h1 class="text-black mb-4" data-aos="" data-aos-duration="1500">PROMO BULAN JANUARI</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="height: 343px">
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="height: 343px">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="height: 343px">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- PROMO END --}}

    {{-- SERVICE START --}}
    <section class="container py-4">           
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card blue py-1 px-1">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{asset('banner/icon/image 2.png')}}" alt="" width="70px">
                        <span class="text-white text-icon ms-4">KUALITAS KAOS DIJAMIN BAGUS</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card blue py-1 px-1">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{asset('banner/icon/image 3.png')}}" alt="" width="70px">
                        <span class="text-white text-icon ms-4">PELAYANAN SUPER CEPAT</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card blue py-1 px-1">
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <img src="{{asset('banner/icon/image 4.png')}}" alt="" width="70px">
                        <span class="text-white text-icon ms-4">DESAIN SUPER KECE & KEREN</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- SERVICE END --}}

    {{-- TRACKING START--}}
    <section class="tracking">
        <div class="container">
            <div class="track-body text-center text-white">
                <div class="title-track mb-3">"LACAK PEMESANAN ANDA MELALUI FITUR TRACKING KAMI"</div>
                <button class="btn btn-track px-5 py-3">LACAK SEKARANG</button>
            </div>
        </div>
    </section>
    {{-- TRACKING END--}}

    {{-- GALLERY KAOS --}}
    <section class="gallery py-4">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="title p-4" data-aos="fade-up" data-aos-duration="1500">
                <h1>GALERI<span> KAOS</span></h1>
            </div>
            <div class="photo-gallery d-flex gap-20px">
                <div class="column d-flex flex-column gap-20px">
                    <div class="photo">
                        <img src="https://source.unsplash.com/OyCl7Y4y0Bk" alt="">
                    </div>
                    <div class="photo">
                        <img src="https://source.unsplash.com/Kl1gC0ve620" alt="">
                    </div>
                    <div class="photo">
                        <img src="https://source.unsplash.com/55btQzyDiO8" alt="">
                    </div>
                </div>
                <div class="column d-flex flex-column gap-20px">
                    <div class="photo">
                        <img src="https://source.unsplash.com/g0dBbrGmMe0" alt="">
                    </div>
                    <div class="photo">
                        <img src="https://source.unsplash.com/v1OW17UcR-Q" alt="">
                    </div>
                    <div class="photo">
                        <img src="https://source.unsplash.com/Wpg3Qm0zaGk" alt="">
                    </div>
                </div>
                <div class="column d-flex flex-column gap-20px">
                    <div class="photo">
                        <img src="https://source.unsplash.com/W3FC_bCPw8E" alt="">
                    </div>
                    <div class="photo">
                        <img src="https://source.unsplash.com/rBRZLPVLQg0" alt="">
                    </div>
                    <div class="photo">
                        <img src="https://source.unsplash.com/Kl1gC0ve620" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- LOKASI START --}}
    <section class="location py-4">
        <div class="container">
            <div class="title ps-4">
                <h1 class="text-black mb-4" data-aos="fade-right" data-aos-duration="1500">LOKASI HANG SIJI DISTRO & SABLON</h1>
            </div>
            <div class="maps mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.219944749736!2d114.09404957405818!3d-8.28089568325478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6ad4dcad32d3b%3A0x3823e8ed89a950b4!2sHangsiji%20Distro%20%26%20Sablon!5e0!3m2!1sid!2sid!4v1702585523904!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="box-location">
                <h1 class="text-white text-center mt-3">Jl. Umbul - Gunungsari, Sumbergondo RT.1/RW.3, Salamrejo, Sumbergondo, Kec. Glenmore, Kabupaten Banyuwangi, Jawa Timur 68466</h1>
            </div>
        </div>
    </section>
    {{-- LOKASI END --}}

    {{-- TESTIMONI START--}}
    <section class="testimoni">
        <div class="container py-5">
            <div class="owl-carousel owl-theme d-flex justify-content-center align-items-center h-100">
                <div class="item d-flex justify-content-center align-items-center h-100">
                    <div class="card box-testi">
                        <h2 class="text-center title-testi">KATA PELANGGAN KAMI...</h2>
                        <p class="text-testimoni text-center">
                            “Sangat puas dengan pelayanannya. Respon cepat, komunikasi lancar dan ramah dalam menanggapi setiap permintaan. Hasil pesanan pun sangat baik, dipacking dengan rapi dan pengirimannya cepat. The best pokoknya!”
                        </p>
                        <span class="text-center"> -- Anonymus 1 -- </span>
                    </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center h-100">
                    <div class="card box-testi">
                        <h2 class="text-center title-testi">KATA PELANGGAN KAMI...</h2>
                        <p class="text-testimoni text-center">
                            “Sangat puas dengan pelayanannya. Respon cepat, komunikasi lancar dan ramah dalam menanggapi setiap permintaan. Hasil pesanan pun sangat baik, dipacking dengan rapi dan pengirimannya cepat. The best pokoknya!”
                        </p>
                        <span class="text-center"> -- Anonymus 2 -- </span>
                    </div>
                </div>
                <div class="item d-flex justify-content-center align-items-center h-100">
                    <div class="card box-testi">
                        <h2 class="text-center title-testi">KATA PELANGGAN KAMI...</h2>
                        <p class="text-testimoni text-center">
                            “Sangat puas dengan pelayanannya. Respon cepat, komunikasi lancar dan ramah dalam menanggapi setiap permintaan. Hasil pesanan pun sangat baik, dipacking dengan rapi dan pengirimannya cepat. The best pokoknya!”
                        </p>
                        <span class="text-center"> -- Anonymus 3 -- </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TESTIMONI END--}}

    {{-- TAGLINE START --}}
    <section class="tagline">
        <div class="container">
            <div class="tagline d-flex justify-content-center align-items-center">
                <h2 class="text-black text-center">"YUK BURUAN BUAT CUSTOM SABLON KAOS KAMU SEKARANG JUGA !!"</h2>
            </div>
        </div>
    </section>
    {{-- TAGLINE END --}}

    {{-- FOOTER START --}}
    @include('home.partials.footer')
    {{-- FOOTER END --}}

    {{-- SCRIPT JS --}}
    @include('home.partials.script')
    {{-- Animation Scrool --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false,
        });
    </script>
</body>
</html>