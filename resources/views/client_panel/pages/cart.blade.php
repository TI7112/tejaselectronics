@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

        <div class="flex lg:flex-row flex-wrap  mt-3">
            <div class="lg:w-3/4 w-full  pe-1 w-full">
                <div class="w-full py-3">
                    <h1 class="text-2xl font-bold uppercase">Shopping Cart</h1>
                </div>
                <div class="flex flex-col gap-2 ">
                    @foreach ($cart as $value)
                    <div class="flex flex-row border-zinc-300 border-2 rounded-md relative">
                        <div
                            class="w-60 overflow-hidden border-r-2 border-zinc-300 rounded-r-md">
                            <img class="lg:w-60 w-full scale-105" src="{{ asset('upload/product/'. $value->getproduct->img) }}" alt="image">
                        </div>
                        <div class="flex flex-col p-3 w-4/5 leading-3 bg-zinc-50 relative lg:h-auto h-40">
                            <div class="w-80 leading-3">
                                <h5 class="font-bold text-xl uppercase">{{ $value->getproduct->name }}</h5>
                                <p class="text-sm uppercase text-zinc-600 py-1.5"><span class="font-bold capitalize text-black">category : </span>{{ $value->getproduct->getcategory->name }}</p>
                                <p class="text-2xl absolute bottom-12 left-2">Rs. {{ $value->getproduct->price }}</p>
                            </div>
                            <div class="flex flex-row justify-between  ">
                                <div class="flex flex-row items-center justify-start gap-2">
                                    <p class="flex justify-center items-center hover:text-red-500 duration-300 px-2 py-1 absolute top-2  right-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                            class="bi bi-heart text-sm" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                        </svg>
                                    </p>
                                </div>
                                <div class="flex flex-row justify-between gap-2 absolute bottom-1 right-2 left-2">
                                    <div class="flex">
                                    <a href="#" class="bg-zinc-700 hover:bg-zinc-900 p-2 flex justify-center items-center duration-300 text-white rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                        </svg>
                                    </a>
                                    <span class="px-2 items-center flex justify-center" name="quantity">{{ $value->quantity }}</span>
                                    <a href="#" class="bg-zinc-700 hover:bg-zinc-900 p-2 flex justify-center items-center duration-300 text-white rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                            class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg>
                                    </a>
                                    </div>
                                    <a href="#"
                                        class="flex justify-center items-center hover:scale-75 bg-red-500 text-white p-2 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Related Products -->
                <div class="mt-5">
                    <div class="flex lg:flex-row my-2 ps-2">
                        <h5 class="text-xl font-bold uppercase">Related Products</h5>
                    </div>
                    <div class="lg:flex lg:flex-row flex-wrap">
                        <div class="lg:w-1/3 w-full p-2">
                            <a href="/product/lost" class="">
                                <div
                                    class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                                    <img class="w-full h-56 md:h-64 duration-500 group-hover:brightness-75"
                                        src="https://old.tejaselectronics.in/public/upload/product/7.webp" alt="">
                                    <div class="p-2 flex justify-between items-center">
                                        <div class="w-full">
                                            <p class="lg:text-xl font-semibold">lost</p>
                                            <div
                                                class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
                                                <p>Rs 1200 <del class="text-zinc-600 text-[10px]">Rs
                                                        3200</del></p>
                                                <p class="text-[10px] md:text-xs  font-semibold text-zinc-300 24">
                                                    TV
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs px-2 absolute flex text-white top-2 justify-between w-full ">
                                        <div class="">
                                            <button class="text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="w-5 h-5" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15">
                                                    </path>
                                                </svg>

                                            </button>
                                        </div>
                                        <div class="flex gap-2">
                                            <p
                                                class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">
                                                30%</p>
                                            <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="lg:w-1/3 w-full p-2">
                            <a href="/product/lost" class="">
                                <div
                                    class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                                    <img class="w-full h-56 md:h-64 duration-500 group-hover:brightness-75"
                                        src="https://old.tejaselectronics.in/public/upload/product/7.webp" alt="">
                                    <div class="p-2 flex justify-between items-center">
                                        <div class="w-full">
                                            <p class="lg:text-xl font-semibold">lost</p>
                                            <div
                                                class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
                                                <p>Rs 1200 <del class="text-zinc-600 text-[10px]">Rs
                                                        3200</del></p>
                                                <p class="text-[10px] md:text-xs  font-semibold text-zinc-300 24">
                                                    TV
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs px-2 absolute flex text-white top-2 justify-between w-full ">
                                        <div class="">
                                            <button class="text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="w-5 h-5" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15">
                                                    </path>
                                                </svg>

                                            </button>
                                        </div>
                                        <div class="flex gap-2">
                                            <p
                                                class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">
                                                30%</p>
                                            <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="lg:w-1/3 w-full p-2">
                            <a href="/product/lost" class="">
                                <div
                                    class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                                    <img class="w-full h-56 md:h-64 duration-500 group-hover:brightness-75"
                                        src="https://old.tejaselectronics.in/public/upload/product/7.webp" alt="">
                                    <div class="p-2 flex justify-between items-center">
                                        <div class="w-full">
                                            <p class="lg:text-xl font-semibold">lost</p>
                                            <div
                                                class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
                                                <p>Rs 1200 <del class="text-zinc-600 text-[10px]">Rs
                                                        3200</del></p>
                                                <p class="text-[10px] md:text-xs  font-semibold text-zinc-300 24">
                                                    TV
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs px-2 absolute flex text-white top-2 justify-between w-full ">
                                        <div class="">
                                            <button class="text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="w-5 h-5" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15">
                                                    </path>
                                                </svg>

                                            </button>
                                        </div>
                                        <div class="flex gap-2">
                                            <p
                                                class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">
                                                30%</p>
                                            <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="lg:w-1/3 w-full p-2">
                            <a href="/product/lost" class="">
                                <div
                                    class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                                    <img class="w-full h-56 md:h-64 duration-500 group-hover:brightness-75"
                                        src="https://old.tejaselectronics.in/public/upload/product/7.webp" alt="">
                                    <div class="p-2 flex justify-between items-center">
                                        <div class="w-full">
                                            <p class="lg:text-xl font-semibold">lost</p>
                                            <div
                                                class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
                                                <p>Rs 1200 <del class="text-zinc-600 text-[10px]">Rs
                                                        3200</del></p>
                                                <p class="text-[10px] md:text-xs  font-semibold text-zinc-300 24">
                                                    TV
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs px-2 absolute flex text-white top-2 justify-between w-full ">
                                        <div class="">
                                            <button class="text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="w-5 h-5" viewBox="0 0 16 16">
                                                    <path
                                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15">
                                                    </path>
                                                </svg>

                                            </button>
                                        </div>
                                        <div class="flex gap-2">
                                            <p
                                                class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">
                                                30%</p>
                                            <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/4 w-full ps-1 pt-[56px]">
                <!-- aside price -->
                <div class="flex flex-col bg-zinc-50 p-3 border-2 border-zinc-300 rounded-md">
                    <div class="flex flex-col">
                        <h4 class="flex justify-between item-cneter">Subtotal (1 item): <span>---</span> 
                        <b>&#8377; 
                            @php
                                $total = 0;
                                foreach ($cart as $value){
                                    $total += $value->getproduct->price * $value->quantity;  
                                } 
                            @endphp

                            {{ $total }}
                        </b></h4>
                        <h5 class="flex justify-between item-cneter">Delivery Fee: <span>---</span> <b>&#8377; {{ $delivery_charge }}</b></h5>
                        <hr class="my-2 ">
                        <h3 class="flex justify-between item-cneter">Order Total: <span>---</span> <b>&#8377; {{ $total + $delivery_charge }}</b></h3>
                    </div>

                    <div class="flex flex-row justify-end my-2">
                        <a
                            class=" bg-red-500 text-white hover:bg-red-600 hover:text-zinc-100 hover:shadow-md px-4 py-1 rounded-lg">
                            Proceed to Buy
                        </a>
                    </div>
                </div>
                <!-- relative product -->
                <div class="flex flex-row justify-start font-bold text-sm my-2 ">
                    <h5 class="font-bold uppercase tracking-wider text-lg border-red-500 border-b-2 inline">Your like Items</h5>
                </div>
                <div class="flex flex-col bg-zinc-100  ">
                <div class="p-1 border-2 border-zinc-200">
                    <div class="flex flex-row border-b-2 border-zinc-800 py-2 relative">
                        <div class="lg:w-1/3 w-full">
                            <div class="flex flex-row justify-center items-center overflow-hidden">
                                <img src="https://tejaselectronics.in/img/Speeker/1.jpg" alt="speeker"
                                    class="hover:scale-125 overflow-hidden hover:duration-500">
                            </div>
                        </div>
                        <div class="w-2/3">
                            <div class="flex flex-col ps-2 pt-2">
                                <h4>title name</h4>
                                <p class="text-red-500 font-bold"> &#8377; 200</p>
                            </div>
                            <div class="flex flex-row ps-2 justify-start my-2">
                                <a
                                    class="border border-zinc-300 hover:bg-zinc-500 hover:text-zinc-100 hover:shadow-md px-4 py-1.5 rounded-lg">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                        <a href="#"
                            class="flex justify-center items-center hover:scale-75 text-white h-8 w-8 bg-red-500 rounded-md absolute top-2 right-1  font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-row border-b-2 border-zinc-800 py-2 relative">
                        <div class="w-1/3">
                            <div class="flex flex-row justify-center items-center overflow-hidden">
                                <img src="https://tejaselectronics.in/img/Speeker/1.jpg" alt="speeker"
                                    class="hover:scale-150 overflow-hidden duration-150">
                            </div>
                        </div>
                        <div class="w-2/3">
                            <div class="flex flex-col ps-2 pt-2">
                                <h4>title name</h4>
                                <p class="text-red-500 font-bold"> &#8377; 200</p>
                            </div>
                            <div class="flex flex-row ps-2 justify-start my-2">
                                <a
                                    class="border border-zinc-300 hover:bg-zinc-500 hover:text-zinc-100 hover:shadow-md px-4 py-1.5 rounded-lg">
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                        <a href="#"
                            class="flex justify-center items-center h-8 hover:scale-75 text-white w-8 bg-red-500 rounded-md absolute top-2 right-1  font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection