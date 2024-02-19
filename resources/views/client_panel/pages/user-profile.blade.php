@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="flex justify-center">
        <div class="flex gap-10 w-[90vw] h-96">
            <div class="w-3/4 py-5">
                <div class="bg-zinc-700 w-full h-32"></div>
                <div class="flex justify-between -mt-[60px] px-[32px]">
                    <img class="w-32 h-32 rounded-full shadow-xl" src="//picsum.photos/500/500"
                    alt="">
                <div class="">
                    <p class="text-sm text-zinc-300">Name</p>
                    <p class="text-xl -mt-2 text-zinc-300 font-semibold">Ayush jha</p>
                </div>
                <div class="">
                    <p class="text-sm text-zinc-300">Name</p>
                    <p class="text-xl -mt-2 text-zinc-300 font-semibold">Ayush jha</p>
                </div>
                <div class="">
                    <p class="text-sm text-zinc-300">Name</p>
                    <p class="text-xl -mt-2 text-zinc-300 font-semibold">Ayush jha</p>
                </div>
                </div>
            </div>
            <div class="w-1/4 bg-red-500">
            </div>
        </div>
    </div>

@endsection
