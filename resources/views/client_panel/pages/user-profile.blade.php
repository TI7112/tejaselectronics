@extends('client_panel.component.layout')

@section('title', 'Home')

@section('content')

    <div class="flex justify-center">
        <div class="flex gap-10 w-[90vw] ">
            <div class="w-3/4 py-5">
                <div class="bg-zinc-700 w-full h-32"></div>
                <div class="flex justify-between -mt-[60px] px-[32px]">
                    <img class="w-32 h-32 rounded-full shadow-xl" src="//picsum.photos/500/500" alt="">
                    <div class="">
                        <p class="text-sm text-zinc-300">Name</p>
                        <p class="text-xl -mt-2 text-zinc-300 font-semibold">{{ $user->name }}</p>
                    </div>
                    <div class="">
                        <p class="text-sm text-zinc-300">Phone</p>
                        <p class="text-xl -mt-2 text-zinc-300 font-semibold">{{ $user->phone }}</p>
                    </div>
                    <div class="">
                        <p class="text-sm text-zinc-300">Email</p>
                        <p class="text-xl -mt-2 text-zinc-300 font-semibold">{{ $user->email }}</p>
                    </div>
                </div>
                <div class="flex justify-between gap-5 mt-2">
                    <div class="w-1/3">
                        <div>
                            <h5 class="font-bold text-xl">Update Profile</h5>
                        </div>
                        <form action="" class="gap-3 mt-[2px] flex flex-col">
                            <div class="w-full">
                                <p form="name" class="text-sm">Name*</p>
                                <input type="text" id="name" name="name"
                                    value="{{$user->name}}" class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                            </div>
                            <div class="">
                                <p class="email text-sm">Email*</p>
                                <input type="text" id="email" name="name"
                                    value="{{$user->email}}" class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                            </div>
                            <div class="">
                                <p class="text-sm">Phone*</p>
                                <input type="text" name="phone" value="{{$user->phone}}" class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                            </div>
                            <div class=" mt-2">
                                <button type="submit" class="bg-zinc-800 text-white py-1 px-3 p-2 rounded-md w-full">Update Profile</button>
                            </div>
                        </form>
                    </div>
                    <div class="w-2/3 -mt-16
                    ">
                        <div>
                            <h5 class="font-bold text-xl">Update Address</h5>
                        </div>
                        <form action="" class="gap-3 flex flex-col">
                            <div class="w-full">
                                <p form="name" class="text-sm">Address Line 1*</p>
                                <input type="text" id="address_line_1" name="address_line_1"
                                    class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                            </div>
                            <div class="">
                                <p class="email text-sm">Address Line 2*</p>
                                <input type="text" id="address_line_2" name="address_line_2"
                                    class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                            </div>
                            <div class="flex flex-row gap-2">
                                <div class="w-full">
                                    <p class="text-sm">Landmark*</p>
                                    <input type="text" name="landmark"
                                        class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                                </div>
                                <div class="w-full">
                                    <p class="text-sm">Pincode*</p>
                                    <input type="text" name="pincode"
                                        class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                                </div>
                                
                            </div>
                            <div class="flex flex-row gap-2">
                                <div class="w-full">
                                    <p class="text-sm">City*</p>
                                    <input type="text" name="city"
                                        class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                                </div>
                                <div class="w-full">
                                    <p class="text-sm">State*</p>
                                    <input type="text" name="state"
                                        class="outline-none border-2 border-zinc-300 px-2 py-1 focus:border-zinc-800 rounded-md w-full">
                                </div>
                                
                            </div>
                            <div class=" mt-2">
                                <button type="submit" class="bg-zinc-800 text-white py-1 px-3 p-2 rounded-md w-full">Save Address</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-1/4 bg-red-500">
            </div>
        </div>
    </div>

@endsection
