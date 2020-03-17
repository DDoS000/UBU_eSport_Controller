<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBU eSport</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/swiperstyle.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/landing.css') }}">
    <script src="{{ URL::asset('js/parallax.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <div class="container-landing">
        <ul id="scene">
            <li class="layer" data-depth="0.5"><img src="{{asset('images/ubu.svg')}}"></li>
            <li class="layer" data-depth=".1"><img id="Circle" src="{{asset('images/Circle.svg')}}"
                    style="opacity: 50%; width: 80%; margin-left: 50%;"></li>
            <li class="layer" data-depth="-1"><img id="joy" src="{{asset('images/landingPage.svg')}}"
                    style="width: 95%"></li>
            <!-- <li class="layer" data-depth="-1"><img id="joy" src="{{asset('images/planet2.png')}}"></li> -->
            <li class="layer" data-depth="1.5"><img id="joy" src="{{asset('images/rocket.png')}}"></li>
            <label class="text">
                UBU e-sport<br>
                Controller<br>
                UBON RATCHATHANI UNIVERSITY.
            </label>
                    <div class="row">
                    <a href="{{route('login')}}" class="btn-1">Get started</a>
                    <a href="#section-2" class="btn-2">เกมที่สนับสนุน ?</a>
                    </div>
        </ul>
        <div class="skewed"></div>
    </div>
























        <div class="gameSupport">
            <div class="row">
                <div class="col-sm">
                    game support
                </div>
            </div>
        </div>

        <div id="section-2">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
































        <!-- <ul id="scene">
        <li class="layer" data-depth="0.5"><img src="{{asset('images/ubu.svg')}}"></li>
        <li class="layer" data-depth=".1"><img src="{{asset('images/Circle.svg')}}" style="opacity: 50%; width: 70%; margin-left: 50%;" ></li>
        <li class="layer" data-depth=""><img src="{{asset('images/joystick.svg')}}" style="margin-left: 100px;"></li>
        <label class="text">
            UBU e-sport<br>
            Controller<br>
            UBON RATCHATHANI UNIVERSITY.
        </label>
        <a href="#section2">Get started</a>
    </ul>
    <div class="skewed"></div>
    <div class="example" id="section2" style="height:1000px">
dadaddadad
    </div> -->



        <div class="load">
            <hr />
            <hr />
            <hr />
            <hr />
        </div>
        <script src="{{ URL::asset('js/swiper.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script>
            // ----------------on scroll--------------
            AOS.init();

            // ------------parallax---------------
            var scene = document.getElementById('scene');
            var parallax = new Parallax(scene);


            // -------------webload------------

            $(function () {
                $(window).on("load", function () {
                    $(".load").fadeOut("slow");
                });
            })

            // --------------gameSupport------------------

            var swiper = new Swiper('.swiper-container', {
                speed: 900,
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                autoplay: {
                    delay: 1200,

                },
                coverflowEffect: {
                    rotate: 30,
                    stretch: 0,
                    depth: 200,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                },

            });
        </script>
</body>

</html>
