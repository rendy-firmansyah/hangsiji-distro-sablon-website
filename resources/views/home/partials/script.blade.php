    {{-- <script>
        AOS.init({
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

            once: true,
            anchorPlacement: 'bottom',
        });
    </script> --}}
    
    {{-- Bundle Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Autoplay Our Partner Slick JS --}}
    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 3
                        }
                    }
                ]
            });
        });

        // Fixed Top Navbar
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function(){
            if(window.pageYOffset > 100){
                nav.classList.add('fixed-top', 'shadow')
            } else {
                nav.classList.remove('fixed-top', 'shadow')
            }
        })
    </script>

    {{-- Owl Carousel JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay: true,
            autoplaySpeed: 1000,
            autoplayTimeout: 3000,
            dots: false,
            arrows: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>

    <script type="text/javascript">
        $('.banner-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay: true,
            autoplaySpeed: 100,
            autoplayTimeout: 100,
            dots: false,
            arrows: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>

    <script>
        $(document).ready(function(){
        // Saat pengguna melakukan scroll
        $(window).scroll(function() {
            // Tutup navbar jika sedang aktif
            $('.navbar-collapse').collapse('hide');
        });
        
        // Saat pengguna mengklik di luar area navbar
        $(document).click(function(event) {
            var clickover = $(event.target);
            var $navbar = $(".navbar-collapse");
            var _opened = $navbar.hasClass("show");
            if (_opened === true && !clickover.hasClass("navbar-toggler")) {
            $navbar.collapse('hide');
            }
        });
        });
    </script>

