@extends('front.layouts.app')
@section('main_content')

<section class="relative">
                    <div class="h-[450px] w-full md:h-[550px] lg:h-[728px]">
                        <img src="assets/images/image.jpg" class="h-full w-full object-cover" alt="" />
                    </div>
                    <div class="absolute inset-0 z-[1] bg-black/90"></div>
                    <div class="absolute inset-x-0 top-1/2 z-[1] -translate-y-1/2">
                        <div class="container">
                            <div class="text-center text-white md:max-w-[675px] ltr:md:text-left rtl:md:text-right">
                            @foreach($homes as $home)
                                <h2 class="text-3xl font-black sm:text-4xl md:text-6xl md:leading-[75px]">
                                    We Bring, Creativity to Digital Bring
                                </h2>
                                <p class="mt-5 text-base font-semibold sm:text-lg">
                                {{ $home->desc_section_1 }}
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

<section class="py-14 text-center lg:py ">
                    <div class="container">
                        <div class="heading mb-12 lg:mb-20">
                            <h6 class="!text-secondary">Our Business</h6>
                            <h4 class="">Meet With Us</h4>
                        </div>
                        <div class="grid gap-14 sm:grid-cols-3 lg:grid-cols-3">
                        @foreach($bussinesss as $bussiness)
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div class="mb-14">
                                    <img src="{{asset('storage/posts/'.$bussiness->logo)}}" alt="logo-company" class="mx-auto w-52 h-48 object-cover" />
                                </div>
                                <h4 class="text-[22px] h-10 font-extrabold text-black dark:text-white">{{ $bussiness->title}}</h4>
                                <p class="h-28 mt-7 mb-5 text-lg font-semibold line-clamp-4">
                                {{ $bussiness->desc}}
                                </p>
                                <a href="{{ $bussiness->link}}" class="text-lg font-extrabold text-secondary transition hover:text-primary">Get in Touch</a>
                            </div>
                            @endforeach
        
                        </div>
                    </div>
                </section>






               <section class="bg-gradient-to-t from-white/[56%] to-white/0 py-14 lg:py-[100px]">
    <div class="container">
        <div class="heading text-center text-primary">
        </div>
        <div class="grid gap-[30px] sm:grid-cols-2 lg:grid-cols-4">
            <div data-aos="fade-up" data-aos-duration="1000">
                <div
                    class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 ">
                    <div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="text-secondary transition">
                            <g clip-path="url(#clip0_6_2530)">
                                <path opacity="0.3"
                                    d="M9.26505 23.1907C8.867 22.5979 9.34238 21.8701 10.0565 21.8701H15.3123C16.0264 21.8701 16.5018 22.5979 16.1038 23.1907C15.3466 24.3185 14.3 25.2316 13.0656 25.8283C12.8248 25.9448 12.544 25.9448 12.3032 25.8283C11.0688 25.2316 10.0222 24.3185 9.26505 23.1907Z"
                                    fill="currentColor" />
                                <path
                                    d="M19.7602 15.3657C19.7602 15.6093 19.8491 15.8444 20.0102 16.0271L21.8688 18.1348C22.0299 18.3175 22.1188 18.5527 22.1188 18.7962V19.6908C22.1188 20.2431 21.6711 20.6908 21.1188 20.6908H4.25C3.69772 20.6908 3.25 20.2431 3.25 19.6908V18.7962C3.25 18.5527 3.33888 18.3175 3.49997 18.1348L5.35863 16.0271C5.51971 15.8444 5.6086 15.6093 5.6086 15.3657V8.89781C5.6086 4.89015 8.41975 1.46516 12.3859 0.0983C12.5792 0.0316815 12.7896 0.0316814 12.9829 0.0982998C16.949 1.46516 19.7602 4.89015 19.7602 8.89781V15.3657ZM12.6844 11.2564C13.3099 11.2564 13.9098 11.0079 14.3522 10.5656C14.7945 10.1233 15.043 9.52335 15.043 8.89781C15.043 8.27227 14.7945 7.67235 14.3522 7.23003C13.9098 6.78771 13.3099 6.53921 12.6844 6.53921C12.0589 6.53921 11.4589 6.78771 11.0166 7.23003C10.5743 7.67235 10.3258 8.27227 10.3258 8.89781C10.3258 9.52335 10.5743 10.1233 11.0166 10.5656C11.4589 11.0079 12.0589 11.2564 12.6844 11.2564Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6_2530">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="ltr:pl-4 rtl:pr-4">
                        @foreach($homes as $home)
                        <h4 class="pb-2.5 text-4xl font-black leading-none transition "
                            data-vanilla-counter data-start-at="0" data-end-at="{{ $home->count_bussines}}" data-time="4000" data-delay="0"
                            data-format="{}+"></h4>
                            @endforeach
                        <span class="font-bold text-black transition ">Year
                            in Business</span>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div
                    class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 ">
                    <div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="text-secondary transition">
                            <g clip-path="url(#clip0_6_2631)">
                                <path opacity="0.3"
                                    d="M4.2757 15.6078C4.27493 15.6078 4.27425 15.6084 4.27403 15.6091C4.06737 16.3065 3.94528 17.0263 3.9104 17.7528L3.9 18.2V25C3.9 25.5523 3.45228 26 2.9 26H1C0.447715 26 1.18712e-07 25.5523 1.18712e-07 25V20.15C-0.000255849 19.0289 0.413437 17.9471 1.16173 17.1122C1.91001 16.2773 2.94021 15.7481 4.0547 15.626L4.2757 15.6078ZM22.0225 17.0047C21.9324 16.3161 22.4694 15.6613 23.1157 15.9157C23.7351 16.1595 24.299 16.5384 24.7632 17.0317C25.5575 17.8757 25.9998 18.991 26 20.15V25.0001C26 25.5523 25.5523 26 25 26H23.1C22.5477 26 22.1 25.5523 22.1 25V18.2C22.1 17.7948 22.0737 17.3958 22.0225 17.0047ZM4.55 7.80005C5.41195 7.80005 6.2386 8.14246 6.8481 8.75195C7.45759 9.36145 7.8 10.1881 7.8 11.05C7.8 11.912 7.45759 12.7387 6.8481 13.3481C6.2386 13.9576 5.41195 14.3 4.55 14.3C3.68805 14.3 2.8614 13.9576 2.2519 13.3481C1.64241 12.7387 1.3 11.912 1.3 11.05C1.3 10.1881 1.64241 9.36145 2.2519 8.75195C2.8614 8.14246 3.68805 7.80005 4.55 7.80005ZM21.45 7.80005C22.312 7.80005 23.1386 8.14246 23.7481 8.75195C24.3576 9.36145 24.7 10.1881 24.7 11.05C24.7 11.912 24.3576 12.7387 23.7481 13.3481C23.1386 13.9576 22.312 14.3 21.45 14.3C20.588 14.3 19.7614 13.9576 19.1519 13.3481C18.5424 12.7387 18.2 11.912 18.2 11.05C18.2 10.1881 18.5424 9.36145 19.1519 8.75195C19.7614 8.14246 20.588 7.80005 21.45 7.80005Z"
                                    fill="currentColor" />
                                <path
                                    d="M13 11.7C14.7239 11.7 16.3772 12.3848 17.5962 13.6038C18.8152 14.8228 19.5 16.4761 19.5 18.2V25C19.5 25.5523 19.0523 26 18.5 26H7.5C6.94772 26 6.5 25.5523 6.5 25V18.2C6.5 16.4761 7.18482 14.8228 8.40381 13.6038C9.62279 12.3848 11.2761 11.7 13 11.7ZM13 0C14.3791 0 15.7018 0.547856 16.677 1.52304C17.6521 2.49823 18.2 3.82087 18.2 5.2C18.2 6.57913 17.6521 7.90177 16.677 8.87696C15.7018 9.85214 14.3791 10.4 13 10.4C11.6209 10.4 10.2982 9.85214 9.32304 8.87696C8.34786 7.90177 7.8 6.57913 7.8 5.2C7.8 3.82087 8.34786 2.49823 9.32304 1.52304C10.2982 0.547856 11.6209 0 13 0Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6_2631">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="ltr:pl-4 rtl:pr-4">
                    @foreach($homes as $home)
                        <h4 class="pb-2.5 text-4xl font-black leading-none transition "
                            data-vanilla-counter data-start-at="0" data-end-at="{{ $home->count_member}}" data-time="4000" data-delay="0"
                            data-format="{}+"></h4>
                            @endforeach
                        <span class="font-bold text-black transition ">Team
                            Members</span>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div
                    class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 ">
                    <div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="text-secondary transition">
                            <g clip-path="url(#clip0_6_2641)">
                                <path opacity="0.3"
                                    d="M13 26C5.8201 26 0 20.1799 0 13C0 5.8201 5.8201 0 13 0C20.1799 0 26 5.8201 26 13C26 20.1799 20.1799 26 13 26Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.49998 14.3C6.49998 16.024 7.18479 17.6773 8.40378 18.8962C9.62277 20.1152 11.2761 20.8 13 20.8C14.7239 20.8 16.3772 20.1152 17.5962 18.8962C18.8152 17.6773 19.5 16.024 19.5 14.3H16.9C16.9 15.3344 16.4891 16.3264 15.7577 17.0578C15.0263 17.7892 14.0343 18.2 13 18.2C11.9656 18.2 10.9736 17.7892 10.2423 17.0578C9.51087 16.3264 9.09998 15.3344 9.09998 14.3H6.49998ZM7.79998 11.7C8.31715 11.7 8.81314 11.4946 9.17883 11.1289C9.54453 10.7632 9.74998 10.2672 9.74998 9.75005C9.74998 9.23288 9.54453 8.73689 9.17883 8.37119C8.81314 8.00549 8.31715 7.80005 7.79998 7.80005C7.2828 7.80005 6.78681 8.00549 6.42112 8.37119C6.05542 8.73689 5.84998 9.23288 5.84998 9.75005C5.84998 10.2672 6.05542 10.7632 6.42112 11.1289C6.78681 11.4946 7.2828 11.7 7.79998 11.7ZM18.2 11.7C18.7171 11.7 19.2131 11.4946 19.5788 11.1289C19.9445 10.7632 20.15 10.2672 20.15 9.75005C20.15 9.23288 19.9445 8.73689 19.5788 8.37119C19.2131 8.00549 18.7171 7.80005 18.2 7.80005C17.6828 7.80005 17.1868 8.00549 16.8211 8.37119C16.4554 8.73689 16.25 9.23288 16.25 9.75005C16.25 10.2672 16.4554 10.7632 16.8211 11.1289C17.1868 11.4946 17.6828 11.7 18.2 11.7Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6_2641">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="ltr:pl-4 rtl:pr-4">
                    @foreach($homes as $home)
                        <h4 class="pb-2.5 text-4xl font-black leading-none transition "
                            data-vanilla-counter data-start-at="0" data-end-at="{{ $home->count_client}}" data-time="4000" data-delay="0"
                            data-format="{}+"></h4>
                            @endforeach
                        <span class="font-bold text-black transition ">Happy
                            Clients</span>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div
                    class="group flex cursor-pointer items-baseline rounded-3xl border border-white bg-white py-8 px-6 transition duration-500 hover:border-secondary hover:bg-secondary/10 ">
                    <div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="text-secondary transition">
                            <g clip-path="url(#clip0_6_2651)">
                                <path
                                    d="M1.31194 8.73474H24.6881C24.8695 8.73466 25.049 8.77223 25.2151 8.84507C25.3813 8.91791 25.5305 9.02444 25.6534 9.15792C25.7763 9.29141 25.8702 9.44894 25.929 9.62055C25.9879 9.79216 26.0105 9.97413 25.9955 10.1549L24.9018 23.2684C24.8745 23.5961 24.7251 23.9016 24.4832 24.1243C24.2413 24.347 23.9245 24.4708 23.5957 24.4709H2.40429C2.07547 24.4708 1.75871 24.347 1.5168 24.1243C1.27489 23.9016 1.12548 23.5961 1.09819 23.2684L0.00452488 10.1549C-0.010534 9.97413 0.0120899 9.79216 0.0709658 9.62055C0.129842 9.44894 0.223688 9.29141 0.346571 9.15792C0.469454 9.02444 0.618698 8.91791 0.784866 8.84507C0.951034 8.77223 1.13051 8.73466 1.31194 8.73474Z"
                                    fill="currentColor" />
                                <path opacity="0.3"
                                    d="M14.5614 3.1965C14.7489 3.38404 15.0033 3.4894 15.2685 3.4894H23.4908C23.8386 3.4894 24.1722 3.62756 24.4181 3.87348C24.664 4.11941 24.8022 4.45296 24.8022 4.80075V5.1121C24.8022 5.66438 24.3545 6.1121 23.8022 6.1121H2.19788C1.64559 6.1121 1.19788 5.66438 1.19788 5.1121V2.17805C1.19788 1.83026 1.33604 1.49671 1.58196 1.25078C1.82789 1.00486 2.16143 0.866699 2.50923 0.866699H11.8174C12.0826 0.866699 12.3369 0.972056 12.5245 1.15959L14.5614 3.1965Z"
                                    fill="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6_2651">
                                    <rect width="26" height="26" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="ltr:pl-4 rtl:pr-4">
                    @foreach($homes as $home)
                        <h4 class="pb-2.5 text-4xl font-black leading-none transition "
                            data-vanilla-counter data-start-at="0" data-end-at="{{ $home->count_project}}" data-time="4000" data-delay="0"
                            data-format="{}+"></h4>
                            @endforeach
                        <span class="font-bold text-black transition ">Project
                            Done</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
               </section>

              <section class="py-14 lg:py-[100px]">
                    <div class="container">
                        <div class="heading text-center">
                         
                            <h4>Featured Clients</h4>
                        </div>
                        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                        @foreach($clients->slice(0, 5) as $client)
                            <div class="group cursor-pointer text-center">
                                <div class="relative h-[200px] rounded-3xl transition-all duration-500 group-hover:shadow-[0_0_25px_#979797]">
                                    <img src="{{asset('storage/posts/'.$client->logo)}}" alt="client-logo" class="h-full w-full rounded-3xl object-cover object-center" />
                                </div>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>



                <section class="bg-gradient-to-t from-white/[55%] to-transparent py-32 lg:py-44">
                        <div class="container">
                            <div class="relative z-10 lg:flex">
                                <div class="heading text-center text-primary">
                                    <h4 class="sm:!leading-[50px]">Get in touch with us</h4>
                                    <ul class="mt-8 flex items-center justify-center gap-4 lg:justify-center" data-aos="fade-up" data-aos-duration="500">
                                        
                                        <li class="h-[45px] w-[45px] md:h-[60px] md:w-[60px]">
                                            @foreach($settings as $setting)
                                            <a href="{{ $setting->link_ig}}" class="group">
                                                @endforeach
                                                <svg width="100%" height="100%" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.3" class="transition duration-500 group-hover:opacity-100">
                                                        <mask
                                                            id="mask0_553_5772"
                                                            style="mask-type: alpha"
                                                            maskUnits="userSpaceOnUse"
                                                            x="0"
                                                            y="0"
                                                            width="66"
                                                            height="66"
                                                        >
                                                            <circle
                                                                cx="32.782"
                                                                cy="32.782"
                                                                r="31.5"
                                                                transform="rotate(-0.49927 32.782 32.782)"
                                                                stroke="#1778F2"
                                                                stroke-width="2"
                                                            />
                                                        </mask>
                                                        <g mask="url(#mask0_553_5772)">
                                                            <path
                                                                d="M11.4058 32.5C11.4058 20.8486 20.8486 11.4008 32.5 11.4008C44.1514 11.4008 53.5992 20.8486 53.5992 32.5C53.5992 44.1514 44.1514 53.5992 32.5 53.5992C20.8486 53.5992 11.4058 44.1514 11.4058 32.5ZM0 32.5C0 50.4498 14.5502 65 32.5 65C50.4498 65 65 50.4498 65 32.5C65 14.5502 50.4498 0 32.5 0C14.5502 0 0 14.5502 0 32.5Z"
                                                                fill="url(#paint0_radial_553_5772)"
                                                            />
                                                            <path
                                                                d="M11.4058 32.5C11.4058 20.8486 20.8486 11.4008 32.5 11.4008C44.1514 11.4008 53.5992 20.8486 53.5992 32.5C53.5992 44.1514 44.1514 53.5992 32.5 53.5992C20.8486 53.5992 11.4058 44.1514 11.4058 32.5ZM0 32.5C0 50.4498 14.5502 65 32.5 65C50.4498 65 65 50.4498 65 32.5C65 14.5502 50.4498 0 32.5 0C14.5502 0 0 14.5502 0 32.5Z"
                                                                fill="url(#paint1_radial_553_5772)"
                                                            />
                                                        </g>
                                                    </g>
                                                    <path
                                                        d="M28.3339 33C28.3339 30.975 29.975 29.333 31.9999 29.333C34.0249 29.333 35.6669 30.975 35.6669 33C35.6669 35.025 34.0249 36.667 31.9999 36.667C29.975 36.667 28.3339 35.025 28.3339 33ZM26.3516 33C26.3516 36.1196 28.8803 38.6484 31.9999 38.6484C35.1195 38.6484 37.6483 36.1196 37.6483 33C37.6483 29.8804 35.1195 27.3516 31.9999 27.3516C28.8803 27.3516 26.3516 29.8804 26.3516 33ZM36.5519 27.1277C36.5518 27.3887 36.6291 27.644 36.7741 27.8611C36.919 28.0782 37.1251 28.2475 37.3663 28.3475C37.6074 28.4475 37.8728 28.4738 38.1289 28.4229C38.385 28.3721 38.6202 28.2465 38.8049 28.062C38.9896 27.8774 39.1154 27.6423 39.1664 27.3862C39.2175 27.1302 39.1914 26.8648 39.0916 26.6235C38.9918 26.3823 38.8227 26.1761 38.6057 26.031C38.3887 25.8858 38.1335 25.8083 37.8724 25.8082H37.8719C37.522 25.8084 37.1864 25.9474 36.9389 26.1948C36.6914 26.4422 36.5522 26.7777 36.5519 27.1277M27.5559 41.9537C26.4835 41.9049 25.9006 41.7263 25.5132 41.5753C24.9996 41.3754 24.6332 41.1373 24.2479 40.7525C23.8627 40.3678 23.6242 40.0017 23.4251 39.4882C23.2741 39.101 23.0955 38.5179 23.0467 37.4454C22.9934 36.2859 22.9828 35.9376 22.9828 33.0001C22.9828 30.0626 22.9943 29.7152 23.0467 28.5548C23.0956 27.4823 23.2755 26.9004 23.4251 26.512C23.6251 25.9985 23.8632 25.632 24.2479 25.2468C24.6327 24.8615 24.9987 24.623 25.5132 24.424C25.9004 24.273 26.4835 24.0943 27.5559 24.0456C28.7154 23.9922 29.0637 23.9816 31.9999 23.9816C34.9361 23.9816 35.2848 23.9931 36.4453 24.0456C37.5177 24.0944 38.0997 24.2744 38.488 24.424C39.0016 24.623 39.368 24.862 39.7533 25.2468C40.1385 25.6315 40.3761 25.9985 40.5761 26.512C40.7271 26.8992 40.9057 27.4823 40.9545 28.5548C41.0078 29.7152 41.0184 30.0626 41.0184 33.0001C41.0184 35.9376 41.0078 36.285 40.9545 37.4454C40.9056 38.5179 40.7261 39.1008 40.5761 39.4882C40.3761 40.0017 40.138 40.3682 39.7533 40.7525C39.3685 41.1369 39.0016 41.3754 38.488 41.5753C38.1008 41.7263 37.5177 41.905 36.4453 41.9537C35.2858 42.0071 34.9375 42.0177 31.9999 42.0177C29.0624 42.0177 28.7151 42.0071 27.5559 41.9537M27.4649 22.0666C26.2938 22.1199 25.4937 22.3056 24.7949 22.5775C24.0711 22.8584 23.4585 23.2351 22.8463 23.8463C22.2341 24.4576 21.8583 25.0712 21.5775 25.7949C21.3056 26.4942 21.1199 27.2939 21.0666 28.4649C21.0123 29.6378 20.9999 30.0128 20.9999 33C20.9999 35.9872 21.0123 36.3622 21.0666 37.5351C21.1199 38.7062 21.3056 39.5058 21.5775 40.2051C21.8583 40.9284 22.2341 41.5427 22.8463 42.1537C23.4584 42.7647 24.0711 43.1409 24.7949 43.4225C25.495 43.6944 26.2938 43.8801 27.4649 43.9334C28.6383 43.9867 29.0127 44 31.9999 44C34.9872 44 35.3622 43.9876 36.535 43.9334C37.7061 43.8801 38.5058 43.6944 39.205 43.4225C39.9283 43.1409 40.5414 42.7649 41.1536 42.1537C41.7658 41.5424 42.1408 40.9284 42.4224 40.2051C42.6943 39.5058 42.8809 38.7061 42.9333 37.5351C42.9867 36.3613 42.9991 35.9872 42.9991 33C42.9991 30.0128 42.9867 29.6378 42.9333 28.4649C42.88 27.2938 42.6943 26.4937 42.4224 25.7949C42.1408 25.0716 41.7649 24.4585 41.1536 23.8463C40.5424 23.2341 39.9283 22.8584 39.2059 22.5775C38.5058 22.3056 37.706 22.1191 36.5359 22.0666C35.363 22.0133 34.9881 22 32.0008 22C29.0136 22 28.6383 22.0124 27.4649 22.0666Z"
                                                        fill="url(#paint2_radial_553_5772)"
                                                    />
                                                    <path
                                                        d="M28.3339 33C28.3339 30.975 29.975 29.333 31.9999 29.333C34.0249 29.333 35.6669 30.975 35.6669 33C35.6669 35.025 34.0249 36.667 31.9999 36.667C29.975 36.667 28.3339 35.025 28.3339 33ZM26.3516 33C26.3516 36.1196 28.8803 38.6484 31.9999 38.6484C35.1195 38.6484 37.6483 36.1196 37.6483 33C37.6483 29.8804 35.1195 27.3516 31.9999 27.3516C28.8803 27.3516 26.3516 29.8804 26.3516 33ZM36.5519 27.1277C36.5518 27.3887 36.6291 27.644 36.7741 27.8611C36.919 28.0782 37.1251 28.2475 37.3663 28.3475C37.6074 28.4475 37.8728 28.4738 38.1289 28.4229C38.385 28.3721 38.6202 28.2465 38.8049 28.062C38.9896 27.8774 39.1154 27.6423 39.1664 27.3862C39.2175 27.1302 39.1914 26.8648 39.0916 26.6235C38.9918 26.3823 38.8227 26.1761 38.6057 26.031C38.3887 25.8858 38.1335 25.8083 37.8724 25.8082H37.8719C37.522 25.8084 37.1864 25.9474 36.9389 26.1948C36.6914 26.4422 36.5522 26.7777 36.5519 27.1277M27.5559 41.9537C26.4835 41.9049 25.9006 41.7263 25.5132 41.5753C24.9996 41.3754 24.6332 41.1373 24.2479 40.7525C23.8627 40.3678 23.6242 40.0017 23.4251 39.4882C23.2741 39.101 23.0955 38.5179 23.0467 37.4454C22.9934 36.2859 22.9828 35.9376 22.9828 33.0001C22.9828 30.0626 22.9943 29.7152 23.0467 28.5548C23.0956 27.4823 23.2755 26.9004 23.4251 26.512C23.6251 25.9985 23.8632 25.632 24.2479 25.2468C24.6327 24.8615 24.9987 24.623 25.5132 24.424C25.9004 24.273 26.4835 24.0943 27.5559 24.0456C28.7154 23.9922 29.0637 23.9816 31.9999 23.9816C34.9361 23.9816 35.2848 23.9931 36.4453 24.0456C37.5177 24.0944 38.0997 24.2744 38.488 24.424C39.0016 24.623 39.368 24.862 39.7533 25.2468C40.1385 25.6315 40.3761 25.9985 40.5761 26.512C40.7271 26.8992 40.9057 27.4823 40.9545 28.5548C41.0078 29.7152 41.0184 30.0626 41.0184 33.0001C41.0184 35.9376 41.0078 36.285 40.9545 37.4454C40.9056 38.5179 40.7261 39.1008 40.5761 39.4882C40.3761 40.0017 40.138 40.3682 39.7533 40.7525C39.3685 41.1369 39.0016 41.3754 38.488 41.5753C38.1008 41.7263 37.5177 41.905 36.4453 41.9537C35.2858 42.0071 34.9375 42.0177 31.9999 42.0177C29.0624 42.0177 28.7151 42.0071 27.5559 41.9537M27.4649 22.0666C26.2938 22.1199 25.4937 22.3056 24.7949 22.5775C24.0711 22.8584 23.4585 23.2351 22.8463 23.8463C22.2341 24.4576 21.8583 25.0712 21.5775 25.7949C21.3056 26.4942 21.1199 27.2939 21.0666 28.4649C21.0123 29.6378 20.9999 30.0128 20.9999 33C20.9999 35.9872 21.0123 36.3622 21.0666 37.5351C21.1199 38.7062 21.3056 39.5058 21.5775 40.2051C21.8583 40.9284 22.2341 41.5427 22.8463 42.1537C23.4584 42.7647 24.0711 43.1409 24.7949 43.4225C25.495 43.6944 26.2938 43.8801 27.4649 43.9334C28.6383 43.9867 29.0127 44 31.9999 44C34.9872 44 35.3622 43.9876 36.535 43.9334C37.7061 43.8801 38.5058 43.6944 39.205 43.4225C39.9283 43.1409 40.5414 42.7649 41.1536 42.1537C41.7658 41.5424 42.1408 40.9284 42.4224 40.2051C42.6943 39.5058 42.8809 38.7061 42.9333 37.5351C42.9867 36.3613 42.9991 35.9872 42.9991 33C42.9991 30.0128 42.9867 29.6378 42.9333 28.4649C42.88 27.2938 42.6943 26.4937 42.4224 25.7949C42.1408 25.0716 41.7649 24.4585 41.1536 23.8463C40.5424 23.2341 39.9283 22.8584 39.2059 22.5775C38.5058 22.3056 37.706 22.1191 36.5359 22.0666C35.363 22.0133 34.9881 22 32.0008 22C29.0136 22 28.6383 22.0124 27.4649 22.0666Z"
                                                        fill="url(#paint3_radial_553_5772)"
                                                    />
                                                    <defs>
                                                        <radialGradient
                                                            id="paint0_radial_553_5772"
                                                            cx="0"
                                                            cy="0"
                                                            r="1"
                                                            gradientUnits="userSpaceOnUse"
                                                            gradientTransform="translate(-13.975 96.391) scale(165.246 165.246)"
                                                        >
                                                            <stop offset="0.09" stop-color="#FA8F21" />
                                                            <stop offset="0.78" stop-color="#D82D7E" />
                                                        </radialGradient>
                                                        <radialGradient
                                                            id="paint1_radial_553_5772"
                                                            cx="0"
                                                            cy="0"
                                                            r="1"
                                                            gradientUnits="userSpaceOnUse"
                                                            gradientTransform="translate(45.9758 102.062) scale(130.237)"
                                                        >
                                                            <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                                                            <stop offset="1" stop-color="#8C3AAA" />
                                                        </radialGradient>
                                                        <radialGradient
                                                            id="paint2_radial_553_5772"
                                                            cx="0"
                                                            cy="0"
                                                            r="1"
                                                            gradientUnits="userSpaceOnUse"
                                                            gradientTransform="translate(23.9228 44.1039) scale(28.7192 28.7192)"
                                                        >
                                                            <stop offset="0.09" stop-color="#FA8F21" />
                                                            <stop offset="0.78" stop-color="#D82D7E" />
                                                        </radialGradient>
                                                        <radialGradient
                                                            id="paint3_radial_553_5772"
                                                            cx="0"
                                                            cy="0"
                                                            r="1"
                                                            gradientUnits="userSpaceOnUse"
                                                            gradientTransform="translate(34.342 45.0895) scale(22.6347)"
                                                        >
                                                            <stop offset="0.64" stop-color="#8C3AAA" stop-opacity="0" />
                                                            <stop offset="1" stop-color="#8C3AAA" />
                                                        </radialGradient>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="h-[45px] w-[45px] md:h-[60px] md:w-[60px]">
                                        @foreach($settings as $setting)
                                            <a href="{{ $setting->link_twitter}}" class="group">
                                                @endforeach
                                                <svg width="100%" height="100%" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.3" class="transition duration-500 group-hover:opacity-100">
                                                        <circle
                                                            cx="33.3459"
                                                            cy="32.782"
                                                            r="31.5"
                                                            transform="rotate(-0.49927 33.3459 32.782)"
                                                            stroke="#1DA1F2"
                                                            stroke-width="2"
                                                        />
                                                    </g>
                                                    <path
                                                        d="M44.564 26.1161C43.7458 26.475 42.8741 26.7129 41.9652 26.8284C42.9002 26.2701 43.6138 25.3929 43.9493 24.3355C43.0776 24.8553 42.1151 25.2224 41.0893 25.4273C40.2616 24.5459 39.0818 24 37.7948 24C35.2978 24 33.2876 26.0267 33.2876 28.5114C33.2876 28.8689 33.3178 29.2126 33.3921 29.5399C29.6425 29.357 26.3246 27.5599 24.0957 24.8223C23.7066 25.4974 23.4783 26.2701 23.4783 27.102C23.4783 28.664 24.2827 30.0486 25.4817 30.8502C24.7571 30.8365 24.0462 30.6261 23.444 30.2948C23.444 30.3085 23.444 30.3264 23.444 30.3443C23.444 32.536 25.0073 34.3565 27.0575 34.7759C26.6903 34.8763 26.2902 34.9244 25.875 34.9244C25.5862 34.9244 25.2947 34.9079 25.0211 34.8474C25.6055 36.6335 27.2637 37.9466 29.2355 37.9893C27.701 39.1896 25.7526 39.9129 23.6433 39.9129C23.2735 39.9129 22.9187 39.8964 22.564 39.851C24.5618 41.1394 26.9296 41.875 29.483 41.875C37.7825 41.875 42.32 35 42.32 29.0408C42.32 28.8414 42.3131 28.6489 42.3035 28.4577C43.1986 27.8225 43.9507 27.0291 44.564 26.1161Z"
                                                        fill="#1DA1F2"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="h-[45px] w-[45px] md:h-[60px] md:w-[60px]">
                                        @foreach($settings as $setting)
                                            <a href="{{ $setting->link_fb}}" class="group">
                                                @endforeach
                                                <svg width="100%" height="100%" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.3" class="transition duration-500 group-hover:opacity-100">
                                                        <circle
                                                            cx="32.782"
                                                            cy="32.782"
                                                            r="31.5"
                                                            transform="rotate(-0.49927 32.782 32.782)"
                                                            stroke="#1778F2"
                                                            stroke-width="2"
                                                        />
                                                    </g>
                                                    <path
                                                        d="M35.801 26.0714H37.5971V22.9432C37.2872 22.9006 36.2216 22.8047 34.9804 22.8047C32.3908 22.8047 30.6168 24.4336 30.6168 27.4273V30.1825H27.7592V33.6796H30.6168V42.479H34.1205V33.6805H36.8626L37.2979 30.1834H34.1197V27.7741C34.1205 26.7633 34.3927 26.0714 35.801 26.0714V26.0714Z"
                                                        fill="#1778F2"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        
                                        


                                    </ul>
                                </div>
                                <form action="" class="rounded-3xl bg-white px-4 py-12 dark:bg-gray-dark lg:w-2/3 lg:px-8">
                                    <div class="grid gap-10 sm:grid-cols-2">
                                        <div class="relative">
                                            <input
                                                type="text"
                                                name="name"
                                                class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                            />
                                            <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-gray-dark dark:text-white"
                                                >Full Name</label
                                            >
                                            <svg
                                                width="20"
                                                height="22"
                                                viewBox="0 0 20 22"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                            >
                                                <path
                                                    d="M5.42855 5.57875C5.42855 8.10348 7.47525 10.1502 9.99998 10.1502C12.5247 10.1502 14.5714 8.10348 14.5714 5.57875C14.5714 3.05402 12.5247 1.00732 9.99998 1.00732"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                    stroke-linecap="round"
                                                />
                                                <path
                                                    d="M2 16.9328C2 15.9495 2.61812 15.0724 3.5441 14.7417V14.7417C7.71891 13.2507 12.2811 13.2507 16.4559 14.7417V14.7417C17.3819 15.0724 18 15.9495 18 16.9328V18.7014C18 19.9185 16.922 20.8535 15.7172 20.6813L13.8184 20.4101C11.2856 20.0483 8.71435 20.0483 6.18162 20.4101L4.28284 20.6813C3.07798 20.8535 2 19.9185 2 18.7014V16.9328Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                />
                                            </svg>
                                        </div>
                                        <div class="relative">
                                            <input
                                                type="email"
                                                name="email"
                                                class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                            />
                                            <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-gray-dark dark:text-white"
                                                >Email Address</label
                                            >
                                            <svg
                                                width="22"
                                                height="21"
                                                viewBox="0 0 22 21"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                            >
                                                <path
                                                    d="M1 8.00732V7.00732C1 4.2459 3.23858 2.00732 6 2.00732H16C18.7614 2.00732 21 4.2459 21 7.00732V13.0073C21 15.7687 18.7614 18.0073 16 18.0073H6C3.23858 18.0073 1 15.7687 1 13.0073V12.0073"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                    stroke-linecap="round"
                                                />
                                                <path
                                                    d="M5 7.00732L9.8 10.6073C10.5111 11.1407 11.4889 11.1407 12.2 10.6073L17 7.00732"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </div>
                                        <div class="relative">
                                            <input
                                                type="text"
                                                name="mobile"
                                                class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                            />
                                            <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-gray-dark dark:text-white"
                                                >Mobile Number</label
                                            >
                                            <svg
                                                width="22"
                                                height="22"
                                                viewBox="0 0 22 22"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                            >
                                                <path
                                                    d="M6.45241 1.40806C5.45292 0.783702 4.14202 0.887138 3.2983 1.73086L1.86856 3.1606C-0.302899 5.33207 1.73747 10.8931 6.42586 15.5815C11.1142 20.2699 16.6753 22.3102 18.8467 20.1388L20.2765 18.709C21.2635 17.722 21.2374 16.0956 20.2182 15.0764L18.0036 12.8619C16.9844 11.8426 15.358 11.8165 14.371 12.8036L14.0639 13.1107C13.531 13.6436 12.6713 13.6957 12.0713 13.2005C11.4925 12.7229 10.9159 12.208 10.3576 11.6497C9.79933 11.0914 9.28441 10.5149 8.80678 9.93607C8.31161 9.33601 8.36374 8.47631 8.89666 7.9434L9.20375 7.63631C9.98187 6.85819 10.1303 5.68271 9.65898 4.72062"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                        </div>
                                        <div class="relative">
                                            <input
                                                type="text"
                                                name="city"
                                                class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                            />
                                            <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-gray-dark dark:text-white"
                                                >City</label
                                            >
                                            <svg
                                                width="20"
                                                height="22"
                                                viewBox="0 0 20 22"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                            >
                                                <path
                                                    d="M5.89416 2.31259C7.20149 1.48625 8.75475 1.00732 10.4211 1.00732C15.0719 1.00732 18.8421 4.73828 18.8421 9.34066C18.8421 15.0541 12.1053 21.0073 10.4211 21.0073C8.73684 21.0073 2 15.0541 2 9.34066C2 7.87581 2.38193 6.49924 3.05263 5.30315"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                    stroke-linecap="round"
                                                />
                                                <path
                                                    d="M13.4571 9.77392C13.5365 9.49702 13.579 9.20456 13.579 8.90216C13.579 7.15811 12.1651 5.74427 10.4211 5.74427C8.67702 5.74427 7.26318 7.15811 7.26318 8.90216C7.26318 10.6462 8.67702 12.0601 10.4211 12.0601C10.6633 12.0601 10.8991 12.0328 11.1256 11.9812"
                                                    stroke="currentColor"
                                                    stroke-width="1.8"
                                                    stroke-linecap="round"
                                                />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="relative mt-10">
                                        <input
                                            type="text"
                                            name="message"
                                            class="w-full rounded-2xl border-2 border-gray/20 bg-transparent p-4 font-bold outline-none transition focus:border-secondary ltr:pr-12 rtl:pl-12"
                                        />
                                        <label for="" class="absolute -top-3 bg-white px-2 font-bold ltr:left-6 rtl:right-6 dark:bg-gray-dark dark:text-white"
                                            >Message</label
                                        >
                                        <svg
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="absolute top-1/2 -translate-y-1/2 ltr:right-4 rtl:left-4 dark:text-white"
                                        >
                                            <path
                                                d="M1 11.467V18.9267C1 19.7652 1.96993 20.2314 2.6247 19.7076L5.45217 17.4456C5.8068 17.1619 6.24742 17.0073 6.70156 17.0073H16C18.7614 17.0073 21 14.7687 21 12.0073V6.00732C21 3.2459 18.7614 1.00732 16 1.00732H6C3.23858 1.00732 1 3.2459 1 6.00732V7.62225"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />
                                            <circle cx="6.05005" cy="9.05713" r="1.25" fill="currentColor" />
                                            <circle cx="11.05" cy="9.05713" r="1.25" fill="currentColor" />
                                            <circle cx="16.05" cy="9.05713" r="1.25" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="mt-10 text-center ltr:lg:text-right rtl:lg:text-left">
                                        <button type="button" class="btn bg-gray px-12 capitalize text-white dark:bg-white dark:text-black dark:hover:bg-secondary">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>






