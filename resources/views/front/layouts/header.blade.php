<header id="top-header" class="sticky top-0 z-50 bg-black transition duration-300">
            <div class="container">
                <div class="relative flex items-center justify-between pb-5 lg:py-0">
                @foreach($settings as $setting)
                    <a href="/"><img src="{{asset('storage/posts/'.$setting->logo)}}" alt="logo" class="h-20" /></a>
                    @endforeach

                    <div class="flex items-center">
                        <div onclick="toggleMenu()" class="overlay fixed inset-0 z-[51] hidden bg-black/60 lg:hidden"></div>
                        <div class="menus">
                            <div class="border-b border-gray/10 ltr:text-right rtl:text-left lg:hidden">
                                <button onclick="toggleMenu()" type="button" class="p-4">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-6 w-6 text-black dark:text-white"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <ul>
                            <li class="{{ request()->is('/') ? 'text-secondary' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="{{ request()->is('client') ? 'text-secondary' : '' }}">
                            <a href="{{ url('/client') }}">Clients</a>
                            </li>
                            <li class="{{ request()->is('contact') ? 'text-secondary' : '' }}">
                            <a href="{{ url('/contact') }}">Contact</a>
                            </li>
                            <li class="{{ request()->is('career') ? 'text-secondary' : '' }}">
                            <a href="{{ url('/career') }}">Career</a>
                            </li>
                            </ul>

                        </div>
                        
                        <button type="button" class="flex h-10 w-10 items-center justify-center rounded-full bg-primary lg:hidden" onclick="toggleMenu()">
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                                <path
                                    d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                                    fill="currentColor"
                                />
                                <path
                                    d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                                    fill="currentColor"
                                />
                                <path
                                    d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>







        