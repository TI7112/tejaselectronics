@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="bg-white md:px-20 px-4">
        <div class="md:flex gap-5 md:py-10 py-4">
            <div class="md:w-1/2">
                @if (strlen($product->img) > 0)
                    <img class="rounded w-full" src="{{asset('public/upload/product/' . $product->img) }}" alt="">
                @else
                    <img class="rounded" src="./" alt="Image not Available">
                @endif
            </div>
            <div class="md:w-1/2">
                <p class="text-2xl pt-1 font-semibold">{{ $product->name }}</p>
                <div class="flex items-center gap-2">
                    <div class="flex text-yellow-600 md:p-2 px-1">
                        @php
                            $rating = 4.5;
                        @endphp
                        @for ($i = 0; $i < floor($rating); $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        @endfor
                        @if ($rating - floor($rating) > 0)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3" viewBox="0 0 16 16">
                                <path
                                    d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                            </svg>
                        @endif
                        @if (5 - floor($rating) > 0)
                            @if ($rating - floor($rating) > 0)
                                @for ($i = 0; $i < 4 - floor($rating); $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                    </svg>
                                @endfor
                            @else
                                @for ($i = 0; $i < 5 - floor($rating); $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-3 h-3"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                    </svg>
                                @endfor
                            @endif
                        @endif

                    </div>
                    <div class="flex gap-2 text-[10px]">
                        <p>10 Reviews</p>
                        <p>|</p>
                        <a href="" class="hover:text-red-500 hover:underline duration-500">Add your Reviews</a>
                    </div>
                </div>
                <div class="">
                    <p class="text-sm">Category : <a href=""
                            class="hover:text-red-500 hover:underline duration-500">{{ $product->getcategory->name }}</a>
                    </p>
                </div>
                <div class="py-3">
                    <p class="text-sm">{{ $product->description }}</p>
                </div>
                <div class="flex items-end gap-1">
                    <p class="text-3xl font-bold text-red-600">Rs {{ $product->price }}</p>
                    <del class="text-zinc-500 pb-1 text-xs">Rs {{ $product->original_price }}</del>
                </div>
                <div class="flex gap-5 py-2">
                    @if (strlen($product->size) > 0)
                        <div class="flex items-center gap-2">
                            <p>Size : </p>
                            <select class="capitalize border-2 px-2 py-1 rounded-lg " name="size" id="size">
                                @php
                                    $size = explode(',', "$product->size");
                                @endphp
                                @foreach ($size as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                    @if (strlen($product->color) > 0)
                        <div class="flex items-center gap-2">
                            <p>Colour : </p>
                            <select class="capitalize border-2 px-2 py-1 rounded-lg " name="color" id="color">
                                @php
                                    $color = explode(',', "$product->color");
                                @endphp
                                @foreach ($color as $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </div>
                <div class="py-3">
                    <p class="font-semibold pb-1">Quantity</p>
                    <div class="flex items-center gap-1">
                        <button class="bg-slate-800 rounded px-4 text-xl font-semibold text-white p-2"
                            onclick="handleClick(this)">-</button>
                        <input class="w-10 px-2 outline-none border-2 py-2" type="text" name="quantity" id="quantity"
                            value="1">
                        <button class="bg-slate-800 rounded px-3 text-xl font-semibold text-white p-2"
                            onclick="handleClick(this)">+</button>
                    </div>
                </div>
                <div class="py-3 flex gap-3 items-center">
                    <button class="text-red-500 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                          </svg> --}}
                    </button>
                    <button
                        class="bg-red-600 border-2 border-red-600 hover:text-red-600 hover:bg-white duration-500 text-white uppercase rounded-xl px-6 py-1 font-semibold">Add
                        to cart</button>
                </div>
            </div>
        </div>
        <div class="pb-5">
            <p class="text-3xl font-semibold font-mono">Products of your choice </p>
            <div class="py-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                    @foreach ($productsuggestion as $value)
                        <a href="/product/{{ $value->slug }}" class="">
                            <div
                                class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                                @if ($value->img)
                                    <img class="w-full h-60 duration-500 group-hover:brightness-75"
                                        src="{{ asset('public/upload/product/' . $value->img) }}" alt="">
                                @else
                                    <img class="w-full h-60 duration-500 group-hover:brightness-75"
                                        src="{{ asset('public/upload/product/7.webp') }}" alt="">
                                @endif
                                <div class="p-2 flex justify-between items-center">
                                    <div class="w-full">
                                        <p class="lg:text-xl font-semibold">{{ $value->name }}</p>
                                        <div
                                            class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
                                            <p>Rs {{ $value->price }} <del class="text-zinc-600 text-[10px]">Rs
                                                    {{ $value->original_price }}</del></p>
                                            <p class="text-[10px] md:text-xs text-zinc-400 font-semibold text-zinc-300 24">
                                                {{ $value->getcategory->name }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs px-2 absolute flex text-white top-2 justify-between w-full ">
                                    <div class="">
                                        <button class="text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                            </svg>
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                            </svg> --}}
                                        </button>
                                    </div>
                                    <div class="flex gap-2">
                                        <p class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">30%
                                        </p>
                                        <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        const handleClick = (params) => {
            if (params.innerText == "+") {
                quantity.value = parseInt(quantity.value) + 1
            } else {
                if (quantity.value > 0) {
                    quantity.value = parseInt(quantity.value) - 1
                }
            }
        }
    </script>

@endsection
