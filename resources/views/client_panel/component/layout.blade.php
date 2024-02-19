<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tejas Electronics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    {{-- header  --}}
    <div class="fixed w-full z-50 border-b-4 border-red-500 flex justify-between bg-zinc-800 py-4 md:px-20 px-4">
        <div class="flex w-full gap-4">
            <button onclick="handlemobilemenu()" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-10 h-10 text-white"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
            <div id="mobilemenu"
                class="duration-500 -translate-x-full w-full h-screen bg-zinc-900 fixed top-[77px] left-0">
                <div class="grid grid-cols-2">
                    <div class="">
                        <p class="text-2xl text-white px-5 pt-6">Quicklinks</p>
                        <div class="text-zinc-300 px-8 py-2 flex flex-col">
                            <a href="{{ route('home') }}" class="text-sm hover:underline">Home</a>
                            <a href="{{ route('about') }}" class="text-sm hover:underline">About</a>
                            <a href="{{ route('store') }}" class="text-sm hover:underline">Store</a>
                            <a href="{{ route('contact') }}" class="text-sm hover:underline">Support</a>
                        </div>
                    </div>
                    <div class="">
                        <p class="text-2xl text-white pt-6">Category</p>
                        <div class="text-zinc-300 list-disc p-2 flex flex-col">
                            @foreach ($category as $value)
                                <li><a href="/category/{{ $value->slug }}"
                                        class="text-sm hover:underline capitalize">{{ $value->name }}</a></li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full lg:w-auto">
                <a href="{{ route('home') }}">
                    <img class="w-24" src="{{ asset('static/logo.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="hidden w-full justify-end md:flex text-zinc-300 font-semibold items-center gap-5">
            <a class="hover:underline hover:text-white duration-500" href="{{ route('home') }}">Home</a>
            <a class="hover:underline hover:text-white duration-500" href="{{ route('about') }}">About</a>
            <a class="hover:underline hover:text-white duration-500" href="{{ route('store') }}">Store</a>
            <a class="hover:underline hover:text-white duration-500" href="{{ route('contact') }}">Contact us</a>
            @if (session()->has('user'))
                <div class="flex gap-3">
                    <div class="">
                        <img class="w-12 h-12 rounded-full" src="//picsum.photos/500/500" alt="">
                    </div>
                    <div x-data="{ open: false }" class="flex flex-col">
                        <button @click="open = !open" class="mt-1 -mb-1">Mr {{ $user->name }}</button>
                        <div class="text-sm text-green-500 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="w-8 h-8 -ml-2 -mt-1" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                            </svg>
                            <p class="-ml-2">online</p>
                        </div>
                        <div x-show="open"
                            class="w-48 absolute right-0 top-[84px] flex flex-col bg-zinc-100 text-zinc-800">
                            <a class="w-full py-1 px-5 border-b-2 hover:bg-zinc-300 duration-300" href="{{ route('user_profile')}}">Profile</a>
                            <a class="w-full py-1 px-5 border-b-2 hover:bg-zinc-300 duration-300" href="">Orders</a>
                            <a class="w-full py-1 px-5 border-b-2 hover:bg-zinc-300 duration-300" href="">Wishlist</a>
                            <a class="w-full py-1 px-5 border-b-2 hover:bg-zinc-300 duration-300" href="">Cart</a>
                            <a class="w-full py-1 px-5 border-b-2 hover:bg-zinc-300 duration-300" href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            @else
                <a class="bg-zinc-300 text-zinc-800 px-5 rounded-full border-2 border-zinc-300 hover:text-zinc-300 duration-500 hover:bg-zinc-800 "
                    href="{{ route('login') }}">Login</a>
            @endif
            <div x-data="{ open: false }" class="hidden flex gap-2">
                <img @click="open = !open" class="cursor-pointer w-10 h-10 rounded-full" src="//picsum.photos/500/500"
                    alt="">
                <div class="flex flex-col">
                    <p @click="open = !open" class="cursor-pointer text-sm">Welcome User</p>
                    <a class="text-xs text-red-500" href="">logout</a>
                </div>
                <div x-show="open" class="capitalize absolute bg-zinc-800 text-zinc-300 top-[76px] flex flex-col py-2">
                    <a class="hover:text-zinc-800 hover:bg-zinc-300 duration-500 px-5 py-0.5 text-sm" href="">My
                        account</a>
                    <a class="hover:text-zinc-800 hover:bg-zinc-300 duration-500 px-5 py-0.5 text-sm" href="">My
                        orders</a>
                    <a class="hover:text-zinc-800 hover:bg-zinc-300 duration-500 px-5 py-0.5 text-sm" href="">My
                        Address</a>
                    <a class="hover:text-zinc-800 hover:bg-zinc-300 duration-500 px-5 py-0.5 text-sm" href="">My
                        Cart</a>
                    <a class="hover:text-zinc-800 hover:bg-zinc-300 duration-500 px-5 py-0.5 text-sm" href="">My
                        wishlist</a>
                </div>
            </div>
        </div>
    </div>
    {{-- body  --}}
    <div class="pt-[78px] min-h-[70vh]">
        @yield('content')
    </div>
    {{-- footer  --}}
    <div class="">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 px-4 md:px-20 bg-slate-900 py-4 md:py-8 text-white">
            <div class="">
                <p class="text-2xl font-semibold font-mono uppercase">ABOUT US</p>
                <div class="flex flex-col gap-1 pt-3 text-sm px-2">
                    <p>TEJAS is the Best Indian Electronic products manufacturing company that was established in vision
                        Make in India with a mission Enhancing Lives Through innovative Technology to create Electronic
                        Products that have good quality. Lower running costs Low maintenance and good performances</p>
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-5 h-5" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        <a class="hover:underline hover:text-red-500 duration-500"
                            href="https://maps.app.goo.gl/TXekDoftvV6DywsD6.">
                            <p> 23, Panchkuia Road, R.K. Ashram Marg, New Delhi, Delhi - 110001</p>
                        </a>
                    </div>
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-4 h-4" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <p class="flex flex-wrap">
                            <a class="hover:underline hover:text-red-500 duration-500" href="tel:+9185271248246">+91
                                8527124824</a>
                            <!--<a class="hover:underline hover:text-red-500 duration-500" href="tel:7311154913">73111-->
                            <!--    54913,</a>-->
                            <!--<a class="hover:underline hover:text-red-500 duration-500" href="tel:18008430828">1800-->
                            <!--    8430828</a>-->
                        </p>
                    </div>
                    <div class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" class="w-4 h-4" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                        <a class="hover:underline hover:text-red-500 duration-500"
                            href="mailto:sales@tejaselectronics.in">
                            <p>sales@tejaselectronics.in</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="">
                <p class="text-2xl font-semibold font-mono uppercase">Category</p>
                <div class="flex flex-col gap-1 pt-3 text-sm px-2">
                    <a class="hover:underline hover:text-red-500 duration-500" href="">TV</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">AC</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Fridge</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Waching Machine</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Torch</a>
                </div>
            </div>
            <div class="">
                <p class="text-2xl font-semibold font-mono uppercase">INFORMATION</p>
                <div class="flex flex-col gap-1 pt-3 text-sm px-2">
                    <a class="hover:underline hover:text-red-500 duration-500" href="{{ route('about') }}">About
                        Us</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="{{ route('contact') }}">Contact
                        Us</a>
                    <a class="hover:underline hover:text-red-500 duration-500"
                        href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Returns And Refund
                        Polices</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Terms & Conditions</a>

                </div>
            </div>
            <div class="">
                <p class="text-2xl font-semibold font-mono uppercase">OUR SERVICES</p>
                <div class="flex flex-col gap-1 pt-3 text-sm px-2">
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Construction</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="//evtejas.com">Electric
                        Vehicles</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Solar Panels</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="">Electronic Goods</a>
                    <a class="hover:underline hover:text-red-500 duration-500" href="{{ route('contact') }}">Help</a>
                </div>
            </div>
        </div>
        <div
            class="md:flex-row flex flex-col items-center gap-2 justify-between py-3 text-white text-sm bg-slate-800 md:px-20 px-4">
            <p>© 2023 All rights reserved | <a href="{{ route('home') }}">Tejas Group</a></p>
            <img src="{{ asset('static/payments.webp') }}" alt="">
        </div>
    </div>

    <script>
        const handlemobilemenu = () => {
            if (mobilemenu.classList.contains('translate-x-0')) {
                mobilemenu.classList.replace('translate-x-0', '-translate-x-full')
            } else {
                mobilemenu.classList.replace('-translate-x-full', 'translate-x-0')

            }
        }
    </script>
</body>

</html>
