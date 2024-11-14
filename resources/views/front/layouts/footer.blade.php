<footer class="mt-auto bg-white dark:bg-transparent dark:bg-gradient-to-b dark:from-white/[0.03] dark:to-transparent">
            <div class="container">
                <div class="grid gap-y-10 gap-x-4 py-14 sm:grid-cols-3 lg:grid-cols-5 lg:py-[100px]">
                    <div class="relative">
                        <img src="assets/images/HALLO MEPY.png" alt="plurk" class="h-28" />
                        
                        <img src="assets/images/footer-shape.png" alt="footer-shape" class="absolute bottom-0 right-0 sm:left-0" />
                        <img
                            src="assets/images/footer-shape-dark.png"
                            alt="footer-shape-dark"
                            class="absolute bottom-0 right-0 hidden dark:block sm:left-0"
                        />
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Quick Menu</li>
                            <li><a href="{{url('/')}}" class="inline-block transition hover:scale-110 hover:text-secondary">Homepage</a></li>
                            <li><a href="{{url('/client')}}" class="inline-block transition hover:scale-110 hover:text-secondary">Clients</a></li>
                            <li><a href="{{url('/contact')}}" class="inline-block transition hover:scale-110 hover:text-secondary">Contact</a></li>
                            
                        </ul>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Contact Info</li>
                            <li>
                                <a href="#" class="inline-block transition hover:scale-110 hover:text-secondary">Phone Number</a>
                            </li>
                            @foreach($settings as $setting)
                            <li>
                                <a href="tel:{{ $setting->no_wa}}" class="inline-block transition hover:scale-110 hover:text-secondary">{{ $setting->no_wa}}</a>
                            </li>
                            @endforeach
                            @foreach($settings as $setting)
                            <li>
                                <a href="marketing@hallomepy.id" 
                                class="inline-block transition hover:scale-110 hover:text-secondary">{{ $setting->email}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-3 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Address</li>
                            @foreach($settings as $setting)
                            <li
                                class="inline-block">{{ $setting->address}}
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <div>
                        <ul class="flex flex-col gap-4 font-bold">
                            <li class="mb-3 text-lg font-extrabold text-black dark:text-white">Business Hours</li>
                            @foreach($settings as $setting)
                            <li class="w-[150px]">{{ $setting->working_hours}}</li>                           
                            @endforeach
                            
                        </ul>
                    </div>
                    
                </div>
                
                    
                
            </div>

            <div class="bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] py-5 dark:border-t-2 dark:border-white/5 dark:bg-none">
                <div class="container">
                    <div class="flex flex-col items-center justify-between text-center font-bold dark:text-white md:flex-row">
                        <div>
                        Created by
                            <a href="{{url('https://hepytech.com/')}}" class="text-primary transition hover:text-secondary">@Hepytech</a>
                        </div>
                        <div>Need help? Visit the <a href="{{url('/contact')}}" class="text-secondary transition hover:text-primary">Contact Us</a></div>
                    </div>
                </div>
            </div>
        </footer>