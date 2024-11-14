@extends('front.layouts.app')
@section('main_content')


                

                <section class="py-14 lg:py-[100px] mt-24 lg:mt-32">
                    <div class="container">
                        <div class="heading text-center">
                            <h4>Mepy Clients</h4>
                        </div>

                        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-5">
                        @foreach($clients as $client)
                            <div class="group cursor-pointer text-center">
                                <div class="relative h-[200px] rounded-3xl transition-all duration-500 group-hover:shadow-[0_0_25px_#979797]">
                                    <img src="{{asset('storage/posts/'.$client->logo)}}" alt="client-logo" class="h-full w-full rounded-3xl object-cover object-center" />
                                </div>
                                
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </section>




@endsection