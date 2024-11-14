@extends('front.layouts.app')
@section('main_content')

<section class="bg-gradient-to-t from-white/[54%] to-transparent py-40 lg:py-52">
                    <div class="container">
                        <div class="grid items-center gap-8 md:grid-cols-3 lg:grid-cols-2 xl:items-start">
                            <div class="order-2 md:order-1 md:col-span-2 lg:col-auto">
                                <div class="heading mb-5 text-center ltr:md:text-left rtl:md:text-right">
                                    <h6 class="!text-secondary">Careers</h6>
                                    @foreach($career_pages as $career_page)
                                    <h4>{{ $career_page->title}}</h4>
                                    @endforeach
                                </div>
                                <div class="text-center font-semibold ltr:md:text-left rtl:md:text-right">
                                @foreach($career_pages as $career_page)
                                    <p class="pb-5">{{ $career_page->desc}}</p>
                                    @endforeach
                                    <a href="#open-position" class="btn mt-10 capitalize bg-secondary hover:bg-primary text-white">Open Positions</a>
                                </div>
                            </div>
                            @foreach($career_pages as $career_page)
                            <img
                                src="{{asset('storage/posts/'.$career_page->image)}}"
                                alt="creative-agency"
                                class="order-1 mx-auto rounded-[32px] md:order-2 md:mx-0"
                                data-aos="fade-left"
                                data-aos-duration="1000"
                            />
                            @endforeach
                        </div>
                    </div>
                </section>


                <section class="bg-gradient-to-t from-white/[54%] to-transparent py-14 dark:bg-none lg:py-[100px]">
                    <div class="container">
                        <div class="heading text-center">
                            <h6 class="!text-secondary">Our Culture</h6>
                            <h4>Be Great. Do Good. Have Fun.</h4>
                        </div>
                        <div class="grid gap-4 md:gap-6">
                            <div class="flex flex-col gap-4 sm:flex-row md:gap-6">
                                <div
                                    class="mx-auto w-full cursor-pointer overflow-hidden rounded-[32px] sm:w-[43%]"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-fancybox="gallery"
                                    data-src="assets/images/gallery-1.png"
                                >
                                    <img
                                        src="assets/images/gallery-1.png"
                                        alt="gallery-1"
                                        class="h-full w-full rounded-[32px] object-cover transition duration-500 hover:rotate-12 hover:scale-125"
                                    />
                                </div>
                               
                                <div
                                    class="mx-auto w-full cursor-pointer overflow-hidden rounded-[32px] sm:w-[35%]"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-fancybox="gallery"
                                    data-src="assets/images/gallery-.png"
                                >
                                    <img
                                        src="assets/images/gallery-2.png"
                                        alt="gallery-2"
                                        class="h-full w-full rounded-[32px] object-cover transition duration-500 hover:rotate-12 hover:scale-125"
                                    />
                           
                                </div>
                                <div
                                    class="mx-auto w-full cursor-pointer overflow-hidden rounded-[32px] sm:w-[22%]"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-fancybox="gallery"
                                    data-src="assets/images/gallery-3.png"
                                >
                                    <img
                                        src="assets/images/gallery-3.png"
                                        alt="gallery-3"
                                        class="h-full w-full rounded-[32px] object-cover transition duration-500 hover:rotate-12 hover:scale-125"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col gap-4 sm:flex-row md:gap-6">
                                <div
                                    class="mx-auto w-full cursor-pointer overflow-hidden rounded-[32px] sm:w-3/5"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-fancybox="gallery"
                                    data-src="assets/images/gallery-4.png"
                                >
                                    <img
                                        src="assets/images/gallery-4.png"
                                        alt="gallery-4"
                                        class="h-full w-full rounded-[32px] object-cover transition duration-500 hover:rotate-12 hover:scale-125"
                                    />
                                </div>
                                <div
                                    class="mx-auto w-full cursor-pointer overflow-hidden rounded-[32px] sm:w-2/5"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                    data-fancybox="gallery"
                                    data-src="assets/images/gallery-5.png"
                                >
                                    <img
                                        src="assets/images/gallery-5.png"
                                        alt="gallery-5"
                                        class="h-full w-full rounded-[32px] object-cover transition duration-500 hover:rotate-12 hover:scale-125"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-gradient-to-t from-white/[54%] to-transparent py-14 dark:bg-none lg:py-[100px]">
                    <div class="container">
                        <div class="heading text-center">
                            <h6 class="!text-secondary">Our Amazing Perks</h6>
                            <h4>Great benefits of working at Hallo! Mepy</h4>
                        </div>
                        <div class="grid gap-[30px] sm:grid-cols-2 lg:grid-cols-3">
                            @foreach($benefits as $benefit)
                            <div data-aos="fade-up" data-aos-duration="1000">
                                <div
                                    class="flex items-center justify-start gap-3 rounded-[32px] border-2 border-white bg-white p-6 drop-shadow-[5px_10px_60px_rgba(119,128,161,0.08)] transition hover:border-secondary hover:bg-secondary/10 dark:border-gray-dark dark:bg-gray-dark dark:hover:border-secondary sm:justify-center md:p-10"
                                >
                                    <div>
                                       <img src="{{asset('storage/posts/'.$benefit->icon)}}" alt="icon" width="50" height="50">
                                    </div>
                                    <h6 class="text-xl font-bold text-black dark:text-white">{{$benefit->name}}</h6>
                                </div>
                            </div> 
                            @endforeach   
                        </div>
                    </div>
                </section>
                <section class="py-14 lg:py-[100px]" id="open-position">
                    <div class="container">
                        <div class="heading text-center">
                            <h6 class="!text-secondary">Open Positions</h6>
                            <h4>Wake Up To A Better Future</h4>
                        </div>
                        <div class="pb-[50px]">
                            <ul
                                class="filters portfolio-filter flex items-center gap-4 overflow-x-auto whitespace-nowrap pb-2.5 font-bold dark:text-white md:justify-between"
                            >
                                <li class="active filter" data-filter="all">
                                    <button type="button" class="rounded-[10px] bg-gray/5 py-4 px-5 leading-5 transition hover:bg-secondary hover:text-white">
                                        All Positions
                                    </button>
                                </li>
                                @foreach($categories as $category)
                                <li class="filter" data-filter="{{$category->id}}">
                                    <button type="button" class="rounded-[10px] bg-gray/5 py-4 px-5 leading-5 transition hover:bg-secondary hover:text-white">
                                        {{$category->name}}
                                    </button>
                               </li>
                                    @endforeach
                            </ul>
                        </div>

                        <div class="projects grid gap-[30px] md:grid-cols-2">
                            @foreach($careers as $career)
                            <div class="project" data-filter="{{$career->id_category}}">
                                <div
                                    class="group rounded-[32px] border-2 border-white bg-white px-4 py-6 transition hover:border-secondary hover:bg-secondary/10 dark:border-gray-dark dark:bg-gray-dark dark:hover:border-secondary dark:hover:bg-secondary sm:p-[30px]"
                                >
                                    <h6 class="mb-5 text-base font-black uppercase text-secondary dark:group-hover:text-black">{{$career->name}}</h6>
                                    <h4 class="mb-10 text-xl font-extrabold text-black dark:text-white sm:text-2xl"> {{$career->position}}</h4>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        fill-rule="evenodd"
                                                        clip-rule="evenodd"
                                                        d="M0 8.45529C0 3.77836 3.8292 0 8.53659 0C13.244 0 17.0732 3.77836 17.0732 8.45529C17.0732 11.3641 15.3769 14.235 13.5791 16.3248C12.6693 17.3823 11.7037 18.2751 10.852 18.9101C10.4268 19.227 10.0181 19.4886 9.64923 19.6744C9.30343 19.8485 8.90853 20 8.53659 20C8.16464 20 7.76974 19.8485 7.42394 19.6744C7.05506 19.4886 6.6464 19.227 6.22121 18.9101C5.36948 18.2751 4.40386 17.3823 3.49409 16.3248C1.69631 14.235 0 11.3641 0 8.45529ZM8.53661 10.9748C6.92017 10.9748 5.60978 9.66437 5.60978 8.04792C5.60978 6.43148 6.92017 5.12109 8.53661 5.12109C10.1531 5.12109 11.4634 6.43148 11.4634 8.04792C11.4634 9.66437 10.1531 10.9748 8.53661 10.9748Z"
                                                        fill="#FFBD11"
                                                    />
                                                </svg>
                                            </div>
                                            <div class="font-bold text-black dark:text-white sm:text-lg">
                                            {{$career->location}}
                                                <span class="text-primary">{{$career->desc}}</span>
                                            </div>
                                        </div>
                                        <a
                                            href="javascript:"
                                            class="flex h-[45px] w-[45px] items-center justify-center rounded-full bg-[#F3F4F6] text-black transition hover:bg-secondary hover:text-white rtl:rotate-180 dark:bg-black dark:text-white"
                                        >
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.41083 14.4102L10.5892 15.5885L16.1783 9.99932L10.5892 4.41016L9.41083 5.58849L12.9883 9.16599H5V10.8327H12.9883L9.41083 14.4102Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                           
                            @endforeach
                        </div>
                    </div>
                </section>

@endsection