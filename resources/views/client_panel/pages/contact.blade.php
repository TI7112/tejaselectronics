@extends('client_panel.component.layout')

@section('title' , 'Home')

@section('content')

<div class="min-h-96 flex flex-col justify-center bg-slate-200">
    <p class="text-center text-3xl text-center font-semibold font-mono tracking-loose pt-6">Contact Us</p>
    <p class="text-center text-xs md:text-base font-bold text-center font-mono tracking-loose pb-8">If you have any question please reach us.</p>
    <div class="flex flex-col md:flex-row justify-center gap-10 pb-10 px-4">
        <div class="flex flex-col justify-center rounded bg-white text-center px-16 py-4">
            <p class="text-xl font-semibold">Our Address</p>
            <p class="text-sm">23, Panchkuia Road, R.K. Ashram Marg,</p>
            <p class="text-sm">New Delhi, Delhi - 110001</p>
        </div>
        <div class="flex flex-col justify-center rounded bg-white text-center px-16 py-4">
            <p class="text-xl font-semibold">Email Us</p>
            <a href="mailto:sales@tejaselectronics.in" class="text-sm">sales@tejaselectronics.in</a>
        </div>
        <div class="flex flex-col justify-center rounded bg-white text-center px-16 py-4">
            <p class="text-xl font-semibold">Call Us</p>
            <a href="tel:+918527124824" class="text-sm">+91 8527124824</a>
        </div>

    </div>
    <div class="flex justify-center p-5 md:p-0 md:pb-5">
            <form action="" method="POST" class="md:w-[55VW] w-full rounded-lg bg-white p-5 flex flex-col gap-4">
                <div class="flex flex-col md:flex-row gap-5">
                    <div class="w-full flex flex-col gap-1">
                        <p class="text-sm">Name</p>
                        <input name="name" placeholder="Enter your name" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                    </div>
                    <div class="w-full flex flex-col gap-1">
                        <p class="text-sm">Email</p>
                        <input name="email" placeholder="Enter your email" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Contact No</p>
                    <input name="phone" placeholder="Enter your phone no" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Subject</p>
                    <input name="Subject" placeholder="Enter your Subject" type="text" class="outline-none border-2 text-black rounded px-1.5 py-0.5">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-sm">Concern</p>
                    <textarea name="message" placeholder="Enter your Concern" rows="4" class="outline-none border-2 text-black rounded px-1.5 py-0.5"></textarea>
                </div>
                <div class="">
                    <button type="submit" class="bg-zinc-700 text-white px-10 py-0.5 rounded hover:bg-zinc-800 duration-500">Submit</button>
                </div>

            </form>
        </div>
</div>

@endsection