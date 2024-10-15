<!-- js -->
<script src=" {{ asset('front_end/assets/js/jquery-3.7.1.min.js') }} "></script>
<script src=" {{ asset('front_end/assets/js/index.js') }} "></script>
{{-- <script src="./assets/js/jquery-3.7.1.min.js"></script>
<script src="./assets/js/index.js"></script> --}}
<script src=" {{ asset('front_end/assets/js/plugins.js') }} "></script>
<script src=" {{ asset('front_end/assets/js/home-slider.js') }} "></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- js -->

<script src="{{asset('user_dashboard/assets/js/profile.js')}} "></script>


<script>
   $(document).ready(function () {
       $('select').niceSelect();
   });
</script>


<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
    });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".join-slider-items").slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            centerMode: true,
            responsive: [{
                    breakpoint: 1624,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },


                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    });
</script>

<script src="{{ asset('user_dashboard/assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('front_end/assets/js/toastr.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.umd.min.js"></script>
<script src="{{ asset('user_dashboard/assets/js/calender.js') }}"></script>
<script src="{{ asset('user_dashboard/assets/js/index.js') }}"></script>



@stack('scripts')
