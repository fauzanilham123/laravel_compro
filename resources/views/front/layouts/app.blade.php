<!DOCTYPE html>
<html lang="en" >

<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hallo! Mepy</title>
        <!-- Favicon -->
        <link rel="icon" type="icon" href="assets/images/HALLO MEPY.png" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;800;900&display=swap" rel="stylesheet" />
        <!-- Swiper Slider -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
        <!-- AOS Animation CSS -->
        <link href="assets/css/aos.css" rel="stylesheet" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

<body class="overflow-x-hidden">
    <!-- screen loader -->
    <div class="screen_loader fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="200px"
                height="200px"
                viewBox="0 0 100 100"
                preserveAspectRatio="xMidYMid"
            >
                <circle cx="50" cy="50" r="0" fill="none" stroke="#47bdff" stroke-width="4">
                    <animate
                        attributeName="r"
                        repeatCount="indefinite"
                        dur="1s"
                        values="0;16"
                        keyTimes="0;1"
                        keySplines="0 0.2 0.8 1"
                        calcMode="spline"
                        begin="0s"
                    ></animate>
                    <animate
                        attributeName="opacity"
                        repeatCount="indefinite"
                        dur="1s"
                        values="1;0"
                        keyTimes="0;1"
                        keySplines="0.2 0 0.8 1"
                        calcMode="spline"
                        begin="0s"
                    ></animate>
                </circle>
                <circle cx="50" cy="50" r="0" fill="none" stroke="#b476e5" stroke-width="4">
                    <animate
                        attributeName="r"
                        repeatCount="indefinite"
                        dur="1s"
                        values="0;16"
                        keyTimes="0;1"
                        keySplines="0 0.2 0.8 1"
                        calcMode="spline"
                        begin="-0.5s"
                    ></animate>
                    <animate
                        attributeName="opacity"
                        repeatCount="indefinite"
                        dur="1s"
                        values="1;0"
                        keyTimes="0;1"
                        keySplines="0.2 0 0.8 1"
                        calcMode="spline"
                        begin="-0.5s"
                    ></animate>
                </circle>
            </svg>
        </div>
    <div
        class="flex min-h-screen flex-col bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] font-mulish text-base font-normal text-gray antialiased ">
        @include('front.layouts.header')
            <div class="-mt-[82px] flex-grow overflow-x-hidden lg:-mt-[106px]">
                @yield('main_content')
            </div>
        @include('front.layouts.footer')
    </div>

    <!-- Return to Top -->
    <button type="button" id="scrollToTopBtn" class="fixed bottom-5 z-10 hidden animate-bounce ltr:right-5 rtl:left-5"
        onclick="scrollToTop()">
        <div
            class="group flex h-14 w-14 items-center justify-center rounded-full border border-black/20 bg-black text-white transition duration-500 hover:bg-secondaryColor dark:bg-primary dark:hover:bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6 transition group-hover:text-black">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </div>
    </button>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter Js -->
    <script src="{{ asset('assets/js/vanilla-counter.js') }}"></script>
    <!-- AOS Animation JS -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

    <script>
    // Testimonial Slider
    var swiper = new Swiper('.mySwiper', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 30,
        speed: 1000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.testimonial-swiper-button-next',
            prevEl: '.testimonial-swiper-button-prev',
        },
    });

    var logoSwiper = new Swiper('.logo-slider', {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 10,
                speed: 2500,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1.7,
                    },
                    600: {
                        slidesPerView: 3,
                    },
                    1000: {
                        slidesPerView: 4,
                    },
                    1600: {
                        slidesPerView: 6,
                    },
                },
            });
            
            // Project Slider
            var swiper = new Swiper('.project-slider', {
                loop: true,
                slidesPerView: 'auto',
                spaceBetween: 30,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.project-slider-button-next',
                    prevEl: '.project-slider-button-prev',
                },
                breakpoints: {
                    600: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1000: {
                        slidesPerView: 4,
                    },
                    1200: {
                        slidesPerView: 5,
                    },
                },
            });
              // Stories Slider

              var storySwiper = new Swiper('.Stories-slider', {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    prevEl: '.Stories-slider-button-prev',
                    nextEl: '.Stories-slider-button-next',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    600: {
                        slidesPerView: 2,
                    },
                    1000: {
                        slidesPerView: 3,
                    },
                },
            });
    // Counter Js
    VanillaCounter();

    //  Filter

    const filters = document.querySelectorAll('.filter');

    filters.forEach((filter) => {
        filter.addEventListener('click', function() {
            let selectedFilter = filter.getAttribute('data-filter');
            let itemsToHide = document.querySelectorAll(
                `.projects .project:not([data-filter='${selectedFilter}'])`);
            let itemsToShow = document.querySelectorAll(`.projects [data-filter='${selectedFilter}']`);

            if (selectedFilter == 'all') {
                itemsToHide = [];
                itemsToShow = document.querySelectorAll('.projects [data-filter]');
            }

            filterMenu = document.querySelectorAll('.filters li.filter');
            filterMenu.forEach((el) => {
                el.classList.remove('active');
            });
            filter.classList.add('active');

            itemsToHide.forEach((el) => {
                el.classList.add('hidden');
                el.classList.remove('block');
            });

            itemsToShow.forEach((el) => {
                el.classList.remove('hidden');
                el.classList.add('block');
            });
        });
    });
    </script>
</body>

</html>