@endsection




<!-- 
<section
    class="bg-black bg-[url(../assets/images/blog/recent3.jpg)] bg-cover bg-center bg-no-repeat pb-12 pt-20 text-white sm:pt-[200px] lg:pb-80">
    <div class="container">
        <div class="relative z-[1]">
            <h2
                class="text-[64px] font-extrabold leading-[60px] ltr:text-right rtl:text-left sm:text-8xl lg:text-[180px] lg:leading-[225px]">
                To Finding
            </h2>
            <h2
                class="text-[64px] font-extrabold leading-[60px] text-primary sm:text-8xl lg:text-[180px] lg:leading-[225px]">
                Solutions</h2>
            <div class="flex flex-col justify-between md:flex-row">
                <div class="order-2 mt-5 md:order-1 md:mt-0">
                    @foreach($homes as $home)
                    <p class="text-center text-lg font-normal sm:text-left">
                     {{ $home->desc_section_1 }}
                    </p>
                    @endforeach
                    <div class="text-center md:text-left">
                        <a href="{{url('/contact')}}"
                            class="btn mt-6 bg-secondary text-white shadow-[10px_15px_30px_rgba(119,128,161,0.2)] hover:bg-primary">Contact
                            us</a>
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <h2
                        class="text-[64px] font-extrabold leading-[60px] ltr:text-right rtl:text-left sm:text-8xl lg:text-[180px] lg:leading-[225px]">
                        Modern
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section> -->