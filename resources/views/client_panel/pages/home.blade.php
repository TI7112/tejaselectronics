@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <style>
        .overflow-handle::-webkit-scrollbar {
            display: none;
        }
    </style>

    <div class="flex justify-center w-full">
        <div class="hidden w-[80%] md:flex overflow-handle overflow-x-scroll gap-5  py-5">
            @foreach ($catbanner as $value)
                <a class="hover:scale-110 w-40 flex flex-col items-center duration-500" href="/category/{{ $value->slug }}">
                    <img class="w-20 h-20 rounded-full" src="{{ asset('upload/category/' . $value->img) }}" alt="">
                    <p class="text-center text-sm font-semibold">{{ $value->name }}</p>
                </a>
            @endforeach
        </div>
    </div>
    <div class="swiper relative">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="flex w-full gap-5 justify-center items-center swiper-slide h-96 md:h-full">
                <img class="h-full w-full" src="{{ asset('upload/banner/banner.webp') }}" alt="">
            </div>
            <div class="flex w-full gap-5 justify-center items-center swiper-slide h-96 md:h-full">
                <img class="h-full w-full" src="{{ asset('upload/banner/banner22.webp') }}" alt="">
            </div>
            <div class="flex w-full gap-5 justify-center items-center swiper-slide h-96 md:h-full">
                <img class="h-full w-full" src="{{ asset('upload/banner/banner33.webp') }}" alt="">
            </div>

            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination pb-3"></div>

        <!-- If we need navigation buttons -->
        <div class="hidden md:block swiper-button-prev text-white mx-10"></div>
        <div class="hidden md:block swiper-button-next text-white mx-10"></div>

        <!-- If we need scrollbar -->
        {{-- <div class="swiper-scrollbar"></div> --}}

    </div>
    {{-- Collections --}}

    <div class="flex justify-center w-full min-h-screen  ">
        <div class="flex flex-col md:items-center md:w-[80%] px-4">
            <div class="md:py-20 pt-12 pb-5">
                <p class="text-xl md:text-4xl uppercase font-bold tracking-wider">Our Collection</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                @foreach ($category as $value)
                    <a href="/category/{{ $value->slug }}">
                        <div
                            class="border-2 border-zinc-600 relative group bg-zinc-300 text-white rounded-xl overflow-hidden">
                            <img class="rotate-12 group-hover:rotate-0 scale-125 group-hover:scale-100 duration-500 group-hover:brightness-75"
                                src="{{ asset('upload/category/' . $value->img) }}" alt="">
                            <div class="p-2 bg-[rgba(0,0,0,0.6)] absolute bottom-0 w-full flex justify-between items-end">
                                <p class="text-xs md:text-xl font-semibold">{{ $value->name }}</p>
                                <p
                                    class="bg-white text-[10px] md:text-base border-2 font-bold border-white hover:bg-transparent text-zinc-800 hover:text-white px-3 rounded-full">
                                    Checkout</p>
                            </div>
                            <p
                                class="text-[8px] md:text-xs bg-red-500 absolute text-white top-2 right-2 px-3 py-0.5 rounded">
                                NEW</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Products --}}

    <div class="flex justify-center">
        <div class="md:w-[80%] px-4">
            <div class="md:py-20 pt-12 pb-5">
                <p class="text-xl md:text-4xl uppercase font-bold tracking-wider">New Arrivals</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                @foreach ($product as $value)
                    <div class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                        <a href="/product/{{ $value->slug }}" class="">
                        @if ($value->img)
                        <img class="w-full h-56 md:h-64 duration-500 group-hover:brightness-75"
                                    src="{{ asset('upload/product/' . $value->img) }}" alt="">
                            @else
                                <img class="w-full h-56 md:h-64 duration-500 group-hover:brightness-75"
                                    src="{{ asset('upload/product/7.webp') }}" alt="">
                            @endif
                            <div class="p-2 flex justify-between items-center">
                                <div class="w-full">
                                    <p class="md:text-xl text-xs font-semibold">{{ $value->name }}</p>
                                    <div class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
                                        <p>Rs {{ $value->price }} <del class="text-zinc-600 text-[10px]">Rs
                                                {{ $value->original_price }}</del></p>
                                        <p class="text-[8px] md:text-xs text-zinc-400 font-semibold text-zinc-300 24">
                                            {{ $value->getcategory->name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="text-xs px-2 absolute flex text-white top-2 justify-between w-full ">
                            <div class="">
                                <button id="xyzyzyzus_{{ $value->id }}"
                                    class="unliked product_wishlist_handle text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                    </svg>
                                    {{--<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                               <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                        </svg>  --}}
                                </button>
                            </div>
                            <div class="flex gap-2">
                                <p class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">30%</p>
                                <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Newsletter --}}

    {{-- <div class="flex pt-5 flex-col bg-slate-800 items-center py-16">
        <p class="text-xl md:text-4xl text-center text-white font-mono py-5">Sign Up for the <span
                class="font-bold">NEWSLETTER</span></p>
        <div class="flex flex-col items-end gap-2">
            <input type="text" name="email" placeholder="Enter your Email"
                class="outline-none border-2 rounded px-2 py-0.5 w-80 md:w-96 focus:border-white">
            <button
                class="bg-red-500 px-2 text-white rounded hover:bg-red-600 font-semibold py-0.5 border-2 border-red-500">Subscribe</button>
        </div>
    </div> --}}

    <script>
        const swiper = new Swiper('.swiper', {

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
 
        $('.product_wishlist_handle').on('click', function() { 
            console.log(this.id);
        })
    </script>

@endsection
