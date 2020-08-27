<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandalay Capital</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="{{asset('css/fontawesome-free-5.14.0-web/css/all.min.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <x-header />

    <!-- banner -->
    <x-banner-section/>
    <!-- What we do -->
    <x-what-we-do-section/>

    <!-- our services -->
    <x-our-services/>

    <!-- meet our team -->
    <x-meet-our-member/>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script>
        window.addEventListener("load", function () {
            var img_one = document.querySelector("#banner-image-one");
            var img_two = document.querySelector("#banner-image-two");
            var img_three = document.querySelector("#banner-image-three");
            animation(img_one, 800);
            animation(img_two, 1600);
            animation(img_three, 2400);
            function animation(ele, duration) {
                setTimeout(function () {
                    ele.classList.add("zoomIn")
                }, duration)
            }

        });

        window.addEventListener("scroll", Animation);
            function Animation()
            {
                $("#scroll-bar:visible").addClass("ease-in");
                $("#scroll-bar").removeClass("hidden");
            }

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 8,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                slidesPerView: 2,
                spaceBetween: 10,
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 20,
                },
                1024: {
                slidesPerView: 4,
                spaceBetween: 30,
                },
            }
            });
    </script>
</body>

</html>