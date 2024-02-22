@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="bg-white">
        <div class="flex lg:px-20 px-4 w-full">
            <div class="w-full flex justify-between bg-white px-4 rounded py-4">
                <div class="flex">
                    <p class="text-sm">SORT BY</p>
                    <select class="text-sm px-2 border-2 outline-none ml-2 -mt-1" name="category" id="category">
                        <option selected disabled>Category</option>
                        @foreach ($category as $value)
                            <option value="{{ $value->slug }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex gap-2">
                    <button class="rounded p-1 bg-red-500 text-white duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 16 16">
                            <path
                                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <hr>
        <div class="lg:px-20 px-4 py-5 bg-white rounded-xl ">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                @foreach ($product as $value)
                <a href="/product/{{$value->slug}}" class="">
                    <div
                        class="border-2 border-zinc-600 relative group bg-zinc-900 text-white rounded-xl overflow-hidden">
                            <div class="bg-zinc-100">
                                @if ($value->img)
                                <img class="duration-500 group-hover:brightness-75"
                                    src="{{ asset('upload/product/' . $value->img) }}" alt="">
                            @else
                                <img class="duration-500 group-hover:brightness-75"
                                    src="{{ asset('upload/product/7.webp') }}" alt="">
                            @endif
                        </div>
                        <div class="p-2 flex justify-between items-center">
                            <div class="w-full">
                                <p class="lg:text-xl font-semibold">{{ $value->name }}</p>
                                <div class="flex flex-col-reverse md:flex-row justify-between md:items-center w-full">
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
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                    </svg>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                    </svg> --}}
                                </button>
                            </div>
                            <div class="flex gap-2">
                                <p class="border-red-500 text-red-500 border-2 px-3 py-0.5 rounded bg-white">30%</p>
                                <p class="bg-red-500 px-3 py-0.5 rounded">NEW</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="px-2 py-3 pb-0">
                {{ $product->links() }}
            </div>
        </div>
    </div>

    <script>
        $('#category').on('change' , function redirect() {
            val = $('#category').val()
            window.open('/category/'+val , "_self");
        })
    </script>

@endsection
